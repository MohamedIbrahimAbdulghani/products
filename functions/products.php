<?php

require_once "db.php";

// this is function to add project to database
function addProjects($product_name, $product_price, $product_image) {
    global $connection_database;
    $sql = "INSERT INTO `product` (`product_name`, `product_price`, `product_image`) VALUES ('$product_name', '$product_price', '$product_image') ";
    mysqli_query($connection_database, $sql);
}

// this is function to get projects from database
function getProjects() {
    global $connection_database;
    $sql = "SELECT * FROM `product` ";
    $result = mysqli_query($connection_database, $sql);
    $projects = [];
    while($res = mysqli_fetch_assoc($result)):
        $projects[] = $res;
    endwhile;
    return $projects;
}