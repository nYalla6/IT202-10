<?php
require(__DIR__ . "/../../partials/nav.php");

require(__DIR__ . "/../../partials/flash.php");

is_logged_in(true);
$results = [];
$params = [];

$db = getDB();
$user_id = get_user_id();


$total_query = "SELECT count(1) AS total FROM Orders INNER JOIN OrderItems ON OrderItems.order_id= Orders.id INNER JOIN Products ON OrderItems.product_id = Products.id";
$base_query = "SELECT DISTINCT Orders.id, Orders.user_id, Orders.total_price, Orders.address, Orders.payment_method, Products.category, Orders.created FROM Orders INNER JOIN OrderItems ON OrderItems.order_id= Orders.id INNER JOIN Products ON OrderItems.product_id = Products.id";
$query = " WHERE user_id = :user_id";
$params[":user_id"] = $user_id;

if (has_role("shop_owner")) {
    $query = " ";
    $params = [];
}

$column_created = se($_GET, "col", "created", false);
//allowed
if (!in_array($column_created, ["total_price", "category", "created"])) {
    $column_created = "created"; //created default value
}

$order = se($_GET, "order", "asc", false);
//allowed
if (!in_array($order, ["asc", "desc"])) {
    $column_created = "desc"; //created default value
}

$category = se($_GET, "category", "", false);
if ($category != "select" && !(empty($category))) {
    $query .= " AND Products.category = :category";
    $params[":category"] = $category;
}

$time_created = se($_GET, "created", "", false);
if ($time_created != "select" && !(empty($time_created))) {
    $query .= " AND Orders.created >= DATE_SUB(NOW(), INTERVAL 1 $time_created)";
}

if (!empty($col) && !empty($order) && $col != "select" && $order != "select") {
    $query .= " ORDER BY Orders.$column_created $order";
}

$per_page = 10;

paginate($total_query . $query, $params, $per_page);
$query .= " LIMIT :offset, :count";
$params[":offset"] = $offset;
$params[":count"] = $per_page;

$stmt = $db->prepare($base_query . $query); //dynamically generated query
//we'll want to convert this to use bindValue so ensure they're integers so lets map our array
foreach ($params as $key => $value) {
    $type = is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR;
    $stmt->bindValue($key, $value, $type);
}
$params = null; //set it to null to avoid issues
$shop_total = 0;

try {
    $stmt->execute($params); //dynamically populated params to bind
    $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($r) {
        $results = $r;
        foreach ($results as $res) {
            $shop_total = $shop_total + $res["total_price"];
        }

        //error_log("got data: " . var_export($results, true));
    }
} catch (PDOException $e) {
    //flash("<pre>" . var_export($e, true) . "</pre>");
    error_log("error getting data: " . var_export($e, true));
}
?>

<div class="container-fluid">
    <h1>Purchase History</h1>
    <form method="GET" class="row row-cols-lg-auto g-3 align-items-center">
        <label for="category">Search by Category:</label>
        <select name="category" id="category">
            <option value="select">select</option>
            <option value="General">General</option>
            <option value="Toys">Toys</option>
        </select>
        <label for="created">Search by Purchase Date:</label>
        <select name="created" id="created">
            <option value="select">select</option>
            <option value="day">Past Day</option>
            <option value="week">Past Week</option>
            <option value="month">Past Month</option>
            <option value="year">Past Year</option>
        </select>
        <label for="col">Sort By:</label>
        <select name="col" id="col">
            <option value="select">select</option>
            <option value="total_price">Total Price</option>
            <option value="created">Time</option>
        </select>
        <select name="order" value="<?php se($order) ?>">
            <option value="select">select</option>
            <option value="asc">Low to high</option>
            <option value="desc">High to low</option>
        </select>
        <input type="submit" class="btn btn-primary" value='Search'>
    </form>

    <?php include(__DIR__ . "/../../partials/pagination.php"); ?>
    <!-- the foreach loop -->
    <?php if (has_role("shop_owner")) : ?>
        <div class="card">
            <h3>Total Spending: $<?php se(number_format($shop_total, 2)); ?></h3>
        </div>
    <?php endif ?>
    <br>
    <?php foreach ($results as $item) : ?>
        <?php $time = strtotime($item['created']);
        $date = date("m/d/Y", $time); ?>
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Purchase Date: <?php se($date); ?><?php if (has_role("shop_owner")) : ?>, User: <?php se($item['user_id']); ?> <?php endif ?></h5>
                </div>
                <div class="card-body">
                    <label class="form-label" for="ship"> <b>Shipping Address:</b> <?php se($item["address"]) ?> </label>
                    <label class="form-label" for="pay"><b>Payment Method:</b> <?php se($item["payment_method"]) ?> </label>
                    <br>
                    <label class="form-label" for="category-value"><b>Category:</b> <?php se($item["category"]) ?> </label>
                </div>
                <div class="card-footer">
                    Total Cost: $ <?php se($item, "total_price"); ?>
                    <a href="order_details.php?id=<?php se($item, "id"); ?>">Order Details</a>
                </div>
            </div>
            <br>
        </div>
    <?php endforeach; ?>

</div>