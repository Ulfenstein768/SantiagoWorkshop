<?php
$id=bin2hex(random_bytes(16));

http_response_code(201);
header("Content-Type: application/json");
echo '{ "id":"'.$id.'",
        "name":"'.$_POST['name'].'", 
        "last_name":"'.$_POST['last_name'].'"}';
