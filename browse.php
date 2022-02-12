<?php
include "functions.php";
outHeader(["css/shoppingsite.css"]);
?>
<h4> Some of our product listings below</h4>
<div class="product-container">
    <a href="item.php">
        <div class="product-card">
            <div class="product-image">
                <img src="images/tshirt.jpg" class="product-thumb" alt="">
                <button class="card-btn">add to cart</button>
            </div>
            <div class="product-info">
                <h2 class="product-brand">SHJ</h2>
                <p class="product-short-des">Breathable material, cotton. </p>
                <span class="price">Rs450</span>
            </div>
    
        </div>
    </a>
    

</div>

<?php
include "html/footer.html";

?>