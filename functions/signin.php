<?php

include_once "common.php";

$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

$custColl = $DB -> Customers;
$adminColl = $DB -> Admins;

$criteria = [
    "username" => $username,
];

$resultFound = $custColl->findOne($criteria);

if ($resultFound == null){
    echo json_encode(["err"=>"1"]);
}

if ($resultFound["password"] != $password){
    echo json_encode(["err"=>"2"]);
}

else{
    echo json_encode([
        "username" => $resultFound["username"]
    ]);
};

?>