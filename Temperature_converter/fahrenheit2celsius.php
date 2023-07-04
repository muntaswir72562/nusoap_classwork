<?php
include 'service.php';

if(isset($_POST['fahrenheit'])){
    $fah=$_POST['fahrenheit'];
    // echo $celcius;

    $request_param = array(
        'nFahrenheit' => $fah
    );
    try{
    $response_param = $client->call('FahrenheitToCelsius',$request_param);
    echo $response_param["FahrenheitToCelsiusResult"];
    }
    catch(Exception $e){
        echo 'Caught exception: ', $e->getMessage(), "\n";
    }

}

?>