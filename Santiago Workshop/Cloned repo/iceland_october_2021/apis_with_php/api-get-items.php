<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

if($_GET["page"] == 1){
  echo json_encode([["id"=>1,"name"=>"A","image"=>"1.jpg","price"=>100],["id"=>2,"name"=>"Aa","image"=>"1.jpg","price"=>101]]);  
}
if($_GET["page"] == 2){
  echo json_encode([["id"=>3,"name"=>"B","image"=>"2.png","price"=>200],["id"=>4,"name"=>"Bb","image"=>"2.png","price"=>201]]);  
}
if($_GET["page"] == 3){
  echo json_encode([["id"=>5,"name"=>"C","image"=>"3.jpg","price"=>300],["id"=>6,"name"=>"Cc","image"=>"3.jpg","price"=>301]]);  
}