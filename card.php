<?php
require_once "functions/cards.php";


$result = getCards();

if(empty($result)) {
    echo "<h2>جميع المنتجات المتوفرة</h2>";
    echo "<h2>Don't Found Any Project</h2>";
    header("Refresh:1;url=shop.php");
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عربتي | منتجاتي</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&family=Roboto:ital,wght@1,100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <div class="container">
        <div class="main">
            <h2>منتجاتك المحجوزة</h2>
            <table class="table text-center">
                <thead>
                    <tr>
                        <th>Product Number</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Product Image</th>
                        <th>Delete Product</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- to make counter of cards -->
                    <?php $x=1; ?>
                    <?php foreach($result as $res): ?>
                        <tr>
                            <td><?php echo $x++ ; ?></td>
                            <td><?php echo $res["card_name"] ?></td>
                            <td><?php echo $res["card_price"] ?></td>
                            <td><img src="<?php echo "images/".$res["card_image"] ?>" width="150px" height="150px"></td>
                            <td><a href="delete_card.php?card_id=<?php echo $res['card_id'] ?>" class="btn btn-danger">إزالة</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
            <a href="shop.php" class="back">الرجوع الي صفحة المنتجات</a>
    </div>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</body>
</html>