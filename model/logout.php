<?php
session_start();
unset($_SESSION["adminemail"]);
unset($_SESSION["doc_email"]);
unset($_SESSION["patient_number"]);
header("Location:../index.php");
?>
