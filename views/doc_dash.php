<?php 
include './headerafterlogin.php';
session_start();

if(!isset($_SESSION['doc_email'])){
    header("location: ../views/doc_login.php");
    exit();
}
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
        <h1>Hello, <?php echo $_SESSION['doc_firstname']; ?>!</h1>
    </div>
    <!-- Left Section -->
    <section class="left-section">

        <!-- Count -->
        <div class="count">
            <div class="countit patient-count">
                <h3>Appointments <?php echo $number_of_patients; ?></h3>
            </div>

            <div class="countit doctor-count">
                <h3>Finished <?php echo $number_of_doctors; ?></h3>
            </div>

            <div class="countit appointment-count">
                <h3>Upcoming <?php echo $number_of_appointments; ?></h3>
            </div>
        </div>z

        <!-- Image here -->
        <div class="image-here">
            <img src="../img/test.png" alt="IMAGE RE-->>> Remove hight width">
        </div>

        <!-- Lists -->
        <div class="lists">
            <div class="countit list-item-bottom">
                <a href="./book_appointment.php">New Patient</a>
            </div>

            <div class="countit list-item-bottom">
                <a href="./patient_list.php">Patient's List</a>
            </div>

            <div class="countit list-item-bottom">
                <a href="./patient_list.php">Follow Up</a>
            </div>
        </div>

    </section>

</div>

<div class="right-row clearfix">
    <?php
    echo 'Today: '.date('Y-m-d');
    ?>

    <!-- Right Section -->
    <section class="right-section">
        <!-- Title -->
        <div class="right-section-title">
            <h1> Upcoming Appointments</h1>
        </div>
        <!-- List of items -->
        <div class="list-right">
            <!-- I don't know what the heck I should do here  -->
            <!-- Now I know shall we make list of blocks -->
            <!-- We will repeat this with php but for now -->
            <ul>
                <li>
                    <div class="countit right-list-items">
                        <h1>
                            One
                        </h1>
                        <p>Here goes the description.</p>
                    </div>
                </li>
                <li>
                    <div class="countit right-list-items">
                        <h1>
                            One
                        </h1>
                        <p>Here goes the description.</p>
                    </div>
                </li>
                <li>
                    <div class="countit right-list-items">
                        <h1>
                            One
                        </h1>
                        <p>Here goes the description.</p>
                    </div>
                </li>
                <li>
                    <div class="countit right-list-items">
                        <h1>
                            One
                        </h1>
                        <p>Here goes the description.</p>
                    </div>
                </li>
            </ul>
        </div>

    </section>
</div>






<?php include './footer.php'; ?>