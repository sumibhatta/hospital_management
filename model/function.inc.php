<?php
include 'dbconfig.php';
function emptyInputSignup($fname , $lastname, $phone, $password, $repassword){
  if (empty($fname) || empty($lastname) || empty($phone) || empty($password) || empty($repassword)) {
    return true;
  }
  else {
    return false;
  }
}

function invalidfirstname($username) {
  if(!preg_match("/^[a-zA-Z0-9]*$/",$username)) {
    return true;
  }
  else {
    return false;
  } 
}

function invalidlastname($username) {
  if(!preg_match("/^[a-zA-Z0-9]*$/",$username)) {
    return true;
  }
  else {
    return false;
  } 
}


function invalidPhone($phone) {
  if(preg_match("/^[0-9]{11}$/", $phone)) {
    return true;
  }else{
    return false;
  }
}


  
function passwordmatch($password, $repassword) {
  if ($password !== $repassword) {
    return true;
  }
  else {
   return false;
  
  }
}

function uidExists($mysqli_connection,$phone) {

  $sql = "SELECT * FROM patient WHERE phone_number = '$phone';";
  $sql = "SELECT * FROM patient WHERE phone_number = ?;";
  $stmt = mysqli_stmt_init($mysqli_connection);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../views/signup.php?error=stmtfailedfailed");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "s", $phone);
  mysqli_stmt_execute($stmt);
  $resultData = mysqli_stmt_get_result($stmt);

  if($row = mysqli_fetch_assoc($resultData)) {
    return $row;
  }
  else{
    $result = false;
    return $result;
  }
}

function createUser($mysqli_connection, $fname, $lastname, $phone, $password) {
  $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
  $sql = "INSERT INTO patient (firstname, lastname, phone_number, password) VALUES ('$fname', '$lastname','$phone','$hashedpassword')";
  $result = mysqli_query($mysqli_connection,$sql);
  if ($result){
    header("location: ../views/signup.php?=registered");

}else{
  header("location: ../views/signup.php?=fuck");
    
}
  $sql = "INSERT INTO patient (firstname, lastname, phone_number, password) VALUES (?,?,?,?)";
  $stmt = mysqli_stmt_init($mysqli_connection);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../views/signup.php?error=stmtfailed2");
    exit();
    }


  $hashedpassword = password_hash($password, PASSWORD_DEFAULT);

  mysqli_stmt_bind_param($stmt, "sssss", $fname, $lastname, $phone, $hashedpassword);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  header("location: ../views/patient_login.php?error=successfullnowlogin");
  exit();
}
?>






  

  
  


