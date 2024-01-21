<?php
error_reporting(E_ALL);
session_start();
require_once("../classes/Admin.php");
require_once("../classes/utilities.php");
$ad = new Admin();

    if ($_POST && isset($_POST["login_btn"])) {

        $email = sanitizer($_POST['email']);
        $pwd = $_POST['password'];

        if (empty($email) || empty($pwd)) {

            $_SESSION['errormessage'] = "All fields are required";
            header("location:../login.php");
            exit();

        } else {

            $result = $ad->login_admin($email,$pwd);

            if ($result) {

                $_SESSION["admin_online"] = $result;
                header("location:../dashboard.php");
                exit();
    
            } else {
       
                $_SESSION['errormesage'] = "Login details incorrect";
                header("location:../sign_in.php");
                exit();
            }

        }
        
    } else {

       $_SESSION['errormesage'] = "You need to login";
       header("location:../sign_in.php");
       exit();

    }
    


?>