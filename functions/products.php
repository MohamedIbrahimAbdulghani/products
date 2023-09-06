<?php


require_once "db.php";

function addProduct($product_name, $product_price, $product_image) {
    global $connection_database;
    $insert = "INSERT INTO `product` (`product_name`, `product_price`, `product_image`) VALUES ('$product_name', '$product_price', '$product_image') ";
    mysqli_query($connection_database, $insert);
}