<?php

include_once "common.php";

$id = $_POST["prodId"];
$uploadFileName = $_FILES["image"]["name"];
$prodName = $_POST["prodName"];
$prodPrice = $_POST["prodPrice"];
$prodStock = $_POST["prodStock"];
$prodDesc = $_POST["prodDesc"];

$target_file = 'images/' . $uploadFileName;

$criteria = [
    "_id" => new MongoDB\BSON\ObjectID($id)
];


$arrayDB = [
    "name" => $prodName,
    "price" => $prodPrice,
    "stock" => $prodStock,
    "description" => $prodDesc,
    "imgPath" => $target_file
];

    

move_uploaded_file($_FILES["image"]["tmp_name"], "../../".$target_file);
$collection = $DB -> Products;

$insertResult = $collection -> replaceOne($criteria, $arrayDB);


?>