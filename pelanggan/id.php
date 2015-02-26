<?php
include("/root.php");
$id = $_REQUEST['id'];

$request = $target . "/pelanggan/id/" . $id; 
$file = file_get_contents($request); 

echo $file; 
?>
