<?php 
session_start();  
require_once("../functions/user.php");
if(!is_admin()){
    header("Location: /404notfound.php");
    die();
}
require_once("../functions/db.php");
$cats= select("select * from categories");
?>

<!DOCTYPE html>
<html lang="en">
<?php include_once("../htmlsess2/head.php"); ?>
<body>
<?php include_once("../htmlsess2/nav.php"); ?>
<div class="container">
    <div class="row">
        <?php include_once("../htmlsess2/admin_aside.php"); ?>
<form action="/session02/admin/save_product.php" method="post" class="col" enctype="multipart/form-data">
  <div class="mb-3">
    <label> Name</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="mb-3">
    <label  class="form-label">Price</label>
    <input type="text" class="form-control" name="price">
  </div>
  <div class="mb-3">
    <label  class="form-label">Quantity</label>
    <input type="text" class="form-control" name="qty">
  </div>
  <div class="mb-3">
    <label  class="form-label">Thumbnail</label>
    <input type="file" class="form-control" name="thumbnail">
  </div>
  <div class="mb-3">
    <label  class="form-label">Description</label>
    <textarea class="form-control" name="description"> </textarea>
  </div>
  <div class="mb-3">
    <label  class="form-label">Category</label>
    <select name="category_id" class="form-control">
        <?php foreach($cats as $item): ?>
            <option value="<?php echo $item["id"]; ?>"><?php echo $item["name"]; ?></option>
            <?php endforeach; ?>
    </select>
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</body>
</html>