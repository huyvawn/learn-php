<?php 
require_once("functions/db.php");
require_once("functions/cartfunction.php");
session_start();
// $cart = isset($_SESSION["cart"])?$_SESSION["cart"]:[];
$items= getCartItems();
$grand_total=0;
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
        <form action="place_order.php" method="post">
            <div class="row">
                <div class="col-7">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Full name</span>
                        <input type="text" name="customer_name" class="form-control" placeholder="Full name" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon2">Email</span>
                        <input type="text" name="email" class="form-control" placeholder="Email" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        
                    </div>

                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon3">Telephone</span>
                            <input type="text" name="telephone" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                        </div>
                        <div class="form-text" id="basic-addon4">Example help text goes outside the input group.</div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-text">Shipping address</span>
                        <textarea name="shipping_address" class="form-control" aria-label="With textarea"></textarea>
                    </div>
                    <div class="mb=3">
                        <h4>Payment method</h4>
                        <div class="form-check">
                            <input class="form-check-input" name="payment_method" value="COD" type="radio" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                COD
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" name="payment_method" value="PAYPAL" type="radio" value="" id="flexCheckChecked" checked>
                            <label class="form-check-label" for="flexCheckChecked">
                                Paypal
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <ul>
                        <?php foreach($items as $item): ?>
                            <?php $grand_total +=  $item["buy_qty"] * $item["price"]; ?>
                            <li>
                                <p>
                                    <?php echo $item["name"];?>
                                    <b>(<?php echo $item["buy_qty"];?>x<?php echo $item["price"];?>)</b>
                                    <span class="text-end">$<?php echo $item["buy_qty"] * $item["price"];?></span>
                                </p>
                            </li>
                        <?php endforeach;?>
                    </ul>
                    <h3>Grand total: <?php echo $grand_total;?></h3>
                    <button type="submit" class="btn btn-outline-danger">Place order</button>
                </div>
            </div>
            </form>
    </div>
</body>
</html>
