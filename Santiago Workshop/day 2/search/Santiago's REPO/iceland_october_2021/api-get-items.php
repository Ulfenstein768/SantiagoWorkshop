<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
echo json_encode([["id"=>1,"name"=>"A","image"=>"1.jpg","price"=>100],["id"=>2,"name"=>"B","image"=>"2.png","price"=>200],["id"=>3,"name"=>"C","image"=>"3.jpg","price"=>300]]);