<?php
 include './header.php';
 include '../dbconfig.php';
 ?>
<!-- Remove this -->
<!-- Reminder: This can be only be available for Admin -->
<h1 class="signup-h1"><center>Doctor's List</center></h1>


<?php
$sql = "SELECT did,d_firstname,d_lastname, age,sex, contact, department from hospitaldb.doctor";
$qsql = mysqli_query($mysqli_connection, $sql);
$all_doctors = mysqli_fetch_all($qsql, MYSQLI_ASSOC);
// print_r($all_doctors);
?>
<!-- Table for List-->
<table>
  <tr>
    <th>S/N</th>
    <th>Doctor's Name</th>
    <th>Age</th>
    <th>Sex</th>
    <th>Department</th>
    <th>Contact</th>
    <th>Update/Delete</th>

  </tr>
  <?php foreach ($all_doctors as $doctor) { ?>
  <tr>
    <td><?php echo $doctor['did'] ?></td>
    <td><?php echo $doctor['d_firstname']." ".$doctor['d_lastname'] ?></td>
    <td><?php echo $doctor['age'] ?></td>
    <td><?php echo $doctor['sex'] ?></td>
    <td><?php echo $doctor['department'] ?></td>
    <td><?php echo $doctor['contact'] ?></td>
    <td><button>Update</button><button>Delete</button></td>
  </tr>

  <?php } ?>
</table>
<button>Add Doctor</button>
<?php include './footer.php'; ?>