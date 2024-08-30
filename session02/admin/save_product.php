<?php

require_once("../functions/db.php"); 
$thumbnail= null; 
$name=$_POST["name"];
$description=$_POST["description"];
$price=$_POST["price"];
$qty=$_POST["qty"];
$category_id=$_POST["category_id"];
//upload file
if($_FILES["thumbnail"]){
    $file_name= time().basename($_FILES["thumbnail"]["name"]); 
    $target_file = "../uploads/".$file_name;
    $extension= strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); 
    $allow_exts= ["png","gif","jpg","jpeg"];
    if(in_array($extension,$allow_exts)){
    move_uploaded_file($_FILES["thumbnail"]["tmp_name"],$target_file);
    $thumbnail= "'/session02/uploads/".$file_name."'";
    }
}

$sql= "insert into products(name,price,qty,thumbnail,description,category_id) 
                            values (
                                   '$name',
                                   $price,
                                   $qty,
                                   $thumbnail,
                                   '$description',
                                   $category_id );";
insert($sql);