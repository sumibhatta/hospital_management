<?php include './header.php'; ?>


<!-- write your code here -->
<h1 class="signup-h1">
    <center>Book An Appointment</center>
</h1>


<div class="diagnosis-form form">
    <form action="diagnosis.php" method="POST">
        <label for="name"> Name:</label>
        <input type="text" placeholder="John Doe" name="name" maxlength="80">
        <br />

        <label for="dateofbirth">Date of Birth :</label>
        <input type="date" placeholder="2020-11-1" name="date" maxlength="80">
        <br />

        <label for="dateofservice"> Appointment Date:</label>
        <input type="date" placeholder="2020-11-1" name="date" maxlength="80">
        <br />


        <br/>
        <br/>

        <label for="patient_problem"> Complaints:</label>
        <textarea rows="4" cols="20" name="patient_problem" placeholder="I have splitting headache..."></textarea>
        <br />
        <br />


        <label for="age"> Age:</label>
        <input type="text" placeholder="20" name="age" maxlength="80">
        <br />
        <label for="height"> Height:</label>
        <input type="text" placeholder="158cm" name="height" maxlength="80">
        <br />
        <label for="weight"> Weight:</label>
        <input type="text" placeholder="48kg" name="weight" maxlength="80">
        <br />

        <label for="appointment_time"> Appointment Time:</label>
        <select name="appointment_time" id="appointment_time">
            <!-- Can we check and make time available or not?? till then -->
            <option value="nineam">09:00 AM</option>
            <option value="nineam">10:00 AM</option>
            <option value="nineam">11:00 AM</option>
            <option value="nineam">12:00 AM</option>
            <option value="nineam">01:00 PM</option>
            <option value="nineam">02:00 PM</option>
            <option value="nineam">03:00 PM</option>
            <option value="nineam">04:00 PM</option>
        </select>

        <br/>
        <br/>

        <label for="diagnosis"> Diagnosis:</label>
        <textarea rows="4" cols="20" name="patient_problem" placeholder="Fever"></textarea>
        <br />
        <br />


        <br/>
        <br/>

        <label for="additional_notes"> Additional Notes:</label>
        <textarea rows="4" cols="20" name="additional_notes" placeholder="Add your additional notes here"></textarea>
        <br />
        <br />

        <button class="button-index-one haha login-button" type="submit" value="Submit">Submit</button>
    </form>
</div>

<?php include './footer.php'; ?>