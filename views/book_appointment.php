<?php include './header.php'; ?>


<!-- write your code here -->
<h1 class="signup-h1">
    <center>Book An Appointment</center>
</h1>


<div class="appointment-form form">
    <form action="bookappointment.php" method="POST">
        <label for="name"> Name:</label>
        <input type="text" placeholder="John Doe" name="name" maxlength="80">
        <br />

        <label for="specialization"> Specialization:</label>
        <select name="specialization" id="specialization-list">
            <option value="gyno">Not Sure</option>
            <option value="gyno">OB/GYN</option>
            <option value="allergists">Allergists</option>
            <option value="dermatologists">Dermatologists</option>
            <option value="ophthalmologists">Ophthalmologists</option>
            <option value="cardio">Cardiologists</option>
            <option value="gastro">Gastroenterologists</option>
            <option value="neurologist">Neurologist</option>
            <option value="phycastry">Psychiatrists</option>
            <option value="phycastry">Psychiatrists</option>
            <option value="onco">Oncologist</option>
            <option value="radiologist">Radiologist</option>
            <option value="rheumatologists">Rheumatologists</option>
            <option value="generalSurgery">General Surgeon</option>
        </select>
        <br />

        <label for="doctorsName"> Doctor's Name:</label>
        <input type="text" placeholder="Pramila Don" name="doctorsName" maxlength="80">
        <br />

        <label for="name"> Appointment Date:</label>
        <input type="date" placeholder="2020-11-1" name="date" maxlength="80">
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

        <!-- <label for="email"> Email:</label>
        <input type="email" placeholder="Email" name="email">
        <br /> -->
        <label for="patient_problem"> Problem:</label>
        <textarea rows="4" cols="20" name="patient_problem" placeholder="I have splitting headache..."></textarea>
        <br />
        <br />

        <button class="button-index-one haha login-button" type="submit" value="Submit">Submit</button>
    </form>
</div>

<?php include './footer.php'; ?>