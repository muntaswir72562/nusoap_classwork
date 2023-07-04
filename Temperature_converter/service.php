<?php
include '../lib/nusoap.php';
    $error = '';
    $wsdl = 'https://webservices.daehosting.com/services/TemperatureConversions.wso?WSDL';
    $client = new nusoap_client($wsdl,true);
    $err = $client->getError();
    if ($err) {
        echo '<h2>Constructor error</h2>' . $err;
        exit();
    }

