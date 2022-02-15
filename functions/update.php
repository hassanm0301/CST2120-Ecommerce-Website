<?php
include_once "common.php";
$Fname = filter_input(INPUT_POST, "Fname", FILTER_SANITIZE_STRING);
$Lname = filter_input(INPUT_POST, "Lname", FILTER_SANITIZE_STRING);
$adress = filter_input(INPUT_POST, "adress", FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);
$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
$id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_STRING);


$updateArray = [
    "surname" => $Lname,
    "name" => $Fname,
    "address" => $adress,
    "email" => $email,
    "password" => $password,
    "username" => $username
];

$criteriaArray = [
    "_id" => new MongoDB\BSON\ObjectID($id)
];

$collection = $DB->Customers;
$insertResult = $collection->replaceOne($criteriaArray, $updateArray);

echo "Account updated successfully";

?>