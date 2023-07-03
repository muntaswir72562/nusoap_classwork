<?php
/**
@Description: Book Information Server Side Web Service:
This Script creates a web service using the NuSOAP php library. The fetchBookData
function accepts ISBN and sends back book information.
Example from: https://programmerblog.net/
*/
require_once('dbconn.php'); //assuming db connection is in dbconn.php
require_once('../lib/nusoap.php'); //assuming nusoap is found in the folder lib
$server = new nusoap_server(); //use NuSoap to create server object
/* Function to fetch 1 book data */
function fetchBookData($isbn){
global $dbconn;
$sql = "SELECT id, title, author_name, price, isbn, category FROM books where isbn= :isbn";
// prepare sql and bind parameters
$stmt = $dbconn->prepare($sql);
$stmt->bindParam(':isbn', $isbn);
// insert a row
$stmt->execute();
$data = $stmt->fetch(PDO::FETCH_ASSOC);
return json_encode($data); //encode as JSON

$dbconn = null;
}
$server->configureWSDL('booksServer', 'urn:book');
$server->register('fetchBookData',
array('isbn' => 'xsd:string'), //parameter
array('data' => 'xsd:string'), //output
'urn:book', //namespace
'urn:book#fetchBookData' //soapaction
);
$server->service(file_get_contents("php://input"));
// echo fetchBookData("PR-123-A1");
?>