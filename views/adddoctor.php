
 <?php include_once 'header.php'?>
 <?include_once '../dbconfig.php';
     if(isset($_POST['submit'])){
    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];
    $contact = $_POST['contact'];
    $department = $_POST['department'];

    if(!empty($_POST['firstname'])&&!empty($_POST['lastname'])&&!empty($_POST['age'])&&!empty($_POST['sex'])
    &&!empty($_POST['contact'])&&!empty($_POST['department'])){

       
        $query = "insert into form(firstname,lastname,age,sex,contact,department) values('$firstname','$lastname','$age','$contact','$sex','$department')";
        $run = mysqli_query($mysqli_connection,$query) or die(mysqli_error());
        if($run){
            echo "Form submitted successfully";
        }
        else{
            echo"Form not sudmitted";
        }

        else{
            echo"all field required";
        }
 
 
    }
       
 
 
 
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     
     <title></title>
 </head>
 <body>
     <form action ="./views/adddoctor.php"  method="post">
         
         <label>firstname:</label>
         <input type="text" name="firstname"><br>
         <label>lastname:</label>
         <input type="text" name="lastname"><br>
         <label>age:</label>
         <input type="text" name="age"><br>
         <label>sex:</label>
         <input type="text" name="sex"><br>
         <label>contact:</label>
         <input type="text" name="contact"><br>
         <label>department:</label>
         <input type="text" name="department"><br>
         <button type="submit" name="submit">submit</button>
         
     </form>
 </body>
 </html>
<?php include_once 'footer.php'?>

