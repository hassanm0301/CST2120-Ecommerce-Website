<?php

include_once "common.php";

$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
$staffCheck = filter_input(INPUT_POST, "staffCheck", FILTER_SANITIZE_STRING);

if ($staffCheck == "true"){
    $collection = $DB -> Admins;
}
else{
    $collection = $DB -> Customers;
}

$criteria = [
    "username" => $username,
];

$resultFound = $collection->findOne($criteria);

if ($resultFound == null){
    echo json_encode(["err"=>"1"]);
}

if ($resultFound["password"] != $password){
    echo json_encode(["err"=>"2"]);
}

else{
    echo json_encode([
        "username" => $resultFound["username"],
        "id" => $resultFound["_id"] -> __toString(),
        "staffCheck" => $staffCheck
    ]);
};

?>