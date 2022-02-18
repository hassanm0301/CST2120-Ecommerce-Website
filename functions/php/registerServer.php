<?php // registration for customers backend
include_once "common.php";
$Fname = filter_input(INPUT_POST, "Fname", FILTER_SANITIZE_STRING);
$Lname = filter_input(INPUT_POST, "Lname", FILTER_SANITIZE_STRING);
$adress = filter_input(INPUT_POST, "adress", FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);
$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);



$registerArray = [
    "surname" => $Lname,
    "name" => $Fname,
    "address" => $adress,
    "email" => $email,
    "password" => $password,
    "username" => $username
];

$collection = $DB->Customers;
$insertResult = $collection->insertOne($registerArray);

echo "Account created successfully";


?>