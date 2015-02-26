<?php
include("/root.php");
$id = $_REQUEST['id'];

$request = $target . "/pembayaran/pelanggan/id/" . $id . "/payable";
$file = file_get_contents($request);

echo $file;
?>
