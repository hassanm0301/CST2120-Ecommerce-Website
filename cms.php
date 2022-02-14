<?php
include "php_functions/functions.php";
outHeader(["css/cms_style.css", "css/shoppingsite.css"]);
?>
<div class="cms-container" >
    <h3 class="cms-func-title">Add new product to Database</h3>
    <form id="addToDB">

        <label for="">Upload picture</label><br>
        <input type="file"><br>

        <label for="">Product name</label><br>
        <input type="text" class="text-input" style="width: 200px;"><br>

        <label for="">Product price</label><br>
        <input type="number" class="text-input"><br>

        <button class="cms-btn">Confirm</button>
    </form>

</div>

<div class="gray-bar"></div>
<br>

<div class="cms-container">
    <h3 class="cms-func-title">Resupply stock</h3>
    <form id="addToDB">

        <label for="">Product ID</label><br>
        <input type="text" style="width: 200px;"><br>

        <label for="">Product price</label><br>
        <input type="number" class="text-input"><br>

        <label for="">Amount brought in</label><br>
        <input type="number" class="text-input"><br>

        <button class="cms-btn">Confirm</button>
    </form>

</div>

<?php
include "html/footer.html";

?>