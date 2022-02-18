<?php // functions used by almost all other php files
    // included in every php files
    // Put universal php code here
REQUIRE __DIR__ . "/../../vendor/autoload.php";

$clientDB = new MongoDB\Client;

$DB = $clientDB -> ecommerce;

// displays header taking as argument array of css file locations
function outHeader($cssLocationArray){
    echo '<html lang="eng">';
    echo '<head>';
    foreach($cssLocationArray as $src){
        echo '<link rel="stylesheet" type="text/css" href="'. $src .'">';
    }
    include "html/header.html";
};

// displays 1 product from array of details
function dispProd($prodArray){
    echo '<div class="product-container">';
    echo    '<div class="product-card">';
    echo        '<div class="product-image">';
    echo            '<img src='.$prodArray["imgPath"].' class="product-thumb" alt="">';
    echo            "<button onclick=\"addToCart('".$prodArray["_id"]."')\" class=\"card-btn\">add to cart</button>";
    echo        '</div>';
    echo        '<div class="product-info">';
    echo            '<h2 class="product-brand">'.$prodArray["name"].'</h2>';
    echo            '<p class="product-short-des">'.$prodArray["description"].'</p>';
    echo            '<span class="price">'. $prodArray["price"].'</span>';
    echo        '</div>';
    echo    '</div>';
    echo '</div>';
};

// displays 2 products side by side using array of 2 products
function dispProdrow($prod2Array){
    echo '<div class="product-row">';
    dispProd($prod2Array["0"]);
    dispProd($prod2Array["1"]);
    echo '</div>';
}

// displays limitless amount of 2 column of products (2 on each row) from array of products details
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
    if(count($tempArray) == 1){
        dispProd($tempArray["0"]);
    }
}

// displays 1 product with more details for admins. These products cannot be bought
function dispProdAdmin($prodArray){
    echo '<div class="product-container">';
    echo    '<div class="product-card">';
    echo        '<div class="product-image">';
    echo            '<img src='.$prodArray["imgPath"].' class="product-thumb" alt="">';
    echo        '</div>';
    echo        '<div class="product-info">';
    echo            '<h2 class="product-brand">'.$prodArray["name"].'</h2>';
    echo            '<p class="product-short-des">'.$prodArray["description"].'</p>';
    echo            '<p class="product-short-des">'.$prodArray["_id"].'</p>';
    echo            '<p class="product-short-des">Stock:'.$prodArray["stock"].'</p>';
    echo            '<span class="price">'. $prodArray["price"].'</span>';
    echo        '</div>';
    echo    '</div>';
    echo '</div>';
};

// displays 2 products with more details for admins
function dispProdrowAdmin($prod2Array){
    echo '<div class="product-row">';
    dispProdAdmin($prod2Array["0"]);
    dispProdAdmin($prod2Array["1"]);
    echo '</div>';
}

// displays umlimited products for admins
function dispMultiProdAdmin($prodMultiArray){
    $i = 0;
    $tempArray = [];
    foreach($prodMultiArray as $currentProd){
        $tempArray[] = $currentProd;
        $i++;
        if($i%2 == 0){
            dispProdrowAdmin($tempArray);
            unset($tempArray);
            $tempArray = [];
        }
    }
    if(count($tempArray) == 1){
        dispProdAdmin($tempArray["0"]);
    }
}

?>