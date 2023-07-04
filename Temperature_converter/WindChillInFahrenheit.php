<?php
include 'service.php';

if(isset($_POST['fahrenheit'])){
    $fah=$_POST['fahrenheit'];
    $wspeed=$_POST['wspeed'];

    $request_param = array(
        'nFahrenheit' => $fah,
        'nWindSpeed' => $wspeed
    );
    try{
    $response_param = $client->call('WindChillInFahrenheit',$request_param);
    echo $response_param["WindChillInFahrenheitResult"];
    }
    catch(Exception $e){
        echo 'Caught exception: ', $e->getMessage(), "\n";
    }

}

?>