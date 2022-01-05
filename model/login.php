<?php
    include_once '../dbconfig.php';
    session_start();

    // login for admin
    if(isset($_POST['loginAdmin'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        if(!empty($email) && !empty($password)){
            $sql = "SELECT * FROM admin WHERE email='$email' LIMIT 1";
            $result = mysqli_query($mysqli_connection,$sql);
            if($result && mysqli_num_rows($result) > 0){
                $user_data = mysqli_fetch_assoc($result);
                if($user_data['password'] === $password){
                    echo 'login sucessful'.'<br>';
                    echo 'hello '.$user_data['email'];
                }
                else{
                    echo 'Incorrect email or password';
                }
            }
        }
        else{
            echo 'Incorrect eamil or password before going in';
        }
        
    }


    // login for doctor
    if(isset($_POST['loginDoc'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        if(!empty($email) && !empty($password)){
            $sql = "SELECT * FROM doctor WHERE email='$email' LIMIT 1";
            $result = mysqli_query($mysqli_connection,$sql);
            if($result && mysqli_num_rows($result) > 0){
                $user_data = mysqli_fetch_assoc($result);
                if($user_data['password'] === $password){
                    echo 'login sucessful'.'<br>';
                    echo 'hello '.$user_data['firstname'];
                }
                else{
                    echo 'Incorrect email or password';
                }
            }
        }
        else{
            echo 'Incorrect eamil or password before going in';
        }
        
    }



    //login for patient

    if(isset($_POST['loginPatient'])){
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        if(!empty($phone) && !empty($password) && is_numeric($phone)){
            $sql = "SELECT * FROM patient WHERE phone_number='$phone' LIMIT 1";
            $result = mysqli_query($mysqli_connection,$sql);
            if($result && mysqli_num_rows($result) > 0){
                $user_data = mysqli_fetch_assoc($result);
                if($user_data['password'] === $password){
                    $_SESSION['username'] = $_POST['phone'];
                    header('location:../views/patient_dash.php');
                }
                else{
                    echo 'Incorrect phone_no or password';
                }
            }
        }
        else{
            echo 'Incorrect phone_no or password before going in';
        }
        
    }




?>