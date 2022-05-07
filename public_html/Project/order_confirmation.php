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