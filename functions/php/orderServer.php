<?php

include_once "common.php";

$id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_STRING);

$orderCriteria = [
    "customerID" => $id
];

$resultOrders = $DB -> Orders -> find($orderCriteria);



foreach ($resultOrders as $elem){
    echo "<tr>";
    echo "<td> Order </td>";
    echo "</tr>";
    
    for ($i = 0; $i < count($elem["productsname"]); $i++){
        echo "<tr>";
        echo "<td>";
        echo $elem["productsname"][$i];
        echo "</td>";
        echo "<td>";
        echo $elem["productsQuantity"][$i];
        echo "</td>";
        echo "</tr>";
    }

};




?>