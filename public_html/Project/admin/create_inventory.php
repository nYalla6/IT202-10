<?php
//note we need to go up 1 more directory
require(__DIR__ . "/../../../partials/nav.php");

if (!has_role("Admin")) {
    flash("You don't have permission to view this page", "warning");
    die(header("Location: " . get_url("home.php")));
}

if (isset($_POST["name"]) && isset($_POST["description"]) && isset($_POST["category"]) && isset($_POST["stock"]) && isset($_POST["unit_price"]) && isset($_POST["visibility"])) {
    $name = se($_POST, "name", "", false);
    $desc = se($_POST, "description", "", false);
    $category = se($_POST, "category", "", false);
    $stock = se($_POST, "stock", 0, false);
    $price = se($_POST, "unit_price", "", false);
    $vis = se($_POST, "visibility", 1, false);

    if (empty($name)) {
        flash("Name is required", "warning");
    } else {
        $db = getDB();
        $stmt = $db->prepare("INSERT INTO Products (name, description, category, stock, unit_price, visibility) VALUES(:name, :desc, :category, :stock, :price, :vis)");
        try {
            $stmt->execute([":name" => $name, ":desc" => $desc, ":category" => $category, ":stock" => $stock, ":price" => $price, ":vis" => $vis]);
            flash("Successfully created product $name!", "success");
        } catch (PDOException $e) {
            if ($e->errorInfo[1] === 1062) {
                flash("A product with this name already exists, please try another", "warning");
            } else {
                flash(var_export($e->errorInfo, true), "danger");
            }
        }
    }
}
?>
<h1>Insert Product</h1>
<form method="POST">
    <!-- Name -->
    <div>
        <label for="name">Name</label>
        <input id="name" name="name" required />
    </div>

    <!-- Description -->
    <div>
        <label for="d">Description</label>
        <textarea name="description" id="d"></textarea>
    </div>

    <!-- Category -->
    <div>
        <label for="cat">Category</label>
        <input name="category" id="cat"></input>
    </div>

    <!-- Stock -->
    <div>
        <label for="stock">Stock</label>
        <input type="number" name="stock" id="stock"></input>
    </div>

    <!-- Unit Price -->
    <div>
        <label for="up">Unit Price</label>
        <input type="number" step="0.01" name="unit_price" id="up"></input>
    </div>

    <!-- Visibility -->
    <div>
        <label for="vis">Visibility</label>
        <form>
            <input name="visiblity" id="vis_true" type="radio" value="1"></input>
            <label for="vis_true">True</label>
            <input name="visiblity" id="vis_false" type="radio" value="0"></input>
            <label for="vis_false">False</label><br>
        </form>
    </div>
    <input type="submit" value="Create Product"/>
</form>

<?php
//note we need to go up 1 more directory
require_once(__DIR__ . "/../../../partials/flash.php");
?>