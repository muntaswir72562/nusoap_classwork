<?php
ini_set('display_errors', true);
error_reporting(E_ALL);
require_once('../lib/nusoap.php');
$error = '';
$result = array();
$wsdl = "http://localhost/classwork/Q4/bookservice.php?wsdl";
//  $client = new nusoap_client($wsdl, true);
//     $result = $client->call('fetchBookData', array("PR-123-A1"));
//     echo $result;

if (isset($_POST['sub'])) {
    $isbn = trim($_POST['isbn']);
    if (!$isbn) {
        $error = 'ISBN cannot be left blank.';
    }

    // $client = new nusoap_client($wsdl, true);
    // $result = $client->call('fetchBookData', array("PR-123-A1"));
    // echo $result;

    if (!$error) {
        //create client object
        $client = new nusoap_client($wsdl, true);
        $err = $client->getError();
        if ($err) {
            echo '<h2>Constructor error</h2>' . $err;
            exit();
        }
        try {
            $result = $client->call('fetchBookData', array($isbn));
            // echo "client1:  ".$result;
            $result = json_decode($result, true);
            // echo "client2:  ".$result;
            // echo 'type of data ' . gettype($result);
          
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
        }
    }
}
