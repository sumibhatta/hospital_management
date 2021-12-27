<?php include './header.php'; ?>


<!-- write your code here -->
<h1 class="signup-h1">
    <center>Update Patient</center>
</h1>


<div class="updatepatient-form form">
    <form action="updatepatient.php" method="POST">
        <label for="name"> Name:</label>
        <input type="text" placeholder="John Doe" name="name" maxlength="80">
        <br />

        <label for="age"> Age:</label>
        <input type="text" placeholder="20" name="age" maxlength="80">
        <br />


        <label for="sex"> Sex:</label>
        <select name="sex">
            <option value="male">male</option>
            <option value="female">female</option>

        </select>
        <br />

        <label for="diagnosis"> Diagnosis:</label>
        <input type="text" placeholder="Sick" name="diagnosis" maxlength="80">
        <br />

        <label for="contact"> Contact:</label>
        <input type="number" placeholder="9800000000" name="contact" maxlength="10">
        <br />

        <label for="address"> Address:</label>
        <input type="text" placeholder="address" name="address" maxlength="80">
        <br />

        <button class="button-index-one haha login-button" type="submit" value="Submit">Update</button>
    </form>
</div>

<?php include './footer.php'; ?>