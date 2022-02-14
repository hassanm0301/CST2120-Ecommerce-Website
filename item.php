<?php
include "php_functions/functions.php";
outHeader(["css/item_style.css", "css/shoppingsite.css", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"]);
?>

<div class="item-page">
    <div class="image-col">
        <img src="images/tshirt.jpg" width="300px" height="300px">
    </div>
    <div class="info-col">
        <p class="item-title">Black T-shirt</p>
        <p class="item-rating" style="float: left; padding-right: 10px; font-weight: bold;">Rating:
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
        </p>
        <p class="item-price" style="float: left; font-weight: bold;">Price: <p style="height: 0px;font-weight: normal">  Rs 1000</p></p>
        <p class="item-desc">100% cotton T shirt. Comfortable to wear.</p>
        
        <div style="text-align: center;"><button class="cart-button">Add to cart</button></div>
    </div>
</div>

<?php
include "html/footer.html";

?>