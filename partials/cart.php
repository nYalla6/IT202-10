<?php
//note we need to go up 1 more directory
$TABLE_NAME = "Cart";

// //update the item
if (isset($_POST["quantity"])) {
    if ($_POST["quantity"] == 0) {
        $db = getDB();
        //get the item
        $line_id = $_POST['cart_id'];
        $user_id = get_user_id();
        $stmt = $db->prepare("DELETE FROM Cart where id = :id and user_id = :uid");
        
        try {
            //added user_id to ensure the user can only delete their own items
            $stmt->execute([":id" => $line_id, ":uid" => $user_id]);
            $response["status"] = 200;
            $response["message"] = "Deleted line item";
            http_response_code(200);

        } catch (PDOException $e) {
            flash("<pre>" . var_export($e, true) . "</pre>");
            error_log("Error deleting line item: " . var_export($e, true));
            $response["message"] = "Error deleting item";
        }

    } else if (update_data($TABLE_NAME, $_POST["cart_id"], $_POST, ["cart_id"])) {
        flash("Updated item", "success");
        $db = getDB();
        //get the item
        $id = se($_GET, "id", -1, false);
        $stmt = $db->prepare("SELECT quantity FROM $TABLE_NAME where id =:id");

        try {
            $stmt->execute([":id" => $id]);
            $r = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($r) {
                $result = $r;
            }
        } catch (PDOException $e) {
            flash("<pre>" . var_export($e, true) . "</pre>");
            error_log(var_export($e, true));
            flash("Error updating record", "danger");
        }
    }
}

//get the table definition
$result = [];
$columns = get_columns($TABLE_NAME);
//echo "<pre>" . var_export($columns, true) . "</pre>";
$ignore = ["id", "item_id", "user_id", "modified", "created"];
// $db = getDB();
// //get the item
// $id = se($_GET, "id", -1, false);
// $stmt = $db->prepare("SELECT quantity FROM $TABLE_NAME where id =:id");
// try {
//     $stmt->execute([":id" => $id]);
//     $r = $stmt->fetch(PDO::FETCH_ASSOC);
//     if ($r) {
//         $result = $r;
//     }
// } catch (PDOException $e) {
//     flash("<pre>" . var_export($e, true) . "</pre>");
//     error_log(var_export($e, true));
//     flash("Error updating record", "danger");
// }
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

<script>
    function get_cart() {
        postData({}, "/Project/api/get_cart.php").then(data => {
            console.log(data);
            let carts = document.getElementsByClassName("cart");
            let table = document.createElement("table");
            table.className = "table card-table";
            let h = document.createElement("thead");
            h.innerHTML =
                `
                    <th>Item</th>
                    <th>Quantity</th>
                    <th>Cost</th>
                    <th>Subtotal</th>
                    <th></th>
                    `;
            table.appendChild(h);
            let body = document.createElement("tbody");
            if (data.data) {
                let total = 0;

                for (let r of data.data) {
                    //name, c.id as line_id, item_id, quantity, cost, (cost*quantity) as subtotal
                    let row = document.createElement("tr");

                    total += parseInt(r.subtotal*100);
                    row.innerHTML =
                        `
                        <td>
                        ${r.name}
                        </td>
                        <td>
                            <form method="POST">
                                <input type="hidden" name="cart_id" value="${r.line_id}">
                                <input type="number" name="quantity" value="${r.quantity}" >
                            </form>
                        </td>
                        <td>
                        ${r.unit_price}
                        </td>
                        <td>
                        ${r.subtotal}
                        </td>
                        <td>
                            <button class="btn btn-danger" onclick="deleteLineItem(${r.line_id}, this)">x</button>
                        </td>
                        `;
                    body.appendChild(row);

                }
                let row = document.createElement("tr");
                row.innerHTML =
                    `
                <td colspan="100%">
                Total: $${parseFloat(total/100).toFixed(2)}
                </td>
                `;
                body.appendChild(row);
                row = document.createElement("tr");
                row.innerHTML =
                    `
                <td colspan="100%">
                <button class="btn btn-primary" onclick="purchase_cart()">Purchase</button>
                </td>
                `
                body.appendChild(row);
                row = document.createElement("tr");
                row.innerHTML =
                    `
                <td colspan="100%">
                    <button onclick="delete_cart()" class="btn btn-danger">Clear Cart</button>
                </td>
                `;
                body.appendChild(row);
                table.appendChild(body);
                for (let cart of carts) {
                    cart.innerHTML = "";
                    cart.appendChild(table);
                }
            } else {
                let row = document.createElement("tr");
                row.innerHTML =
                    `
                <td colspan="100%">
                No items in cart
                </td>
                `;
                for (let cart of carts) {
                    cart.innerHTML = "";
                    cart.appendChild(table);
                }
            }
        })
    }

    function deleteLineItem(line_id, ele) {
        console.log("delete ele", ele);
        postData({
            line_id: line_id
        }, "/Project/api/delete_cart.php").then(data => {
            console.log(data);
            //lazily assuming it worked and removing from the DOM
            //you'd ideally want to check to be sure if using a similar process
            //ele.closest("tr").remove();
            //turns out since I have total shown I need to recalculate that, and I'm lazy so instead...
            //I'll refresh the full cart
            if (get_cart) {
                get_cart();
            }

        });
    }

    function delete_cart(line_id, ele) {
        console.log("delete ele", ele);
        postData({
            line_id: line_id
        }, "/Project/api/delete_entire_cart.php").then(data => {
            console.log(data);
            //lazily assuming it worked and removing from the DOM
            //you'd ideally want to check to be sure if using a similar process
            //ele.closest("tr").remove();
            //turns out since I have total shown I need to recalculate that, and I'm lazy so instead...
            //I'll refresh the full cart
            if (get_cart) {
                get_cart();
            }

        });
    }


    function purchase_cart() {
        postData({}, "/Project/api/purchase_cart.php").then(data => {
            console.log(data);
            if (data.status === 200) {
                flash(data.message, "success");
            } else {
                flash(data.message, "danger");
            }
            get_cart();
        })
    }

    function add_to_cart(item_id, quantity = 1) {
        postData({
            item_id: item_id,
            desired_quantity: quantity
        }, "/Project/api/add_to_cart.php").then(data => {
            if (data.status === 200) {
                flash(data.message, "success");
                if (get_cart) {
                    get_cart();
                }

            } else {
                flash(data.message, "danger");
            }
        }).catch(e => {
            flash("There was a problem adding the item to cart", "danger");
        });
    }
    get_cart();
</script>

<div class="card">
    <div class="card-body">
        <div class="card-text">
            <div class="h3">Cart</div>
            <div class="cart g-4">

            </div>
        </div>
    </div>
</div>
<style>
    .card-table {
        word-break: break-all;
    }
</style>