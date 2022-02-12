<?php
include "functions.php";
outHeader(["css/shoppingsite.css"]);
?>

<h3> Sign In below</h3>
<div class="container">

    <form id="form">
        <!-- Email Address -->
        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" placeholder="example@address.com" name="email" required />
        </div>
        <!-- Password -->
        <div class="form-group">
            <label for="password1">Password</label>
            <input type="password" id="password1" placeholder="Create Password (Min. 8 Characters)" required
                pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$"
                title="Please include at least 1 uppercase character, 1 lowercase character, and 1 number." />
        </div>
        <input type="submit" value="Reset" onclick="clearFunc()" class="btn" />
        <input type="submit" value="Sign In" class="btn" onClick="SignIn()" />
</div>

</form>

<h1>Don't have an account yet?<a href="SignUp.html" style="color:dodgerblue">Create an Account</a>.</h1>

<?php
include "html/footer.html";

?>