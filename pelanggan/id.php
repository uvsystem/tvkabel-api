<?php
$requestBody = file_get_contents('php://input');

$request = "http://uvision.whelastic.net/tvkabel/api/pelanggan/id/" . $requestBody; 
$file = file_get_contents($request); 

echo $file; 
?>
