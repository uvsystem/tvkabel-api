<?php
$target = "http://uvision.whelastic.net/tvkabel/api";

function execute($url, $data, $method) {
  $httpHeader = array (
    "Accept: application/json",
    "Accept-Encoding: gzip, deflate",
    "Content-Type: application/json",
  );

  //open curl connection
  $session = curl_init();
  
  curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($session, CURLOPT_HTTPHEADER, $httpHeader);
  
  curl_setopt($session, CURLOPT_URL, $url);
  if (($method == "GET") | ($method == "get")) {
    $url .= "?" . $data;
    curl_setopt($session, CURLOPT_URL, $url);
  }

  echo "debug: " . $url;
  
  //set http method
  if (($method == "DELETE") || ($method == "delete")) {
    curl_setopt($session, CURLOPT_CUSTOMREQUEST, $method);
  } else if (($method == "GET") || ($method == "get")) {
    curl_setopt($session, CURLOPT_HTTPGET, true);
  } else if (($method == "POST") || ($method == "post")) {
    curl_setopt($session, CURLOPT_POST, true);
  } else if (($method == "PUT") || ($method == "put")) {
    curl_setopt($session, CURLOPT_PUT, true);
  }
  //set request body with json if $data is not null
  if ($data != null) {
    echo "debug: " . $data . "<br />";
    curl_setopt($session, CURLOPT_POSTFIELDS, $data);
  }

  $result = curl_exec($session);

  //close connection
  curl_close($session);

  return $result;
}
?>
