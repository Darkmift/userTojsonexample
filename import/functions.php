<?php

$new_user = array(
    'name' => $_POST['name'],
    'email' => $_POST['email'],
);
var_dump($new_user);
echo "<hr>";

$myFile = "users.json";
$arr_data = array(); // create empty array

//Get data from existing json file
$jsondata = file_get_contents($myFile);
var_dump($jsondata);
// converts json data into array
$arr_data = json_decode($jsondata, true);

// Push user data to array
array_push($arr_data, $new_user);

//Convert updated array to JSON
$jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);

//write json data into data.json file
if (file_put_contents($myFile, $jsondata)) {
    echo 'Data successfully saved';
} else {
    echo "error";
}
