<?php
require_once "functions/cards.php";

if(isset($_POST["add"])):
    $card_name = $_POST["name"];
    $card_price = $_POST["price"];
    $card_image = $_POST["image"];

    $result = addCard($card_name, $card_price, $card_image);
    header("Location: card.php");
endif;