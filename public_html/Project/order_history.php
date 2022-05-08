<?php
require(__DIR__ . "/../../partials/nav.php");

require(__DIR__ . "/../../partials/flash.php");

is_logged_in(true);
$results = [];

$db = getDB();
$user_id = get_user_id();
$params = [];
$total_query = "SELECT count(1) AS total FROM Orders INNER JOIN OrderItems ON OrderItems.order_id= Orders.id INNER JOIN Products ON OrderItems.product_id = Products.id";
$base_query = "SELECT Orders.id, Orders.user_id, Orders.created, Orders.total_price, Orders.address, Orders.payment_method FROM Orders";
$query = " WHERE user_id = :user_id";
$params[":user_id"] = $user_id;

$per_page = 10;

if (has_role("shop_owner")){
    $query=" ";
    $params=[];
}

paginate($total_query . $query, $params, $per_page);
$query .= " LIMIT :offset, :count";
$params[":offset"] = $offset;
$params[":count"] = $per_page;

$stmt = $db->prepare($base_query . $query); //dynamically generated query
//we'll want to convert this to use bindValue so ensure they're integers so lets map our array
foreach ($params as $key => $value) {
    $type = is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR;
    $stmt->bindValue($key, $value, $type);
    //error_log("bound data: " . var_export($key, true));
}
$params = null; //set it to null to avoid issues

try {
    $stmt->execute($params); //dynamically populated params to bind
    $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($r) {
        $results = $r;
        //error_log("got data: " . var_export($results, true));
    }
} catch (PDOException $e) {
    //flash("<pre>" . var_export($e, true) . "</pre>");
    error_log("error getting data: " . var_export($e, true));
}
?>

<div class="container-fluid">
    <h1>Purchase History</h1>

    <?php include(__DIR__ . "/../../partials/pagination.php"); ?>
    <!-- the foreach loop -->
    <?php foreach ($results as $item) : ?>
        <?php $time = strtotime($item['created']);
        $date = date("m/d/Y", $time); ?>
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Purchase Date: <?php se($date); ?><?php if (has_role("shop_owner")): ?>, User: <?php se($item['user_id']); ?> <?php endif ?></h5>
                </div>
                <div class="card-body">
                    <label class="form-label" for="ship">Shipping Address: <?php se($item["address"]) ?> </label>
                    <label class="form-label" for="pay">Payment Method: <?php se($item["payment_method"]) ?> </label>
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