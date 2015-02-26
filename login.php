<?php
include("root.php");
//extract json data from request payload
$requestBody = file_get_contents('php://input');
$url = $target . "/login";
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
//set request body with json
curl_setopt($session, CURLOPT_POSTFIELDS, $requestBody);
//set request header to support json
curl_setopt($session, CURLOPT_HTTPHEADER, $httpHeader);

$result = curl_exec($session);

//close connection
curl_close($session);

echo $result;
?>
