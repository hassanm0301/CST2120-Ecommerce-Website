<?php // checking out all items in cart. Return total price
    // stores order and decrements product stocks

include_once "common.php";

$cartItemsStr = $_POST["cartItems"];
$custID = $_POST["id"];

$cartItems = json_decode(stripslashes($cartItemsStr));

$collection = $DB->Products;
$orderColl = $DB -> Orders;

$totalPrice = 0;

// arrays for storing product details for order collection
$nameArray = [];
$idArray = [];
$quantityArray = [];

foreach($cartItems as $id){
    $criteria = [
        "_id" => new MongoDB\BSON\ObjectID($id)
    ];

    $searchResult = $collection -> findOne($criteria);

    if(in_array($searchResult["name"], $nameArray)){
        $num = array_search($searchResult["name"], $nameArray);
        $quantityArray[$num]++;
    }
    else{
        $nameArray[] = $searchResult["name"];
        $quantityArray[] = 1;
        $idArray[] = $id;
    }

    $newStock = $searchResult["stock"]-1;

    $replaceArray = [ // replaces product collection with new decremented stock
        "name" => $searchResult["name"],
        "price" => intval($searchResult["price"]),
        "stock" => intval($newStock),
        "description" => $searchResult["description"],
        "imgPath" => $searchResult["imgPath"]
    ];


    $collection -> replaceOne($criteria, $replaceArray);

    $totalPrice += $searchResult["price"]; // calculates total price
    
}

// creates new document in order collection
$insertResult = $orderColl -> insertOne([
    "customerID" => $custID,
    "productsID" => $idArray,
    "productsQuanity" => $quantityArray,
    "pricePaid" => $totalPrice,
    "productsName" => $nameArray
]);



echo "Successfully paid ".$totalPrice;

