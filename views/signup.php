<?php include './header.php'; ?>

<h1 class="signup-h1">
    <center>SignUp</center>
</h1>

<div class="login-form form">
    <form action="./model/signup.php" method="POST">
        <label for="firstname"> Firstname:</label>
        <input type="text" placeholder="John" name="fname" maxlength="20">
        <br />
        <label for="lasttname"> Lastname:</label>
        <input type="text" placeholder="Doe" name="lastname" maxlength="20">
        <br />


        <label for="phone"> Phone No:</label>
        <input type="phone" placeholder="99999999" name="phone">
        <br />


        <label for="password"> Password:</label>
        <input type="password" placeholder="******" name="password">
        <br />


        <label for="repassword"> Re-Password:</label>
        <input type="password" placeholder="******" name="repassword">
        <br /><br>
        <button class="button-index-one haha login-button" type="submit" name="register" value="register">Signup</button>
    </form>
</div>

<?php include './footer.php'; ?>
