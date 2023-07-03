<?php

$wsdl = 'http://localhost/classwork/getProductList.wsdl';
$client = new SoapClient($wsdl, array('trace'=>1));
// The trace param will show you errors
$request_param = array(
'category' => 'books'
);

try {
$responce_param = $client->getProd("books");
print $responce_param;
}catch (Exception $e) {
echo "<h2>Exception Error</h2>";
echo $e->getMessage();
}


?>