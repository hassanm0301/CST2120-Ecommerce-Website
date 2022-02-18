<?php // siging in for custoners and admins

include_once "common.php";

$username = $_POST["usrname"];
$password = $_POST["passwrd"];
$staffCheck = $_POST["staffCheck"];

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

$id = $resultFound["_id"] -> __toString(); // makes objectID into string


// validations
if ($resultFound == null){
    echo json_encode("1");
}

else if ($resultFound["password"] != $password){
    echo json_encode("2");
}

else{
    echo json_encode([
        "msg" => "Sign in successful",
        "username" => $resultFound["username"],
        "id" => $id,
        "staffCheck" => $staffCheck
    ]);
};

?>