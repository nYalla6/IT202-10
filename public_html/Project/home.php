<?php
require(__DIR__ . "/../../partials/nav.php");

$results = [];
$db = getDB();
//process filters/sorting
//Sort and Filters
$col = se($_GET, "col", "cost", false);

//allowed list
if (!in_array($col, ["name", "description", "category", "unit_price", "created"])) {
    $col = "unit_price"; //default value, prevent sql injection
}
$order = se($_GET, "order", "asc", false);
//allowed list
if (!in_array($order, ["asc", "desc"])) {
    $order = "asc"; //default value, prevent sql injection
}
//get name partial search
$name = se($_GET, "name", "", false);
$category = se($_GET, "category", "", false);

//split query into data and total
$base_query = "SELECT id, name, description, category, unit_price, stock FROM Products";
$total_query = "SELECT count(1) as total FROM Products";

//dynamic query

$query = " WHERE 1=1 and stock > 0 and visibility=1"; //1=1 shortcut to conditionally build AND clauses
if (has_role("Admin") || has_role("shop_owner")) {
    $query = " WHERE 1=1 and stock > 0";
}
$params = []; //define default params, add keys as needed and pass to execute
//apply name filter
if (!empty($name)) {
    $query .= " AND name like :name";
    $params[":name"] = "%$name%";
}

if (!empty($category) && $category != "select") {
    $query .= " AND category = :category";
    $params[":category"] = $category;
}

//apply column and order sort
if (!empty($col) && !empty($order)) {
    $query .= " ORDER BY $col $order"; //be sure you trust these values, I validate via the in_array checks above
}

//paginate function
$per_page = 10;
paginate($total_query . $query, $params, $per_page);
//get the total
/* this comment block has been replaced by paginate()
//get the total
$stmt = $db->prepare($total_query . $query);
$total = 0;
try {
    $stmt->execute($params);
    $r = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($r) {
        $total = (int)se($r, "total", 0, false);
    }
} catch (PDOException $e) {
    flash("<pre>" . var_export($e, true) . "</pre>");
}
//apply the pagination (the pagination stuff will be moved to reusable pieces later)
$page = se($_GET, "page", 1, false); //default to page 1 (human readable number)
$per_page = 3; //how many items to show per page (hint, this could also be something the user can change via a dropdown or similar)
$offset = ($page - 1) * $per_page;
end commented out coded moved to paginate()*/
$query .= " LIMIT :offset, :count";
$params[":offset"] = $offset;
$params[":count"] = $per_page;

//get the records
$stmt = $db->prepare($base_query . $query); //dynamically generated query
//we'll want to convert this to use bindValue so ensure they're integers so lets map our array
foreach ($params as $key => $value) {
    $type = is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR;
    $stmt->bindValue($key, $value, $type);
}
$params = null; //set it to null to avoid issues


//$stmt = $db->prepare("SELECT id, name, description, category, stock, unit_price FROM Products WHERE stock > 0 LIMIT 50");
try {
    $stmt->execute($params); //dynamically populated params to bind
    $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($r) {
        $results = $r;
    }
} catch (PDOException $e) {
    error_log(var_export($e, true));
    flash("Error fetching items", "danger");
}
?>
<script>
    function purchase(item) {
        console.log("TODO purchase item", item);
        alert("It's almost like you purchased an item, but not really");
        if (add_to_cart) {
            add_to_cart(item);
        }
    }
</script>

<div class="container-fluid">
    <h1>Shop</h1>

    <form method="GET" class="row row-cols-auto g-3 align-items-center">
        <div class="col">
            <div class="input-group">
                <div class="input-group-text">Name</div>
                <input class="form-control" name="name" value="<?php se($name); ?>" />
            </div>
        </div>
        <div class="col">
            <div class="input-group">
                <div class="input-group-text">Filter by Category</div>
                <!-- make sure these match the in_array filter above-->
                <select class="form-control bg-info" name="category" value="<?php se($col); ?>" data="took">
                    <option value="">Select</option>
                    <option value="General">General</option>
                    <option value="Toys">Toys</option>
                </select>
                <script>
                    //quick fix to ensure proper value is selected since
                    //value setting only works after the options are defined and php has the value set prior
                    document.forms[0].col.value = "<?php se($col); ?>";
                </script>
                <select class="form-control" name="order" value="<?php se($order); ?>">
                    <option class="bg-white" value="asc">Up</option>
                    <option class="bg-white" value="desc">Down</option>
                </select>
                <script data="this">
                    //quick fix to ensure proper value is selected since
                    //value setting only works after the options are defined and php has the value set prior
                    document.forms[0].order.value = "<?php se($order); ?>";
                    if (document.forms[0].order.value === "asc") {
                        document.forms[0].order.className = "form-control bg-success";
                    } else {
                        document.forms[0].order.className = "form-control bg-danger";
                    }
                </script>
            </div>
        </div>
        <div class="col">
            <div class="input-group">
                <input type="submit" class="btn btn-primary" value="Apply" />
            </div>
        </div>
    </form>
    <!-- end form -->
    <?php if (count($results) == 0) : ?>
        <p>No results to show</p>
    <?php else : ?>
        <div class="row">
            <div class="col">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4 g-3">
                    <?php foreach ($results as $item) : ?>
                        <div class="col">
                            <div class="card bg-light" style="height:20em">
                                <div class="card-header">
                                    RM Placeholder
                                </div>
                                <?php if (se($item, "image", "", false)) : ?>
                                    <img src="<?php se($item, "image"); ?>" class="card-img-top" alt="...">
                                <?php endif; ?>

                                <div class="card-body">
                                    <h5 class="card-title">Name: <?php se($item, "name"); ?></h5>
                                </div>

                                <div class="card-body">
                                    <a href="details.php?id=<?php se($item, "id"); ?>">Details</a>
                                </div>

                                <div class="card-footer">
                                    Cost: $<?php se($item, "unit_price"); ?>
                                    <button onclick="purchase('<?php se($item, 'id'); ?>')" class="btn btn-primary">Buy Now</button>
                                    <br>
                                    <?php if (has_role("Admin") || has_role("shop_owner")) : ?>
                                        <a href="admin/edit_item.php?id=<?php se($item, "id"); ?>">Edit</a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>
                <?php endif; ?>
                </div>
                <div class="mt-3">
                    <?php /* added pagination */ ?>
                    <?php require(__DIR__ . "/../../partials/pagination.php"); ?>
                </div>
            </div>
            <div class="col-4" style="min-width:0em">
                <?php require(__DIR__ . "/../../partials/cart.php"); ?>
            </div>
        </div>
</div>

<?php
require(__DIR__ . "/../../partials/footer.php");
?>