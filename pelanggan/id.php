<?php
include("/root.php");
$id = $_REQUEST['id'];

$request = $target . "/pelanggan/id/" . $id; 
$response = file_get_contents($request); 

echo $response; 
?>
