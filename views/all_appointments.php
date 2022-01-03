<?php 
include './header.php';
include '../dbconfig.php';

// Remove this
// Reminder: This can be only be available for Doctor and Admin
// Doctor View --- Shall we select from here?
// Admin View --- Modify/Delete needed or not?

// I need to know what's in admin_login ToT
// if ($_SESSION['role'] != admin)
//  header('location: ../404.php'); ki k garne? 

?>
<h1 class="signup-h1">
  <center>All Appointments</center>
</h1>


<!-- Table for List-->

<?php
// $sql = "SELECT * FROM appointment";
// $qsql = mysqli_query($mysqli_connection, $sql);
// $all_appointments = mysqli_fetch_all($qsql, MYSQLI_ASSOC);
// print_r($all_appointments);

// Appointment ko pid sanga associated name nikalna 
 $sql1 = "SELECT firstname, lastname,appointment_no, d_firstname, d_lastname, department from hospitaldb.patient p INNER JOIN hospitaldb.appointment a on p.pid = a.pid INNER JOIN hospitaldb.doctor d on a.did = d.did";
  $qsql1 = mysqli_query($mysqli_connection, $sql1);
  $all_appointments = mysqli_fetch_all($qsql1, MYSQLI_ASSOC);
  // print_r($all_appointments);
?>
<table>
  <tr>
    <th>S/N</th>
    <th>Patient's Name</th>
    <th>Appointment Time</th>
    <th>Doctor's Name</th>
    <th>Department</th>
  </tr>

  <?php foreach ($all_appointments as $appointment) {?>
    <tr>
    <td> <?php echo $appointment['appointment_no'] ?></td>
    <td><?php echo $appointment['firstname']." ".$appointment['lastname'] ?></td>
    <td>11:30 AM</td>
    <td><?php echo $appointment['d_firstname']." ".$appointment['d_lastname'] ?></td>
    <td><?php echo $appointment['department']?></td>
  </tr>
  <?php } ?>
</table>
<?php include './footer.php'; ?>