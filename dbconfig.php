<?php

$databaseHost = 'localhost'; 
$databaseName = 'hospitaldb';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli_connection = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
if(mysqli_connect_errno()){
    echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
}else{
    echo 'Successfully connected to MySQL: ' . mysqli_get_host_info($mysqli_connection);
}
?>