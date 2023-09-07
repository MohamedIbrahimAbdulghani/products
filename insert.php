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
    <title>Insert Products | أضافة منتجات</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&family=Roboto:ital,wght@1,100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>