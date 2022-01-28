<?php 
include './header.php';
include '../dbconfig.php';

if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $department = $_POST['department'];
    $doctor = $_POST['doctor'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $reason = $_POST['patient_problem'];
    $query = "INSERT INTO `appointment`(`payment_amount`,`visit_reason` `date`, `time`) VALUES ('50',$reason,$phone,$date,$time)";
    $result = mysqli_query($con,$query);
    echo "hi";
    if($result){
        echo "<script>alert('Appointment Booked Successfully');</script>";
    }
    else{
        echo "<script>alert('Appointment Booking Failed');</script>";
    }
}
?>


<!-- write your code here -->
<h1 class="signup-h1">
    <center>Book An Appointment</center>
</h1>


<div class="appointment-form form">
    <form action="../model/signup.php" method="POST">
        <label for="firstname"> First Name:</label>
        <input type="text" placeholder="John" name="firstname" maxlength="80">
        <br />
        <label for=""> Last Name:</label>
        <input type="text" placeholder="Doe" name="lastname" maxlength="80">
        <br />
    <?php
        $sql1 = "SELECT * FROM doctor WHERE `d_firstname` = '$firstname' AND `d_lastname` = '$lastname';";
       $result = mysqli_query($mysqli_connection, $sql1);
       if(!$result){
           header("location: ./views/book_appointment.php?error=nodoctorfound");
           exit();
       }

    ?>
        <label for="doctorsName"> Doctor's Name:</label>
        <input type="text" placeholder="Pramila Don" name="doctorsName" maxlength="80">
        <br />
        
        <label for="department"> Department:</label>
        <select name="department" id="department-list">
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
        <!-- We will do this looking form database table-->


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