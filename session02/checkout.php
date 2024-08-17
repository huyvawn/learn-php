<?php 
require_once("functions/db.php");
require_once("functions/cartfunction.php");
session_start();
$cart = isset($_SESSION["cart"])?$_SESSION["cart"]:[];
$items= getCartItems();
?>
<!DOCTYPE html>
<html lang="en">
<?php include_once("htmlsess2/head.php");?>
<head>
    <!-- <link rel="stylesheet" href="style copy.css"> -->
</head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            /* max-width: 800px; */
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        
    </style>

<body>
    <?php include_once("htmlsess2/nav.php");?>
    <div class="container">
        <div class="header">
            <h1>Checkout</h1>
        </div>
        <div class="row process-bar">
            <div class="active col-3">Shopping Cart</div>
            <div class="active col-3">Checkout</div>
            <div class="col-3">Finish</div>
        </div>
        <form action="action.php" method="POST">
            <div class="row">
            <div class="billing-details col-6">
                <h3>Billing Details</h3>
            <!-- <div class="row">    -->
                 <input type="text" name="name" placeholder="First & Last Name" required> 
            <!-- </div> -->
                <input type="email" name="email" placeholder="Email Address" required>
                <div class="error-message">
                    <!-- This will display error messages like "Please enter a valid email address" -->
                    <?php if (isset($_GET['error']) && $_GET['error'] == 'invalid_email') echo 'Please enter a valid email address.'; ?>
                </div>
                <select name="country" required>
                    <option value="United States of America">United States of America</option>
                    <option value="Vietnam">Viet Nam</option>
                </select>
                <input type="text" name="state" placeholder="State/County" required>
                <input type="text" name="zip" placeholder="Zip/Postal Code" required>

                <div class="payment-method">
                    <h3>Payment Method</h3>
                    <input class="input-radio" type="radio" name="payment_method" value="credit_card" checked> Credit Card
                    <br>
                    <input type="text" name="card_number" placeholder="Card Number" required>
                    <select name="exp_month" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <?php 
                            foreach( range(3,12) as $index):
                        ?>
                          <option value="<?php echo $index;?>"><?php echo $index;?></option>
                          <?php endforeach; ?>
                    </select>
                    <select name="exp_year" required>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <?php foreach(range(2026,2032) as $index): ?>
                            <option value="<?php echo $index;?>"><?php echo $index;?></option>
                            <?php endforeach;?>
                    </select>
                    <input type="text" name="cvv" placeholder="Security Code" required>
                    <br><br>
                    <input class ="input-radio" type="radio" name="payment_method" value="paypal"> PayPal
                    <img src="https://www.paypalobjects.com/webstatic/mktg/logo/pp_cc_mark_111x69.jpg" alt="PayPal">
                </div>
            </div>
            <div class="cart-summary col">
                <h3>Cart Summary</h3>
                <?php $total = 0; ?>
                <?php foreach ($items as $product): ?>
                <p><?php echo $product["buy_qty"];?> x <?php echo $product["name"];?> - $<?php echo $product["price"];?></p>
                <?php $total += $product["buy_qty"] * $product["price"]; ?>
                <?php endforeach;?>
                <div class="subtotal">Subtotal: $<?php echo $total;?></div>
            </div>
            </div>
        </form>
        <button type="submit" class="place-order-btn">Place order</button>
    </div>
</body>
</html>
