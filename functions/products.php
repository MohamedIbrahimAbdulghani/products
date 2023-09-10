<?php

require_once "db.php";
require_once "insert.php";

// this is function to add project to database
function addProducts($product_name, $product_price, $product_image) {
    global $connection_database;
    $sql = "INSERT INTO `product` (`product_name`, `product_price`, `product_image`) VALUES ('$product_name', '$product_price', '$product_image') ";
    mysqli_query($connection_database, $sql);
}

// this is function to get projects from database
function getProducts() {
    global $connection_database;
    $sql = "SELECT * FROM `product` ";
    $result = mysqli_query($connection_database, $sql);
    $projects = [];
    while($res = mysqli_fetch_assoc($result)):
        $projects[] = $res;
    endwhile;
    return $projects;
}

// this is function to delete projects from database
function deleteProducts($product_id) {
    global $connection_database;
    $sql = "DELETE  FROM `product` WHERE `product_id` = '$product_id' ";
    mysqli_query($connection_database, $sql);
}

// this is function to get product by id from database
function getProductById($id) {
    global $connection_database;
    $sql = "SELECT * FROM `product` WHERE `product_id` = '$id' ";
    $result = mysqli_query($connection_database, $sql);
    $projects = [];
    while($res = mysqli_fetch_assoc($result)):
        $projects[] = $res;
    endwhile;
    return $projects;

}

// this is function to update projects from database
function updateProducts($product_name, $product_price, $product_image, $product_id) {
    global $connection_database;
    $sql = "UPDATE `product` SET  `product_name` = '$product_name', `product_price` = '$product_price' ";
    if(!empty($product_image)):
        $sql .= " , `product_image` = '$product_image' ";
    endif;  
    $sql .= "  WHERE  `product_id` = '$product_id' ";
    mysqli_query($connection_database, $sql);


}