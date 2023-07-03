<?php

echo 'Create and Consume SOAP Service using PHP';
echo '<br/><br/>';

$client = new SoapClient(
'http://localhost/classwork/getProductList.wsdl');

try {

$response = $client->getProd();
// echo json_decode($response);
echo $response ;

} catch ( SoapFault $sf ) {

//echo $sf;
echo 'Error:: ' . $sf->getMessage();

}
?>