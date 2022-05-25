<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$correct_user_name = "a@a.com";
$correct_password = "12345";

$user_name = $_POST["user_name"];
$password = $_POST["password"];

if($correct_user_name != $user_name){
  http_response_code(400);
  
  echo '{"info":"wrong user_name"}';
  exit();
}
if($correct_password != $password){
  http_response_code(400);
  echo '{"info":"wrong password"}';
  exit();
}


echo '{"info":"you are logged in"}';
