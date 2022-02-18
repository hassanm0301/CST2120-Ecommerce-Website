<?php
include "functions/php/common.php";
outHeader(["css/shoppingsite.css"]);
?>
<script src="functions/js/signin.js"></script>
<h3> Sign In below</h3>
<div class="container">

    <form id="form">
        <!-- Email Address -->
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="usrname" placeholder="Username" name="username" required />
        </div>
        <!-- Password -->
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="passwrd" required/>
        </div>
        <div class="form-group">
            <label for="Staff">Staff</label>
            <input type="checkbox" id="staffCheck"/>
        </div>
        <button onclick="signin()">Sign In</button>
</div>

</form>

<h1>Don't have an account yet?<a href="SignUp.html" style="color:dodgerblue">Create an Account</a>.</h1>

<?php
include "html/footer.html";

?>