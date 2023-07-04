<?php
include 'service.php';

if(isset($_POST['celsius'])){
    $celsius=$_POST['celsius'];
    // echo $celcius;

    $request_param = array(
        'nCelsius' => $celsius
    );
    try{
    $response_param = $client->call('CelsiusToFahrenheit',$request_param);
    echo $response_param["CelsiusToFahrenheitResult"];
    }
    catch(Exception $e){
        echo 'Caught exception: ', $e->getMessage(), "\n";
    }

}

?>