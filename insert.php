<?php


require_once "db.php";
require_once "functions/products.php";

if(isset($_POST["upload"])):
    $product_name = $_POST["name"];
    $product_price = $_POST["price"];
    // uploaded image [$_FILES]
    $image = $_FILES["image"]; // to get all information about image but, this information was array
    $image_name = $_FILES["image"]["name"]; // to get name of image 
    $image_location = $_FILES["image"]["tmp_name"]; // to get location of image
    
    $new_location = "images/" . $image_name;

    addProduct($product_name, $product_price, $image_name);
    if(move_uploaded_file($image_location, "images/".$image_name)):
        echo "<script>alert('تم رفع المنتج بنجاح')</script> ";
    else:
        echo "<script>alert('لم يتم رفع المنتج')</script> ";
    endif;

    header("Location: index.php");
endif;