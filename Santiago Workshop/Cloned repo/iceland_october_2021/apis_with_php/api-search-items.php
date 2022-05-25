<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$search_for = $_GET['word'];

if($search_for == "iphone"){
  echo json_encode([["id"=>1,"name"=>"iphone 11","price"=>100],["id"=>2,"name"=>"Iphone 12","price"=>200]]);  
}
if($search_for == "android"){
  echo json_encode([["id"=>3,"name"=>"android 7","price"=>100],["id"=>4,"name"=>"Android 7.5","price"=>150]]);  
}

