<?php
include("/root.php");
$id = $_REQUEST['id'];

$request = $target . "/pelanggan/id/" . $id; 
$result = file_get_contents($request); 

echo $result; 
?>
