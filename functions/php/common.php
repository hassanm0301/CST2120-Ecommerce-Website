<?php
REQUIRE __DIR__ . "/../../vendor/autoload.php";

$clientDB = new MongoDB\Client;

$DB = $clientDB -> ecommerce;

function outHeader($cssLocationArray){
    echo '<html lang="eng">';
    echo '<head>';
    foreach($cssLocationArray as $src){
        echo '<link rel="stylesheet" type="text/css" href="'. $src .'">';
    }
    include "html/header.html";
};

function dispProd($prodArray){
    echo '<div class="product-container">';
    echo    '<div class="product-card">';
    echo        '<div class="product-image">';
    echo            '<img src='.$prodArray["imgPath"].' class="product-thumb" alt="">';
    echo            '<button class="card-btn">add to cart</button>';
    echo        '</div>';
    echo        '<div class="product-info">';
    echo            '<h2 class="product-brand">'.$prodArray["name"].'</h2>';
    echo            '<p class="product-short-des">'.$prodArray["description"].'</p>';
    echo            '<span class="price">'. $prodArray["price"].'</span>';
    echo        '</div>';
    echo    '</div>';
    echo '</div>';
};

function dispProdrow($prod2Array){
    echo '<div class="product-row">';
    dispProd($prod2Array["0"]);
    dispProd($prod2Array["1"]);
    echo '</div>';
}

function dispMultiProd($prodMultiArray){
    $i = 0;
    $tempArray = [];
    foreach($prodMultiArray as $currentProd){
        $tempArray[] = $currentProd;
        $i++;
        if($i%2 == 0){
            dispProdrow($tempArray);
            unset($tempArray);
            $tempArray = [];
        }
    }
}

?>