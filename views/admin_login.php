<?php include './header.php'; ?>

<h1 class="login-h1">
    <center>Login</center>
</h1>

<div class="login-form form">
    <form action="admin_login.php" method="POST">
        <label for="username"> Username:</label>
        <input type="text" placeholder="John Doe" name="fname" maxlength="20">
        <br />
        <!-- <label for="email"> Email:</label>
        <input type="email" placeholder="Email" name="email">
        <br /> -->
        <label for="password"> Password:</label>
        <input type="password" placeholder="Password" name="password">
        <br/>
        <button class="button-index-one haha login-button" type="submit" value="Submit">Submit</button>
    </form>
</div>


<?php include './footer.php'; ?>