<?php
include("root.php");

$url = "http://uvs-t001.whelastic.net/api/pelanggan/kode.php";

$data = array(
  idPerusahaan => "17",
  kode => "ws01001"
);
$json = json_encode($data);

$response = execute($url, $json, "POST");

echo $response;
?>
