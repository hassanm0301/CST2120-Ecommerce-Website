<?php
REQUIRE __DIR__ . "/../vendor/autoload.php";

$clientDB = new MongoDB\Client;

$DB = $clientDB -> ecommerce;

function outHeader($cssLocationArray){
    echo '<html lang="eng">';
    echo '<head>';
    foreach($cssLocationArray as $src){
        echo '<link rel="stylesheet" type="text/css" href="'. $src .'">';
    }
    include "html/header.html";
}

?>