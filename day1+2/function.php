<?php
function validation()
{
    $name = isset($_POST["name"]) ? $_POST["name"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $msg = isset($_POST["msg"]) ? $_POST["msg"] : "";


    if (empty($name) && empty($email) && empty($msg)) {
        return "please fill this form";
    } elseif (empty($name)) {
        return "name is empty";
    } elseif (empty($email)) {
        return "empty email";
    } elseif (empty($msg)) {
        return "empty message";
    } elseif (strlen($name) > __max_name_length) {
        return "name shoulbe less than 100 char ";
    } elseif (strlen($msg) > __max_name_length) {
        return "name shoulbe less than 255 char ";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "email in correct";
    } else {
        return;
    }

}



function remember($var)
{
    if (isset($_POST[$var]) && !empty($_POST[$var])) {
        return $_POST[$var];
    } else {
        return "";
    }
}

function save_contacts()
{
    $ip = $_SERVER['REMOTE_ADDR'];  
    array_unshift($_POST, $ip);
    $d = date("F j Y g:i a");
    array_unshift($_POST, $d);
    $fp = fopen(_saved_contacts, "a+");
    $string_to_save = implode(",", $_POST);
    fwrite($fp, $string_to_save . PHP_EOL);
    fclose($fp);
}


// function read_file(){
// $fp=fopen(_saved_contacts,"r");
// $content=fread($fp,filesize(_saved_contacts));
// fclose($fp);

// }

function file_to_array(){
    return file(_saved_contacts);
}


