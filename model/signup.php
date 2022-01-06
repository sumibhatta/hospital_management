<?php
include '../dbconfig.php';
if (isset($_POST["register"])) {
  $fname = $_POST["fname"];
  $lastname = $_POST["lastname"];
  $phone = $_POST["phone"];
  $password = $_POST["password"];
  $repassword = $_POST["repassword"];

  require_once 'function.inc.php';

  if (emptyInputSignup($fname , $lastname, $phone, $password, $repassword) !== false) {
    header("location: ../views/signup.php?error=emptyinput");
    exit();
  }
  if (invalidfirstname($fname) !== false) {
    header("location: ../views/signup.php?error=invalidfirstname");
    exit();
  }

  if (invalidlastname($lastname) !== false) {
    header("location: ../views/signup.php?error=invalidlastname");
    exit();
  }
  if (invalidPhone($phone) !== false) {
    header("location: ../views/signup.php?error=invalidphonenumber");
    exit();
  }
  if (passwordmatch($password,$repassword) !== false) {
    header("location: ../views/signup.php?error=passwordsdonotmatch");
    exit();
  }

  if (uidExists($mysqli_connection,$phone) !== false) {
    header("location: ../views/signup.php?error=usernametaken");
    exit();
  }

  createUser($mysqli_connection, $fname,$lastname, $phone, $password);
  $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
  $sql = 'INSERT INTO patient (firstname, lastname, phone_number, password) VALUES ($fname, $lastname,$phone,$password)';
  $result = mysqli_query($mysqli_connection,$sql);
  if ($result){
    header("location: ../views/signup.php?=registered");
    print_r($result);

}else{
  header("location: ../views/signup.php?=error");
  print_r($result);
    
}
}
else {
  header("location: ./views/signup.php");
  exit();
}