<?php
include("../root.php");

$id = $_REQUEST['id'];
$request = $target . "/pembayaran/pelanggan/id/" . $id . "/payable";
$response = execute($request, null, "get");

echo $response;
?>
