<?php // creates table from product IDs in cart

include_once "common.php";

$cartItemsStr = $_POST["cartItems"];

$cartItems = json_decode(stripslashes($cartItemsStr));

$collection = $DB->Products;

$resultantArray = [];

foreach($cartItems as $id){
    $criteria = [
        "_id" => new MongoDB\BSON\ObjectID($id)
    ];

    $resultant = $collection -> findOne($criteria);
    if(!(array_key_exists($resultant["name"], $resultantArray))){ //creates array with product details if it does not exists
        $resultantArray[$resultant["name"]] = [
            "name" => $resultant["name"],
            "quantity" => 1,
            "price" => $resultant["price"]
        ];
    }
    else{ // increments quantity if array exists already
        $resultantArray[$resultant["name"]]["quantity"] ++;
    }
}

echo "<table><tr><th>Name</th><th>Quantity</th><th>Price</th></tr>";

foreach($resultantArray as $cartProd){ // creates html table
    echo "<tr><td>".$cartProd["name"]."</td><td>".$cartProd["quantity"]."</td><td>".$cartProd["price"]."</td></tr>";
}


?>

