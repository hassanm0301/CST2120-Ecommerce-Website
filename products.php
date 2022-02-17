<head></head>
<?php

//include libraries
require __DIR__ . '/vendor/autoload.php';

//create instance of MongoDB client
$mongoClient = (new MongoDB\Client);

//Select database
$db = $mongoClient->ecommerce;
$cursor = $db->Products->find();

//Output each customer as a JSON object with comma in between
$jsonStr = '['; //Start of array of customers in JSON

//Work through the customers
foreach ($cursor as $product){
    // $arr = array('name' => $product['name']);
    $jsonStr .= json_encode($product);//Convert PHP representation of product into JSON 
    $jsonStr .= ',';//Separator between products
}

//Remove last comma
$jsonStr = substr($jsonStr, 0, strlen($jsonStr) - 1);

//Close array
$jsonStr .= ']';

//Echo final string
echo $jsonStr;

?>