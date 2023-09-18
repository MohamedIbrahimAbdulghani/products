<?php

    require_once "functions/products.php";


    $ID = $_GET["product_id"];
    $result = getProductById($ID);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&family=Roboto:ital,wght@1,100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Update | تعديل المنتج</title>
</head>
<body>

    <div class="container">
        <form action="update.php" method="POST" enctype="multipart/form-data" class="border form">
                    <h2>تعديل المنتج</h2>
                    <?php foreach($result as $res): ?>
                        <input type="text" name="id" class="form-control" placeholder="رقم  المنتج" value="<?php echo $res["product_id"] ?>">
                        <input type="text" name="name" class="form-control" placeholder="ادخل اسم المنتج" value="<?php echo $res["product_name"] ?>">
                        <input type="text" name="price" class="form-control" placeholder="ادخل سعر المنتج" value="<?php echo $res["product_price"] ?>">
                        <input type="file" name="image" class="form-control" value="<?php echo $res["product_image"] ?>">
                        <button class="btn btn-success upload" name="update">تعديل المنتج</button>
                        <a href="products.php">عرض كل المنتجات</a>
                    <?php endforeach; ?>
        </form>
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>