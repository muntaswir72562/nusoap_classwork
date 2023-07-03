<?php
require_once "../lib/nusoap.php";
$client = new
nusoap_client("http://localhost/classwork/Q3/convertTemperature.php?wsdl");

$error = $client->getError();
if ($error) {
echo "<h2>Constructor error</h2><pre>" . $error . "</pre>";
}

$result = $client->call("celsiusToFahrenheit", array("celsius" => 100));
if ($client->fault) {
    echo "<h2>Fault</h2><pre>";
    print_r($result);
    echo "</pre>";
    }
    else {
    
    $error = $client->getError();
    if ($error) {
    echo "<h2>Error</h2><pre>".$error."</pre>";
    }
    else {
    echo "<h2>converting temperature from celcius to fahrenheit</h2><pre>"; echo $result;
    echo "</pre>";
    }
    
    }
?>