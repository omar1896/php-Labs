<?php
 
//var_dump($_POST);
require_once("config.php");
require_once("function.php");
$error = "";
// var_dump($_POST);

if (!empty($_POST)) {
    $error = "";
    $error = validation();
    if (empty($error)) {
          save_contacts();
        die("<center><h3>" . __thank_you_msg . ":" . $_POST["name"] . "<br>" . "</h3></center>"
            . "<center><h3>" . "your email:" . $_POST["email"] . "</h3></center>"
            . "<center><h3>" . "your message[" . $_POST["msg"] . "]" . "</h3></center>"
        );
    }else{$name =$_POST["name"];}
}


//require_once("views/form.php");
require_once("config.php");
// require_once("contacts_list.php");

$parameter = isset($_GET["page"]) ? $_GET["page"] : "";
if ($parameter === "contact")
    require_once("views/form.php");
else
require_once("contacts_list.php");