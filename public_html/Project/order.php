<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);

$results = [];
$user_id = get_user_id();
//calculating cart totals
$db = getDB();
$stmt = $db->prepare("SELECT Cart.item_id, Cart.user_id, Cart.quantity, Products.name, Products.unit_price as actual_price, Products.stock FROM Cart INNER JOIN Products ON Cart.item_id = Products.id WHERE Cart.user_id = :user_id");
try {
    $stmt->execute([":user_id" => $user_id]);
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($data) {
        $results = $data;
    }
} catch (PDOException $e) {
    error_log(var_export($e, true));
}

$actual_price = 0.0;

//validating the purchasing cost against products
foreach ($results as $result) {
    $actual_price = $actual_price + ($result["actual_price"]) * ($result["quantity"]);
    error_log("$actual_price");
}

//TODO 2: add PHP Code
if (isset($_POST["purchase"])) {
    $user = se($_POST, "username", "", false);
    $pay_method = se($_POST, "paytype", "", false);
    $payment = se($_POST, "payment", 0.0, false);

    //address to be concatenated
    $address = se($_POST, "address", "", false);
    $apt = se($_POST, "apptNum", "", false);
    $city = se($_POST, "city", "", false);
    $state = se($_POST, "state", "", false);
    $country = se($_POST, "country", "", false);
    $zipcode = se($_POST, "zipcode", "", false);

    $id = get_user_id();


    $hasError = false;

    //Namitha Yalla ny6 05/08/22
    //validate address formatting
    if (!is_valid_address($address)) {
        flash("Invalid address", "danger");
        $hasError = true;
    }
    //validate zipcode formatting
    if (!is_valid_zipcode($zipcode)) {
        flash("Invalid zipcode", "danger");
        $hasError = true;
    }

    //some addresses do not have apt
    if (strlen($apt) > 0) {
        $final_add = $address . " " . $apt . " " . $city . ", " . $state . " " . $zipcode . " ";
    } else
     {
        $final_add = $address . " " . " " . $city . ", " . $state . " " . $zipcode . " ";
    }


    //checking if the payment amount matches the payment amount
    if (number_format($payment, 2) < number_format($actual_price, 2)) {
        flash("$actual_price vs. $payment Incorrect Payment Amount!", "danger");
        $hasError = true;
    }
    
    //checking that there is enough stock
    foreach ($results as $res) {
        if ($res["stock"] < $res["quantity"]) {
            $name = $res["name"];
            $amt = $res["stock"];
            //printing out the amt of stock and what product it is
            flash("Stock for $name: $amt", "danger");
            $hasError = true;
        }
    }

    if (!$hasError) {

        //insert into orders!
        add_order($id, $actual_price, $final_add, $pay_method, $payment);

        //select order ID from orders table
        //$order_id = 0;
        $stmt2 = $db->prepare("SELECT id FROM Orders WHERE user_id = :id ORDER BY Created DESC LIMIT 1");
        try {
            $stmt2->execute([":id" => $id]);
            $order = $stmt2->fetch(PDO::FETCH_ASSOC);
            if ($order) {
                $order_id = $order["id"];
            }
        } catch (PDOException $e) {
            error_log(var_export($e, true));
        }

        foreach ($results as $result) {
            //iterating through results for values
            $item_id = $result['item_id'];
            $quantity = $result['quantity'];
            $unit_price = $result['actual_price'];
            $stock = $result['stock'] - $quantity;

            add_order_items($order_id, $item_id, $quantity, $unit_price);
            //removing from stock (as if real purchase)
            //updating products
            $stmt3 = $db->prepare("UPDATE Products SET stock = $stock WHERE id = :item_id");
            try {
                $stmt3->execute([":item_id"
                 => $item_id]);
            } catch (PDOException $e) {
                error_log(var_export($e, true));
            }
        }


        //removing the items from cart 
        $stmt5 = $db->prepare("DELETE from Cart WHERE user_id = :user_id");
        try {
            $stmt5->execute([":user_id" => $user_id]);
        } catch (PDOException $e) {
            error_log(var_export($e, true));
        }

        //redirecting to the order confirmation page
        redirect("order_confirmation.php?id=" . $order_id);
    }
}
?>
<?php
$email = get_user_email();
$username = get_username();
?>


<div class="container-fluid">


    <h1>Order Page</h1>
    <div class="ms-2 row row-cols-3 g-1">
        <!-- checkout form: payment method, amt, address -->
        <div class="card bg-white col-4">


            <form method="POST">
                <div class="card-body">
                    <label class="card-title" for="paytype"><b>Payment Method</b> </label>
                    <input name="paytype" id="paytype" />
                </div>
                <div class="card-body">
                    <label class="card-title" for="payment"><b>Payment Amount</b></label>
                    <input type="number" step="0.01" name="payment" />
                </div>

                <!-- Address -->
                <div class="card-body">
                    <!-- prefilling the username, because we already know this -->
                    <label class="card-title col-3" for="username"><b>Username</b></label>
                    <input name="username" value="<?php se($username); ?>" />

                    <!-- address to be concatenated -->
                    <br>
                    <label class="card-title col-3" for="address"><b>Address</b></label>
                    <input name="address" />

                    <br>
                    <label class="card-title col-3" for="apptNum"><b>Apartment/Suite Number</b></label>
                    <input type="num" name="apptNum" />

                    <br>
                    <label class="card-title col-3" for="city"><b>City</b></label>
                    <input name="city" />

                    <br>
                    <label class="card-title col-3" for="state"><b>State</b></label>
                    <select name="state">
                        <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                        <option value="AZ">Arizona</option>
                        <option value="AR">Arkansas</option>
                        <option value="CA">California</option>
                        <option value="CO">Colorado</option>
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="DC">District Of Columbia</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="HI">Hawaii</option>
                        <option value="ID">Idaho</option>
                        <option value="IL">Illinois</option>
                        <option value="IN">Indiana</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NV">Nevada</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NM">New Mexico</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="ND">North Dakota</option>
                        <option value="OH">Ohio</option>
                        <option value="OK">Oklahoma</option>
                        <option value="OR">Oregon</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="SD">South Dakota</option>
                        <option value="TN">Tennessee</option>
                        <option value="TX">Texas</option>
                        <option value="UT">Utah</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="WA">Washington</option>
                        <option value="WV">West Virginia</option>
                        <option value="WI">Wisconsin</option>
                        <option value="WY">Wyoming</option>
                    </select>

                    <br>
                    <label class="card-title col-3" for="zipcode"><b>Zipcode</b></label>
                    <input name="zipcode" type="number" />


                </div>

                <!-- Submit Button -->
                <div class="card-footer">
                    <input type="submit" name="purchase" value="Complete Purchase" class="btn btn-info" />
                </div>
            </form>

        </div>

        <!-- show cart -->
        <div class="col-5">
            <?php require(__DIR__ . "/../../partials/cart.php"); ?>
        </div>
    </div>
</div>

<?php
require_once(__DIR__ . "/../../partials/flash.php");
?>