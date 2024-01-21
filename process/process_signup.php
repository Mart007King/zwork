<?php
error_reporting(E_ALL);
session_start();
require_once("../classes/User.php");
require_once("../classes/utilities.php");

    if ($_POST && isset($_POST['btnsubmit'])) {

        if (isset($_SESSION['usertype'])) {

            $user_type = $_SESSION['usertype'];
            $fname = sanitizer($_POST['fname']);
            $lname = sanitizer($_POST['lname']);
            $email = sanitizer($_POST['email']);
            $country_id = $_POST['countries'];
            $state_id = $_POST['state'];
            $pwd = $_POST['password'];
            $cpwd = $_POST['conpwd'];

            $_SESSION['country_id'] = $country_id;
            $_SESSION['state_id'] = $state_id;

            $rsp = $user->confirm_email($email);

            // validation
            if ( empty($fname) || empty($lname) || empty($email) || empty($country_id) || empty($state_id) || empty($pwd) || empty($cpwd) ) {
                
                $_SESSION['errormessage'] = "Please complete the form";
                header("location:../site/signup2.php");              

            } 

            if ( $rsp ) {

                $_SESSION['errormessage'] = "Sorry, Email already exist";
                header("location:../site/signup2.php");               

            } 
            
            if ( $pwd > 10 ) {

                $_SESSION['errormessage'] = "Password cannot be more than 10 characters";
                header("location:../site/signup2.php");               

            }
            
            if ( $pwd != $cpwd ) {

                $_SESSION['errormessage'] = "Password and confirm password must match";
                header("location:../site/signup2.php");               

            } else {

                $record = $user->create_account($pwd, $cpwd, $email, $fname,  $lname,  $user_type,$state_id,$country_id);

                if ($record) {

                    $_SESSION['useronline'] = $record;
                    $_SESSION['userfeedback'] = "Your account has been created successfully";
                    if ($user_type == "client") {

                       header("location:../client/set_profile.php?name=$fname");
                        exit();

                    } else if ($user_type == "freelancer") {

                        header("location:../free/set_profile.php?name=$fname");
                        exit();

                    }                   
                }
            }           
        } else {
            $_SESSION['errormessage'] = "Please create an account";
            header("location:../site/signup.php");
            exit();
        }
        
    } else {
        $_SESSION['errormessage'] = "Please create an account";
        header("location:../site/signup.php");
        exit();
    }
    

?>