<?php
require(__DIR__."/../../partials/nav.php");
is_logged_in(true);
$db = getDB();
$result=[];
$result2=[];
$stmt = $db->prepare("SELECT total_price, address, payment_method FROM Orders where id = :id");
$stmt2 = $db->prepare("SELECT OrderItems.quantity, OrderItems.unit_price, Products.name FROM OrderItems INNER JOIN Products ON OrderItems.product_id = Products.id WHERE OrderItems.order_id = :order_id");
$order_id = se($_GET, "id", -1, false);
try {
    $stmt->execute([":id" => $order_id]);
    $r = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($r) {
        $result = $r;
        $address= $r["address"];
        $payment = $r["payment_method"];
        $total = $r["total_price"];
    }
    
}catch (PDOException $e) {
    flash("<pre>" . var_export($e, true) . "</pre>");
}

try {
    $stmt2->execute([":order_id" => $order_id]);
    $m = $stmt2->fetchALL(PDO::FETCH_ASSOC);
    if ($m) {
        $result2 = $m;
    }
    
}catch (PDOException $e) {
    flash("<pre>" . var_export($e, true) . "</pre>");
}

?>

<div class="container-fluid">
    <h1>Order Details</h1>
    <div class="mb-3">
        <label class="form-label" for="address">Address</label>
        <label class="form-control" for="country"><?php se($address);?></label>
    </div>
    <div class="mb-3">
        <label class="form-label" for="total">Total Price</label>
        <label class="form-control" for="total"><?php se("$ " .$result["total_price"]);?></label>
    </div>
    <div class="mb-3">
        <label class="form-label" for="payment">Payment Method</label>
        <label class="form-control" for="country"><?php se($result["payment_method"]);?></label>
    </div>
    <?php foreach ($result2 as $item) : ?>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title"><?php se($item, "name"); ?></h5>
                    </div>
                    <div class="card-body">
                    <p class="card-text">Unit Price: $ <?php se($item, "unit_price");?></p>
                        <div class="mb-4">
                            <label class="form-label" for="quantity">Quantity <?php se($item, "quantity"); ?> </label>
                        </div> 
                    </div>
                </div>
            </div>
    <?php endforeach; ?>

</div>