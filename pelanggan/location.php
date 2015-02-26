<?php
include("../root.php");

$requestBody = file_get_contents("php://input");
//decode json into stdObject
$obj = json_decode($requestBody);
$url = $target . "/pelanggan/id" . $obj->id . "/location/" . $obj->latitude . "/" . $obj->longitude;

$httpHeader = array (
  "Accept: application/json",
  "Accept-Encoding: gzip, deflate",
  "Content-Type: application/json",
);

//open curl connection
$session = curl_init($url);
curl_setopt($session, CURLOPT_RETURNTRANSFER, 1);
//set request method as post
curl_setopt($session, CURLOPT_POST, 1);
//set request header to support json
curl_setopt($session, CURLOPT_HTTPHEADER, $httpHeader);

$response = curl_exec($session);

//close connection
curl_close($session);

echo $response;
?>
