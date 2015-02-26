<?php
include("../root.php");

$id = $_REQUEST['id'];
$request = $target . "/pelanggan/id/" . $id; 
$response = execute($request, null, "get"); 

echo $response; 
?>
