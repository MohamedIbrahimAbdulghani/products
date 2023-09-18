<?php

require_once "functions/cards.php";
$ID = $_GET["card_id"];
$res = deleteCard($ID);
header("Location: card.php");