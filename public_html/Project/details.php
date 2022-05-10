<?php
require(__DIR__ . "/../../partials/nav.php");
$TABLE_NAME = "Products";

//get the table definition
$result = [];
$result2 = [];
$columns = get_columns($TABLE_NAME);
//echo "<pre>" . var_export($columns, true) . "</pre>";
$ignore = ["id", "name", "modified", "created", "avg_rating", "num_rating"];
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
        $avg_rating = $r['avg_rating'];
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
    $stmt->execute([":user_id" => $user_id, ":product_id" => $id]);
    $r = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($r) {
        $purchase = true;
    }
} catch (PDOException $e) {
    error_log("<pre>" . var_export($e, true) . "</pre>");
}


$base_query = "SELECT Ratings.rating, Ratings.comment, Ratings.user_id, Users.username , Users.visibility FROM Ratings INNER JOIN Users on Users.id = Ratings.user_id";
$total_query = "SELECT count(1) as total FROM Ratings INNER JOIN Users on Users.id = Ratings.user_id";
//dynamic query
$query = " WHERE product_id = :product_id";
$params = [];
$params[":product_id"] = $id;
$query .= " ORDER BY Ratings.created DESC";
$per_page = 10;
paginate($total_query . $query, $params, $per_page);
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


try {
    $stmt->execute($params); //dynamically populated params to bind
    $s = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($s) {
        $result2 = $s;
    }
} catch (PDOException $e) {
    flash("<pre>" . var_export($e, true) . "</pre>");
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
    <ul class="list-group list-group-flush" style="background-color:black">
        <li class="list-group-item" style>
            <?php foreach ($result as $column => $value) : ?>
                <?php if (!in_array($column, $ignore)) : ?>
                    <label class="form-label" for="<?php se($column); ?>"><?php se($column); ?>: </label>
                    <label class="form-control" style="background-color:lightgray"><?php se($value); ?></label>
                <?php endif; ?>
            <?php endforeach; ?>
        </li>
        <li class="list-group-item">
            <?php if ($purchase) : ?>
                <div class="mb-4">
                    <input type=button onClick="location.href='ratings.php?id=<?php se($id) ?>'" class="btn btn-primary" value='Rate'>
                </div>
            <?php endif; ?>

            <?php if (has_role("Admin")) : ?>
                <a href="admin/edit_item.php?id=<?php se($id); ?>">Edit</a>
            <?php endif; ?>

            <div class="mb-4">
                <?php if ($avg_rating != 0) : ?>
                    <label class="form-label" for="avg_rating"> Average Rating</label>
                    <label class="form-control" for="<?php se($avg_rating); ?>"> <?php se($avg_rating); ?> / 5</label>
                <?php endif; ?>
            </div>

            <?php include(__DIR__ . "/../../partials/pagination.php"); ?>

            <?php foreach ($result2 as $item) : ?>
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Rating:
                                <?php se($item, "rating"); ?>/5 by <?php
                                                                    $visibility = se($item, "visibility", 0, false);
                                                                    //if visiblity for the user is set, get their info
                                                                    if ($visibility) {
                                                                        $user_id = se($item, "user_id", 0, false);
                                                                        $username = se($item, "username", "", false);
                                                                        include(__DIR__ . "/link_to_profile.php");
                                                                    } else { ?>
                                    Anonymous
                                <?php } ?>

                            </h5>
                        </div>

                        <div class="card-body">
                            <?php se($item, "comment"); ?>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </li>
    </ul>
</div>



<?php
//note we need to go up 1 more directory
require_once(__DIR__ . "/../../partials/footer.php");
?>