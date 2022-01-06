<?php
include './header.php';
include '../dbconfig.php';
?>
<!-- Remove this -->
<!-- Reminder: This can be only be available for Admin and Doctor -->
<!-- For this login ko chaiyo -->
<h1 class="signup-h1">
  <center>Patient List</center>
</h1>

<?php
$sql = "SELECT firstname,lastname, age,sex, phone_number, address, diagnosis from hospitaldb.patient p INNER JOIN hospitaldb.medical_record m on p.pid = m.pid";
$qsql = mysqli_query($mysqli_connection, $sql);
$all_patients = mysqli_fetch_all($qsql, MYSQLI_ASSOC);
// print_r($all_patients);
?>
<!-- Table for List-->
<table>
  <tr>
    <th>S/N</th>
    <th>Patient's Name</th>
    <th>Age</th>
    <th>Sex</th>
    <th>Diagnosis</th>
    <th>Contact</th>
    <th>Address</th>
    <th>Medical Records</th>
    <th>Update/Delete</th>
    <!--This should not be available for Doctor -->

  </tr>
  <tr>
    <?php foreach ($all_patients as $patient) { ?>
      <td><?php echo $patient['pid'] ?></td>
      <td><?php echo $patient['firstname']." ".$patient['lastname'] ?></td>
      <td><?php echo $patient['age'] ?></td>
      <td><?php echo $patient['sex'] ?></td>
      <td><?php echo $patient['diagnosis'] ?></td>
      <td><?php echo $patient['phone_number'] ?></td>
      <td><?php echo $patient['address'] ?></td>
      <td> <a href="#shomwhere">click here</a></td>
      <td><button>Update</button><button>Delete</button></td>
  </tr>
<?php } ?>
</table>

<?php include './footer.php'; ?>