<?php
include("../root.php");

$requestBody = file_get_contents("php://input");

$obj = json_decode($requestBody);
$request = $target . "/pelanggan/perusahaan/" . $obj->idPerusahaan . "/kode/" . $obj->kode;

$response = file_get_contents($request);

echo $response;
?>
