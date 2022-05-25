<?php

if(!isset($_GET['name'])){
  http_response_code(400);
  echo "You must give me your name";
  exit();
}
if(strlen($_GET['name']) < 2){
  http_response_code(400);
  echo "name min 2 characters";
  exit();
}
if(strlen($_GET['name']) > 20){
  http_response_code(400);
  echo "name max 5 characters";
  exit();
}

if(!isset($_GET['last_name'])){
  http_response_code(400);
  echo "You must give me your last_name";
  exit();
}
if(strlen($_GET['last_name']) < 2){
  http_response_code(400);
  echo "last_name min 2 characters";
  exit();
}
if(strlen($_GET['last_name']) > 20){
  http_response_code(400);
  echo "last_name max 5 characters";
  exit();
}


echo "Thank you ".$_GET['name']." ".$_GET['last_name'];


