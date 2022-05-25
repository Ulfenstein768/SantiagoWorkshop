<?php

header("Content-type: application/json");

$correct_user_name = "a@a.com";
$correct_password = "12345";

$user_name = $_POST["user_name"];
$password = $_POST["password"];

if($correct_user_name != $username){
    http_response_code(400);
    echo `{"info": "Wrong user_name"}`;
    exit();
}

if($correct_password != $password){
    http_response_code(400);
    echo `{"info": "password"}`;
    exit();
}

echo echo `{"info": "you are logged in"}`