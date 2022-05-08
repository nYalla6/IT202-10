<?php
require(__DIR__ . "/../../partials/nav.php");

is_logged_in(true);

$order_results = [];
$order_items = [];

$db = getDB();
$stmt = $db->prepare("SELECT total_price, address, payment_method FROM Orders where id = :id");
$order_id = se($_GET, "id", -1, false);

try {
    $stmt->execute([":id" => $order_id]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($result) {
        $order_results = $result;
        $address = $result["address"];
        $pay_method = $result["payment_method"];
        $price = $result["total_price"];
    }
} catch (PDOException $e) {
    error_log("<pre>" . var_export($e, true) . "</pre>");
}

$stmt = $db->prepare("SELECT OrderItems.quantity, OrderItems.unit_price, Products.name FROM OrderItems INNER JOIN Products ON OrderItems.product_id = Products.id WHERE OrderItems.order_id = :order_id");
try {
    $stmt->execute([":order_id" => $order_id]);
    $r = $stmt->fetchALL(PDO::FETCH_ASSOC);
    if ($r) {
        $order_items = $r;
    }
} catch (PDOException $e) {
    error_log(var_export($e, true));
}

?>

<div class="container-fluid">
    <h1 class="row justify-content-center">Order Details</h1>

    <div class="row justify-content-md-center">
        <div class="col col-lg-4">
            <div class="col-6">
                <label class="form-label" for="address"><b>Address</b></label>
                <label class="form-control" for="country"><?php se($address); ?></label>
            </div>
            <div class="col-6">
                <label class="form-label" for="total"><b>Total Price</b></label>
                <label class="form-control" for="total"><?php se("$ " . $result["total_price"]); ?></label>
            </div>
            <div class="col-6">
                <label class="form-label" for="payment"><b>Payment Method</b></label>
                <label class="form-control" for="country"><?php se($result["payment_method"]); ?></label>
            </div>
        </div>
        <?php foreach ($order_items as $item) : ?>
            <div class="col col-lg-3">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title"><?php se($item, "name"); ?></h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-4">
                            <label class="form-label">Unit Price: $<?php se($item, "unit_price"); ?></label>
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="quantity">Quantity <?php se($item, "quantity"); ?> </label>
                        </div>

                        <div class="mb-4">
                            <label class="form-label" for="subtotal">Subtotal: $<?php se(number_format($item['quantity'] * $item['unit_price'], 2)); ?> </label>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

</div>