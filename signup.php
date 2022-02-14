<?php
include "php_functions/functions.php";
outHeader(["css/shoppingsite.css"]);
?>


<h3> Sign Up below</h3>
<div class="container">

    <form id="form">
        <!-- Fist name -->
        <div class="form-group">
            <label for="Fname">First Name</label>
            <input type="text" id="Fname" placeholder="First Name" name="name" required minlength="2"
                maxlength="100" />
        </div>
        <div class="form-group">
            <label for="Lname">Last Name</label>
            <input type="text" id="Lname" placeholder="Last Name" name="name" required minlength="2"
                maxlength="100" />
        </div>
        <!-- Delivery Address -->
        <div class="form-group">
            <label for="address">Delivery Address</label>
            <input type="address" id="adress" placeholder="Enter your Address" name="address" required />
        </div>
        <!-- Email Address -->
        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" placeholder="example@address.com" name="email" required />
        </div>
        <!-- Date of birth -->
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" placeholder="Enter username" name="username" required />
        </div>
        <!-- Password -->
        <div class="form-group">
            <label for="password1">Password</label>
            <input type="password" id="password1" placeholder="Create Password (Min. 8 Characters)" required
                pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$"
                title="Please include at least 1 uppercase character, 1 lowercase character, and 1 number." />
        </div>
        <input type="submit" value="Reset" onclick="clearFunc()" class="btn" />
        <input type="submit" value="Create Account" class="btn" onClick="CreateAccount()" />
</div>

</form>

<h1>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy policy</a>.</h1>
<h1>Already have an account?<a href="Signin.html" style="color:dodgerblue">Sign In</a>.</h1>

<?php
include "html/footer.html";

?>