<?php
require(__DIR__ . "/../../partials/nav.php");
$TABLE_NAME = "Products";

//get the table definition
$result = [];
$columns = get_columns($TABLE_NAME);
//echo "<pre>" . var_export($columns, true) . "</pre>";
$ignore = ["id", "name", "modified", "created"];
$db = getDB();
//get the item
$id = se($_GET, "id", -1, false);
$stmt = $db->prepare("SELECT * FROM $TABLE_NAME where id =:id");
try {
    $stmt->execute([":id" => $id]);
    $r = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($r) {
        $result = $r;
    }
} catch (PDOException $e) {
    error_log(var_export($e, true));
    flash("Error looking up record", "danger");
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