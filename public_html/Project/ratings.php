<?php
require(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
//Rate button on Details.php redirect to ratings.php check
//make html form for user check
//check if user has purchased this item before in 
//create php that will insert into ratings table 
//in details .php select from the ratings table, and use for loop to print
//average ratings
//pagination
$product_id = se($_GET, "id", -1, false);
$user_id = get_user_id();

$db = getDB();
$stmt = $db->prepare("SELECT name, avg_rating, num_rating FROM Products where id = :id");
try {
    $stmt->execute([":id" => $product_id]);
    $r = $stmt->fetch(PDO::FETCH_ASSOC);
    $name = se($r, "name", "", false);
    $avg_rating = se($r, "avg_rating", 0.0, false);
    $num_rating = se($r, "num_rating", 0, false);
    
    
} catch (PDOException $e) {
    error_log("<pre>" . var_export($e, true) . "</pre>");
}

if (isset($_POST["rating"]) && isset($_POST["review"])) {

    $rating = se($_POST, "rating", -1, false);
    $comment = se($_POST, "review", "", false);
    //insert into table
    $avg_rating = (($avg_rating * $num_rating) + $rating) / ($num_rating + 1);
    add_rating($product_id, $user_id, $rating, $comment);
    $stmt2 = $db->prepare("UPDATE Products SET avg_rating = $avg_rating, num_rating = num_rating+1 WHERE id= :product_id");
    try {
        $stmt2->execute([":product_id" => $product_id]);
    } catch (PDOException $e) {
        error_log("<pre>" . var_export($e, true) . "</pre>");
    }
    redirect('details.php?id=' . $product_id);
}
?>

<div class="container-fluid">
    <div class="mb-3"></div>
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Rate Product: <?php se($name) ?></h1>
        </div>
        <div class="card-body">
            <form onsubmit=true method="POST">
                <label for="rating">Rate:</label>
                <select name="rating" id="rating">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <div class="mb-3">
                    <label class="form-label" for="pw">Review</label>
                    <input class="form-control" type="text" id="review" name="review" />
                </div>
                <input type="submit" class="btn btn-primary" value='Rate'>

            </form>
        </div>
    </div>
    <?php
    require(__DIR__ . "/../../partials/flash.php");
    ?>