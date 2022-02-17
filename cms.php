<?php
include "functions/php/common.php";
outHeader(["css/cms_style.css", "css/shoppingsite.css"]);
?>

<div class="cms-container">
    <h3 class="cms-func-title">Add new product to Database</h3>
    <form id="addToDB" action="functions/php/addProdServer.php" method="post" enctype="multipart/form-data">

        <label for="">Upload picture</label><br>
        <input type="file" name="image"><br>

        <label for="">Product name</label><br>
        <input type="text" class="text-input" style="width: 200px;" name="prodName"><br>

        <label for="">Product price</label><br>
        <input type="number" class="text-input" name="prodPrice"><br>

        <label for="">Product stock</label><br>
        <input type="number" class="text-input" name="prodStock"><br>

        <label for="">Product desctription</label><br>
        <input type="text" class="text-input" name="prodDesc"><br>

        <input type="submit" value="Add">
    </form>

</div>

<div class="gray-bar"></div>
<br>

<div class="cms-container">
    <h3 class="cms-func-title">Edit product on Database</h3>
    <form id="addToDB" action="functions/php/updateProdServer.php" method="post" enctype="multipart/form-data">

        <label for="">Product id</label><br>
        <input type="text" class="text-input" style="width: 200px;" name="prodId"><br>

        <label for="">Upload new picture</label><br>
        <input type="file" name="image"><br>

        <label for="">New Product name</label><br>
        <input type="text" class="text-input" style="width: 200px;" name="prodName"><br>

        <label for="">New Product price</label><br>
        <input type="number" class="text-input" name="prodPrice"><br>

        <label for="">New Product stock</label><br>
        <input type="number" class="text-input" name="prodStock"><br>

        <label for="">New Product desctription</label><br>
        <input type="text" class="text-input" name="prodDesc"><br>

        <input type="submit" value="Update">
    </form>

</div>

<div class="gray-bar"></div>
<br>

<div class="cms-container">
    <h3 class="cms-func-title">View all products details</h3> 

    <a href="browse.php"><input type="submit" value="View"></a>

</div>

<?php
include "html/footer.html";

?>