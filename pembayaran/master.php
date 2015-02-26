<?php
include("../root.php");

$requestBody = file_get_contents("php://input");
$url = $target . "/pembayaran/master";

$response = execute($url, $requestBody, "post");

echo $response;
?>
