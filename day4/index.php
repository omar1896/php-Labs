<?php
require_once("vendor/autoload.php");

session_start();

$db= new DB_handler("items");
$db->connect();

// $items=$db->get_data();
// var_dump($items);


if (isset($_GET["id"]) && is_numeric($_GET["id"])) {
    require_once("views/single.php");
} else {
    require_once("views/main.php");
}

// require_once("vendor/autoload.php");
// require_once("views/main.php");