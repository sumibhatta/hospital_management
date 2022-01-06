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
                    $_SESSION['adminemail'] = $user_data['email'];    
                    header("location: ../views/admin_dash.php?error=sucsess");
                    // echo "<script>window.location = '../views/admin_dash.php';</script>";
                    // echo 'login sucessful'.'<br>';
                    // echo 'hello '.$user_data['email'];
                }else{
                    header("location: ../views/admin_login.php?error=invalidpassword");
                    exit();
                }
            }else{
                header("location: ../views/admin_login.php?error=invalidcredintials");
                exit();
            }
        }
        else{
            header("location: ../views/admin_login.php?error=emptyfields");
            exit();
        }
        
    }
    else{
        header("location: ../views/admin_login.php?error=invalidrequest");
        exit();
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
                    // echo 'login sucessful'.'<br>';
                    // echo 'hello '.$user_data['d_firstname'];
                    $_SESSION['firstname'] = $user_data['d_firstname'];
                    echo "<script>window.location = '../views/doc_dash.php';</script>";
                }
                else{
                    header("location: ../views/doc_login.php?error=invalidpassword");
                }
            }else{
                header("location: ../views/doc_login.php?error=invalidcredintials");
            }
        }
        else{
            header("location: ../views/doc_login.php?error=emptyfields");

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
                // if($user_data['password'] === $password){
                if(password_verify($password, $user_data['password'])){
                    $_SESSION['patient_number'] = $user_data['firstname'];
                    header('location:../views/patient_dash.php');
                }
                else{
                    header("location: ../views/patient_login.php?error=invalidpassword");
                }
            }else{
                header("location: ../views/patient  _login.php?error=invalidcredintials");
            }
        }
        else{
            header("location: ../views/patient_login.php?error=emptyfields");
        }
        
    }




?>