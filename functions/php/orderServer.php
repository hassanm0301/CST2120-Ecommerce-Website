<?php // finding customer order and returning in tabular form

include_once "common.php";

$id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_STRING);

$orderCriteria = [
    "customerID" => $id
];


if($id == ""){ // if in admin mode, all orders will be visible
    $orderCriteria = [];
}
$resultOrders = $DB -> Orders -> find($orderCriteria);



foreach ($resultOrders as $elem){
    echo "<table>";
    echo "<tr>";
    echo "<td> Order </td>";
    echo "</tr>";
    
    for ($i = 0; $i < count($elem["productsName"]); $i++){
        echo "<tr>";
        echo "<td>";
        echo $elem["productsName"][$i];
        echo "</td>";
        echo "<td>";
        echo $elem["productsQuanity"][$i];
        echo "</td>";
        echo "</tr>";
    }
    echo "<table>";

};




?>