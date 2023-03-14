<?php
require_once("vendor/autoload.php");
require_once("classes/counter.php");

session_start();


$counter=new counter();
$counter->increament_and_update();
$count=$counter->get_count();
echo "<h1> $count</h1>";



