<?php
include("../root.php");

$id = $_REQUEST['id'];
$url = $target . "/pembayaran/pelanggan/id/" . $id . "/payable";

$rest = new Rest($url, null, "GET");
$response = $rest->execute();

echo $response;
?>
