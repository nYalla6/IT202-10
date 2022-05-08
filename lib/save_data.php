<?php
function save_data($table, $data, $ignore = ["submit"])
{
    $table = se($table, null, null, false);
    $db = getDB();
    $query = "INSERT INTO $table "; //be sure you trust $table
    //https://www.php.net/manual/en/functions.anonymous.php Example#3
    $columns = array_filter(array_keys($data), function ($x) use ($ignore) {
        return !in_array($x, $ignore);
    });
    //arrow function uses fn and doesn't have return or { }
    //https://www.php.net/manual/en/functions.arrow.php
    $placeholders = array_map(fn ($x) => ":$x", $columns);
    $query .= "(" . join(",", $columns) . ") VALUES (" . join(",", $placeholders) . ")";

    $params = [];
    foreach ($columns as $col) {
        $params[":$col"] = $data[$col];
    }
    $stmt = $db->prepare($query);
    try {
        $stmt->execute($params);
        //https://www.php.net/manual/en/pdo.lastinsertid.php
        //echo "Successfully added new record with id " . $db->lastInsertId();
        return $db->lastInsertId();
    } catch (PDOException $e) {
        error_log(var_export($e->errorInfo, true));
        flash("An error occurred saving data for table $table", "danger");
        return -1;
    }
}

function add_order( $user_id, $total_price, $address, $payment_method, $payment)
{
    //error_log("add_item() Product ID: $product_id, User_id: $user_id, Quantity $desired_quantity");
   
    if ($user_id <= 0 ||$total_price <= 0 ) {
        
        return;
    }
    $db = getDB();
    $stmt = $db->prepare("INSERT INTO Orders (user_id, total_price, address, payment_method, money_received) VALUES (:uid, :tot, :add, :pay, :payt)");
   
    try {
        //if using bindValue, all must be bind value, can't split between this an execute assoc array
        $stmt->bindValue(":uid", $user_id, PDO::PARAM_INT);
        $stmt->bindValue(":tot", $total_price, PDO::PARAM_STR);
        $stmt->bindValue(":add", $address, PDO::PARAM_STR);
        $stmt->bindValue(":pay", $payment_method, PDO::PARAM_STR);
        $stmt->bindValue(":payt", $payment, PDO::PARAM_STR);
        $stmt->execute();
        return true;
    } catch (PDOException $e) {
        error_log("Error adding : " . var_export($e->errorInfo, true));
    }
    return false;
}