<?php

require_once "db.php";

// this is function to add card
function addCard($card_name, $card_price, $card_image) {
    global $connection_database;
    $sql = "INSERT INTO `addcard` (`card_name`, `card_price`, `card_image`) VALUES ('$card_name', '$card_price', '$card_image') ";
    mysqli_query($connection_database, $sql);
}

// this is function to get cards from database
function getCards() {
    global $connection_database;
    $sql = "SELECT * FROM `addcard` ";
    $result = mysqli_query($connection_database, $sql);
    $projects = [];
    while($res = mysqli_fetch_assoc($result)):
        $projects[] = $res;
    endwhile;
    return $projects;
}

// this is function to delete card
function deleteCard($card_id) {
    global $connection_database;
    $sql = "DELETE  FROM `addcard` WHERE `card_id` = '$card_id' ";
    mysqli_query($connection_database, $sql);
}