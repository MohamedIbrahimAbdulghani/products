<?php

require_once "db.php";

function addProjects($product_name, $product_price, $product_image) {
    global $connection_database;
    $sql = "INSERT INTO `product` (`product_name`, `product_price`, `product_image`) VALUES ('$product_name', '$product_price', '$product_image') ";
    mysqli_query($connection_database, $sql);
}