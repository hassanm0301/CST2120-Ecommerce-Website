<?php //adding new product to database

include_once "common.php";

$uploadFileName = $_FILES["image"]["name"];
$prodName = $_POST["prodName"];
$prodPrice = intval($_POST["prodPrice"]);
$prodStock = intval($_POST["prodStock"]);
$prodDesc = $_POST["prodDesc"];

$target_file = 'images/' . $uploadFileName;


$arrayDB = [
    "name" => $prodName,
    "price" => $prodPrice,
    "stock" => $prodStock,
    "description" => $prodDesc,
    "imgPath" => $target_file
];

    

move_uploaded_file($_FILES["image"]["tmp_name"], "../../".$target_file);
$collection = $DB -> Products;

$insertResult = $collection -> insertOne($arrayDB);


?>