<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

if($GET["page"] == 1){
    echo json_encode([["id"=>1, "name"=>A, "image"=>1.jpg]]);
}
if($GET["page"] == 2){
    echo json_encode([["id"=>2, "name"=>B, "image"=>2.png]]);
}
if($GET["page"] == 3){
    echo json_encode([["id"=>3, "name"=>C, "image"=>3.jpg]]);
}



echo json_encode([["id"=>1, "name"=>A, "image"=>1.jpg],["id"=>2, "name"=>B, "image"=>2.png],["id"=>3, "name"=>C, "image"=>3.jpg]]);