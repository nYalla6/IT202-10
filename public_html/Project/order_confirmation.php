<?php
require(__DIR__."/../../partials/nav.php");

is_logged_in(true);

$order_results=[];
$order_items=[];

$db = getDB();
$stmt = $db->prepare("SELECT total_price, address, payment_method FROM Orders where id = :id");
$order_id = se($_GET, "id", -1, false);
try {
    $stmt->execute([":id" => $order_id]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($r) {
        $order_results = $r;
        $address= $r["address"];
        $pay_method = $r["payment_method"];
        $price = $r["total_price"];
    }
    
}catch (PDOException $e) {
    flash("<pre>" . var_export($e, true) . "</pre>");
}

$stmt = $db->prepare("SELECT OrderItems.quantity, OrderItems.unit_price, Products.name FROM OrderItems INNER JOIN Products ON OrderItems.product_id = Products.id WHERE OrderItems.order_id = :order_id");
try {
    $stmt->execute([":order_id" => $order_id]);
    $r = $stmt->fetchALL(PDO::FETCH_ASSOC);
    if ($r) {
        $order_items = $r;
    }
    
}catch (PDOException $e) {
    error_log(var_export($e, true));
}

?>