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
    <title>تأكيد طلب شراء المنتج</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&family=Roboto:ital,wght@1,100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="main">
            <center>
                <form action="insert_card.php" method="POST" class="form border-0">
                    <h2>هل فعلا تريد شراء المنتج</h2>
                    <?php foreach($result as $res): ?>
                        <input type="text" name="id" class="form-control d-none" value="<?php echo $res["product_id"] ?>"readonly>
                        <input type="text" name="name" class="form-control d-none" value="<?php echo $res["product_name"] ?>"readonly>
                        <input type="text" name="price" class="form-control d-none" value="<?php echo $res["product_price"] ?>"readonly>
                        <input type="text" name="image" class="form-control d-none" value="<?php echo $res["product_image"] ?>"readonly>
                        <input type="submit" value=" تاكيد اضافة المنتج للعربية" name="add" class="btn btn-warning">
                        <a href="shop.php">الرجوع لصفحة المنتجات</a>
                    <?php endforeach; ?>
                </form>
            </center>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</body>
</html>