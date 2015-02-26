<?php
include("../root.php");
$id = $_REQUEST['id'];

$request = $target . "/pembayaran/pelanggan/id/" . $id . "/payable";
$response = file_get_contents($request);

echo $response;
?>
