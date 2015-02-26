<?php
include("../root.php");

$requestBody = file_get_contents("php://input");
//decode json into stdObject
$obj = json_decode($requestBody);
$url = $target . "/pelanggan/id" . $obj->id . "/location/" . $obj->latitude . "/" . $obj->longitude;

$response = execute($url, null, "put");

echo $response;
?>
