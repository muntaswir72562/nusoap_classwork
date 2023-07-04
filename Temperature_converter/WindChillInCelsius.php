<?php
include 'service.php';

if(isset($_POST['celsius'])){
    $celsius=$_POST['celsius'];
    $wspeed=$_POST['wspeed'];

    $request_param = array(
        'nCelsius' => $celsius,
        'nWindSpeed' => $wspeed
    );
    try{
    $response_param = $client->call('WindChillInCelsius',$request_param);
    echo $response_param["WindChillInCelsiusResult"];
    }
    catch(Exception $e){
        echo 'Caught exception: ', $e->getMessage(), "\n";
    }

}

?>