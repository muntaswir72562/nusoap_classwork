<?php


$response = "";
if (isset($_POST['num1'])) {
    
    $op = $_POST['op'];
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];


    $wsdl = 'http://www.dneonline.com/calculator.asmx?wsdl';
    $client = new SoapClient($wsdl, array('trace' => 1));

    $request_param = array(
        'intA' => $num1,
        'intB' => $num2
    );

    if ($op === 'Add') {
        try {
            $responce_param = $client->Add($request_param);
            $response = $num1 . ' + ' . $num2 . ' = ' . $responce_param->AddResult;
            //Since $responce_param is an object, AddResult is accessed using ->
        } catch (Exception $e) {
            echo "<h2>Exception Error</h2>";
            $response = $e->getMessage();
        }
    } elseif ($op === 'Subtract') {
        try {
            $responce_param = $client->Subtract($request_param);
            $response = $num1 . ' - ' . $num2 . ' = ' . $responce_param->SubtractResult;
            //Since $responce_param is an object, AddResult is accessed using ->
        } catch (Exception $e) {
            echo "<h2>Exception Error</h2>";
            $response = $e->getMessage();
        }
    } elseif ($op === 'Multiply') {
        try {
            $responce_param = $client->Multiply($request_param);
            $response = $num1 . ' * ' . $num2 . ' = ' . $responce_param->MultiplyResult;
            //Since $responce_param is an object, AddResult is accessed using ->
        } catch (Exception $e) {
            echo "<h2>Exception Error</h2>";
            $response = $e->getMessage();
        }
    } elseif ($op === 'Divide') {
        try {
            $responce_param = $client->Divide($request_param);
            $response = $num1 . ' / ' . $num2 . ' = ' . $responce_param->DivideResult;
            //Since $responce_param is an object, AddResult is accessed using ->
        } catch (Exception $e) {
            echo "<h2>Exception Error</h2>";
            $response = $e->getMessage();
        }
    }
    header("Location: index.php?result=".$response);
}
