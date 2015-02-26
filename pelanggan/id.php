<?php
include("../root.php");
$id = $_REQUEST['id'];

$request = "http://uvision.whelastic.net/tvkabel/api/pelanggan/id/" . $id; 
$file = file_get_contents($request); 

echo $file; 
?>
