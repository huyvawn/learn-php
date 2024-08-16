<?php
session_start();
require_once("db.php");
function getCartItems(){
    $cart = isset($_SESSION["cart"])?$_SESSION["cart"]:[];
    $items = [];
    if(count($cart)> 0){
        $ids=[];
        foreach($cart as $key=>$buy_qty){
            $ids[]= $key;
        }
        $ids= implode(",",$ids);
        // $ids = "(1,2,4,5,6)";
        $sql = "select * from products where id in ($ids)";
        $products= select($sql);
        // [
        //     [
        //         "id"=>
        //         "name"=>
        //         "thumbnail"=>
        //         "price"=>
        //         "in_stock"=> qty > buy_qty?true:false,
        //         "buy_qty"=>buy_qty
        //     ],
        //     [

        //     ]
        // ]
        foreach ($products as $product) {
            $id = $product["id"];
            $product["buy_qty"] = $cart[$id];
            $product["in_stock"] = $product["qty"] >= $product["buy_qty"]? "Yes":"Out of stock";
            $items[] = $product;
        }

    }
    // echo $ids;
    return $items;
}