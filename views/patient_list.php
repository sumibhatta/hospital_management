<?php include './header.php'; ?>
<!-- Remove this -->
<!-- Reminder: This can be only be available for Admin and Doctor -->
<h1 class="signup-h1"><center>Patient List</center></h1>


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
    <th>Update/Delete</th> <!--This should not be available for Doctor -->

  </tr>
  <tr>
    <td>1</td>
    <td>Maria Anders</td>
    <td>29</td>
    <td>Female</td>
    <td>Skin</td>
    <td>9860806054</td>
    <td>Kathmandu</td>
    <td> <a href="#shomwhere">click here</a></td>
    <td><button>Update</button><button>Update</button></td>
  </tr>
  <tr>
    <td>2</td>
    <td>Maria Anders</td>
    <td>29</td>
    <td>Female</td>
    <td>Skin</td>
    <td>9860806054</td>
    <td>Berlin</td>
    <td> <a href="#shomwhere">click here</a></td>
    <td><button>Update</button><button>Update</button></td>
  </tr>
</table>

<?php include './footer.php'; ?>