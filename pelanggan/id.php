<?php
include("../root.php");

$id = $_REQUEST['id'];
$url = $target . "/pelanggan/id/" . $id;

$rest = new Rest($url, null, "GET");
$response = $rest->execute(); 

echo $response; 
?>
