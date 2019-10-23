<?php

class FuelEconomy {
    // Calculate the fuel efficiency
    public function calculate($distance, $gas) {

         if($gas <= 0 ) {
                // Throw custom error message, instead of an error
            throw new Exception("The gas consumption cannot be less than
            or equal to zero. You better drink coffee or take a break.");
        }
    return $distance/$gas; }
    
}

// The data to feed the class with
$dataFromCars = array( array(50,10),
array(50,0), array(50,-3), array(30,5)
);

foreach($dataFromCars as $data => $value) {
    try
    {
    $fuelEconomy = new FuelEconomy();
    echo $fuelEconomy -> calculate($value[0],$value[1]) . "<br />";
    }
    catch (Exception $e) {
    } }
    // Echo the error message to the user
    echo "Message: " . $e -> getMessage() . "<br />"; echo "<hr />";
    // Write the error into a log file
    error_log($e -> getMessage());
    error_log($e -> getFile());
    error_log($e -> getLine());