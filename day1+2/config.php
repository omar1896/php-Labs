<?php 
$name = isset($_POST["name"]) ? $_POST["name"] : "";
$email = isset($_POST["email"]) ? $_POST["email"] : "";
define("__max_name_length",100);
define("__max_message_length",255);
define("__thank_you_msg","thank you for contacting us");
define("_saved_contacts","contacts_file.txt");