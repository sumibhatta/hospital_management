<?php 
include './headerafterlogin.php';
session_start();

if(!isset($_SESSION['patient_number'])){
    header("location: ../views/patient_login.php");
    exit();
}

?>


<!-- Search -->
<div class="haha-why">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <input type="text" class="form-control" name="search" id="search" placeholder="Search">
            <button type="submit" class="button-index-one btn-search">GO!</button>
        </div>
    </form>
    <!-- Salutation -->
    <div class="salutation">
        <h1>Hello, <?php echo $_SESSION['patient_number']; ?>!</h1>
    </div>
    <div> Your Next Appointment is in:</div>
</div>
<?php include './footer.php'; ?>