<?php
include "functions/php/common.php";
outHeader(["css/shoppingsite.css"]);
?>


<div class="search">
    <input type="text" class="search-box" placeholder="search brand, product" required>
    <input type ="submit">
    </form>
</div>
<h4> Some of our product listings below</h4>

<div id="productsContent"></div>

<script src="functions/js/browse.js"></script>
<?php
include "html/footer.html";

?>