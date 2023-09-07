<?php

require_once "functions/products.php";


$ID = $_GET["product_id"];

$result = deleteProject($ID);
header("Location: products.php");