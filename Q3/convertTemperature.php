<?php

require_once('../lib/nusoap.php');

function celsiusToFahrenheit($celsius) {
    $fahrenheit = $celsius * 9 / 5 + 32;
    return $fahrenheit;
    }
    $server = new soap_server();
    $server->configureWSDL("convertTemperature", "urn:convertTemperature");
    $server->register("celsiusToFahrenheit",
    
    array("celsius" => "xsd:integer"),
    array("return" => "xsd:integer"),
    "urn:convertTemperature",
    "urn:convertTemperature#celsiusToFahrenheit",
    "rpc",
    "encoded",
    "converting temperature from celcius to fahrenheit");
    
    $server->service(file_get_contents("php://input"));
    
?>