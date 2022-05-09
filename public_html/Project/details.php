<?php
require(__DIR__ . "/../../partials/nav.php");
$TABLE_NAME = "Products";

//get the table definition
$result = [];
$columns = get_columns($TABLE_NAME);
//echo "<pre>" . var_export($columns, true) . "</pre>";
$ignore = ["id", "name", "modified", "created", "avg_rating" ,"num_rating"];
$db = getDB();
//get the item
$id = se($_GET, "id", -1, false);
$user_id = get_user_id();

$stmt = $db->prepare("SELECT * FROM $TABLE_NAME where id =:id");
try {
    $stmt->execute([":id" => $id]);
    $r = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($r) {
        $result = $r;
        $avg_rating=$r['avg_rating'];
        $avg_rating = round($avg_rating, 1);
    }
} catch (PDOException $e) {
    error_log(var_export($e, true));
    flash("Error looking up record", "danger");
}

//see if the user has purchases to allow them to rate
$purchase = false;
$stmt = $db->prepare("SELECT Orders.id FROM Orders INNER JOIN OrderItems ON OrderItems.order_id = Orders.id WHERE Orders.user_id = :user_id && OrderItems.product_id = :product_id");

try {
    $stmt->execute([":user_id" => $user_id, ":product_id" => $id ]);
    $r = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($r) {
        $purchase = true;
    }
    
} catch (PDOException $e) {
    error_log("<pre>" . var_export($e, true) . "</pre>");
}


//uses the fetched columns to map via input_map()
function map_column($col)
{
    global $columns;
    foreach ($columns as $c) {
        if ($c["Field"] === $col) {
            return input_map($c["Type"]);
        }
    }
    return "text";
}
?>
<br>
<div class="card mx-auto text-white bg-dark mb-3" style="max-width: 35%">
    <h1 class="card-header"><?php se($result, "name"); ?> Details</h1>

    <div class="card-body">
        <?php foreach ($result as $column => $value) : ?>
            <?php /* Lazily ignoring fields via hardcoded array*/ ?>
            <?php if (!in_array($column, $ignore)) : ?>
                <div class="card-body">
                    <p class="card-text" for="<?php se($column); ?>"><?php se($column); ?>: <?php se($value); ?></p>

                </div>

            <?php endif; ?>
        <?php endforeach; ?>
    </div>

    <?php if (has_role("Admin") || has_role("shop_owner")) : ?>
        <div class="card-footer">
            <a href="admin/edit_item.php?id=<?php se($result, "id"); ?>">Edit</a>
        </div>
    <?php endif; ?>

</div>
</div>

<?php
//note we need to go up 1 more directory
require_once(__DIR__ . "/../../partials/footer.php");
?>