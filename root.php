<?php
$target = "http://uvision.whelastic.net/tvkabel/api";

class Rest {
  private $_url;
  private $_data;
  private $_method;
  private $httpHeader = array (
    "Accept: application/json",
    "Content-Type: application/json",
  );

  function __construct($url, $data, $method) {
    $this->_url = $url;
    $this->_data = $data;
    $this->_method = $method;
  }
  
  public function execute() {
    //open curl connection
    $session = curl_init();
    
    curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($session, CURLOPT_HTTPHEADER, $this->httpHeader);
    $this->setUrl($session, $this->url, $this->data, $this->method);  
    $this->setCurlMethod($session, $this->method);
  
    //set request body with json if $data is not null
    if ($this->data != null) {
      curl_setopt($session, CURLOPT_POSTFIELDS, $this->data);
    }

    $response = curl_exec($session);
    
    curl_close($session);

    return $response;
  }
  
  private function setCurlMethod($session, $method) {
    if (($method == "DELETE") || ($method == "delete")) {
      curl_setopt($session, CURLOPT_CUSTOMREQUEST, $method);
    } else if (($method == "GET") || ($method == "get")) {
      curl_setopt($session, CURLOPT_HTTPGET, true);
    } else if (($method == "POST") || ($method == "post")) {
     curl_setopt($session, CURLOPT_POST, true);
    } else if (($method == "PUT") || ($method == "put")) {
      curl_setopt($session, CURLOPT_PUT, true);
    }
  }

  private function setUrl($session, $url, $data, $method) {
    curl_setopt($session, CURLOPT_URL, $url);
    if ((($method == "GET") || ($method == "get")) && (($data != null) && ($data != ""))) {
      $url .= "?" . $data;
      curl_setopt($session, CURLOPT_URL, $url);
    }
  }
}
?>
