<?php

    require_once "db.php";
    require_once "functions/products.php";


    if(isset($_POST["upload"])):
        $product_name = $_POST["name"];
        $product_price = $_POST["price"];
        $image = $_FILES["image"];
        $image_name = $_FILES["image"]["name"];
        $image_location = $_FILES["image"]["tmp_name"];
        $new_image_location = "images/" . $image_name;
        if(!empty($product_name) && !empty($product_price) && !empty($image_name)):
            addProjects($product_name, $product_price, $image_name);
            move_uploaded_file($image_location, $new_image_location);
            echo "<script>alert('تم رفع المنتج بنجاح')</script>";
            header("Refresh:1;url=index.php");
        else:
            echo "<script>alert('لم يتم رفع المنتج بنجاح')</script>";
            header("Refresh:1;url=index.php");
        endif;
    endif;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping online | أضافة منتجات</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
</body>
</html>