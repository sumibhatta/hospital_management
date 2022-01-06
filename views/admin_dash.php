<?php
include './header.php';
include '../dbconfig.php';
session_start();

if(!isset($_SESSION['adminemail'])){
    header("location: ../views/admin_login.php");
    exit();
}

//queries
$all_patient = 'SELECT * FROM patient';
$all_doctor = 'SELECT * FROM doctor';
$all_appointments_today = 'SELECT * FROM appointment WHERE date = CURDATE() OR date = "2022-01-02"';
// Remove OR ... after active

//store the results
$result = mysqli_query($mysqli_connection, $all_patient);
$result2 = mysqli_query($mysqli_connection, $all_doctor);
$result3 = mysqli_query($mysqli_connection, $all_appointments_today);

//store the number of rows
$number_of_patients = mysqli_num_rows($result);
$number_of_doctors = mysqli_num_rows($result2);
$number_of_appointments = mysqli_num_rows($result3);
// List of all appointments in array format and store
$all_appointment_list = mysqli_fetch_all($result3, MYSQLI_ASSOC);
// print_r($all_appointment_list);
?>


<!-- Search -->
<div class="left-row clearfix">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <input type="text" class="form-control" name="search" id="search" placeholder="Search">
            <button type="submit" class="button-index-one btn-search">GO!</button>
        </div>
    </form>
    <!-- Salutation -->
    <div class="salutation">
        <!-- Session ToT -->
        <h1>Hello, <?php echo $_SESSION['adminemail']; ?>!</h1>
    </div>
    <!-- Left Section -->
    <section class="left-section">

        <!-- Count -->
        <div class="count">
            <div class="countit patient-count">
                <h3>Patients</h3>
                <br><br>
                <h1><?php echo $number_of_patients; ?></h1>
            </div>

            <div class="countit doctor-count">
                <h3>Doctors</h3>
                <br><br>
                <h1><?php echo $number_of_doctors; ?></h1>
            </div>

            <div class="countit appointment-count">
                <h3>Appointment</h3>
                <br><br>
                <h1><?php echo $number_of_appointments; ?></h1>
            </div>
        </div>

        <!-- Image here -->
        <div class="image-here">
            <img src="./img/test.png" alt="Testimg">
        </div>

        <!-- Lists -->
        <a href="./views/doctors_list.php">
            <div class="lists">
                <div class="countit list-item-bottom">
                    Doctor's List
                </div>
        </a>

        <a href="./views/patient_list.php">
            <div class="countit list-item-bottom">
                Patient's List
            </div>
        </a>

        <a href="./views/all_appointments.php">
            <div class="countit list-item-bottom">
                Appointment List
            </div>
        </a>
</div>

</section>

</div>

<div class="right-row clearfix">
    <?php
    echo 'Today: ' . date('Y-m-d');
    ?>

    <!-- Right Section -->
    <section class="right-section">
        <!-- Title -->
        <div class="right-section-title">
            <h1> Recent Activity</h1>
        </div>
        <!-- List of items -->
        <div class="list-right">
            <ul>
            <?php foreach($all_appointment_list as $appointment){?>
                <li>
                    <div class="countit right-list-items">
                        <h1>
                            <?php echo htmlspecialchars($appointment['visit_reason']) ?>
                        </h1>
                        <p>Appointment No: <?php echo htmlspecialchars($appointment['appointment_no']) ?></p>
                    </div>
                </li>
                <?php } ?>
            </ul>
        </div>

    </section>
</div>






<?php include './footer.php'; ?>