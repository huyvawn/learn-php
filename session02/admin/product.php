<?php
session_start();  
require_once("../functions/user.php");
if(!is_admin()){
    header("Location: /404notfound.php");
    die();
}
require_once("../functions/db.php");
$sql="select p.*,c.name as category_name from products p left join categories c on p.category_id=c.id ;";
$products=select($sql);
?>
<!DOCTYPE html>
<html lang="en">
<?php include_once("../htmlsess2/head.php"); ?>
<body>
<?php include_once("../htmlsess2/nav.php"); ?>
<div class="container">
<div class="row">
            <aside class="col-3">
                <ul class="list-group">
                    <li class="list-group-item">Orders</li>
                    <li class="list-group-item">Customers</li>
                    <li class="list-group-item">Products</li>
                    <li class="list-group-item">Categories</li>
                    <li class="list-group-item">Reviews</li>
                </ul>
            </aside>
            <article class="col">
                <a href="/session02/admin/create_product.php" class="btn btn-primary"> Create Product</a>
                <h1>Products Listing</h1>
                <table class="table table-bordered table-striped">
                    <thead>
                        <th>#</th>
                        <th>Product's name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Description</th>
                        <th>Category Name</th>
                        <th></th>
                    </thead>
                    <tbody>
                        <?php foreach($products as $item):?>
                            <tr>
                                <td><?php echo $item["id"];?></td>
                                <td><?php echo $item["name"];?></td>
                                <td><?php echo $item["price"];?></td>
                                <td><?php echo $item["qty"];?></td>
                                <td><?php echo $item["description"];?></td>
                                <td><?php echo $item["category_name"];?></td>
                               
                                <td><a href="/session02/admin/order_detail.php?id=<?php echo $item["id"];?>">Details</a></td>
                            </tr>
                        <?php endforeach;?>    
                    </tbody>
                </table>
            </article>
        </div>
        </div>
</body>
</html>