<?php
include("root.php");

$url = "http://uvs-t001.whelastic.net/api/tagihan/kode.php";

$data = array(
  idPerusahaan => "17",
  kode => "ws01001"
);
$json = json_encode($data);

$rest = new Rest($url, $json, "GET");
$response = $rest->execute();

echo $response;
?>
