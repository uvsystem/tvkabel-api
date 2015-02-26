<?php
include("root.php");

$data = array(
  idPerusahaan => "17",
  kode => "ws01001"
);
$json = json_encode($data);

$url = "http://uvs-t001.whelastic.net/api/tagihan/kode.php";
$rest = new Rest($url, $json, "GET");
$response = $rest->execute();
echo $response;

echo "<br /><br />";

$url = "http://uvs-t001.whelastic.net/api/pelanggan/kode.php";
$rest->set($url, $json, "GET");
$response = $rest->execute();
echo $response;

$rest->set("http://www.google.com", null, "GET");
$response = $rest->execute();
echo $response;
?>
