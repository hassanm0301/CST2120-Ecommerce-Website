<?php
include "functions/php/common.php";
outHeader(["css/shoppingsite.css"]);
?>


<h3>Your Cart</h3>
<div id="cartTable"></div>

<div id="cartBtns">
    <button onclick='checkout()'>Checkout</button>
    <button onclick='clearCart()'>Clear</button>
</div>

<script src="functions/js/cart.js"></script>
<script>window.onload=()=>{buildCart()}</script>
<?php
include "html/footer.html";

?>