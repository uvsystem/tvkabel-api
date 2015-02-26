<?php
include("../root.php");

$requestBody = file_get_contents("php://input");
$obj = json_decode($requestBody);
$request = $target . "/pelanggan/perusahaan/" . $obj->idPerusahaan . "/kode/" . $obj->kode;

$response = execute($request, null, "get");

echo $response;
?>
