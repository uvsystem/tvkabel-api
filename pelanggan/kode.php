<?php
include("../root.php");

//$requestBody = file_get_contents("php://input");
$requestBody = $_GET['kode'];

echo "debug: " . $requestBody . "<br /><br />";

$obj = json_decode($requestBody);

echo "debug: " . $obj . "<br /><br />";

$url = $target . "/pelanggan/perusahaan/" . $obj->idPerusahaan . "/kode/" . $obj->kode;

$rest = new Rest($url, null, "GET");
$response = $rest->execute();

echo $response;
?>
