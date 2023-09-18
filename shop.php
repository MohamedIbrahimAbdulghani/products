<?php
    require_once "functions/products.php";


    $result = getProducts();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products | المنتجات</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&family=Roboto:ital,wght@1,100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <a href="card.php" class="navbar-brand">عربتي | Mycard</a>
    </nav>
    <?php
        if(empty($result)) {
            echo "<h2>جميع المنتجات المتوفرة</h2>";
            echo "<h2>Don't Found Any Project</h2>";
            header("Refresh:1;url=index.php");
        }
        ?>
        <center>
            <?php if(!empty($result)): ?>
                <h2>جميع المنتجات المتوفرة</h2>
                <?php foreach($result as $res): ?>
                    <div class="card" style="width: 300px;" >
                        <img class="card-img-top" src="<?php echo "images/" .$res["product_image"] ?>" alt="Card image cap" class="img-fluid">
                        <div class="card-body">
                            <h5 class="card-title">Name Is : <?php echo $res["product_name"] ?></h5>
                            <p class="card-text">Price Is : <?php echo $res["product_price"] ?></p>
                            <a href="val.php?product_id=<?php echo $res["product_id"] ?>" class="btn btn-success">أضافة المنتج الي العربة</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </center>
        

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</body>
</html>