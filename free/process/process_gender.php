<?php
session_start();
require_once("../classes/User.php");

$id = $_SESSION['useronline'];


    if ($_POST && isset($_POST["btn_next"])) {

        if (!isset($_POST['gender'])) {
            $_SESSION['errormsg'] = "You need to select your Gender";
            header("location:../set_profile.php");
            exit();
        } else {
            
            $gender =  $_POST['gender'];

            $saved = $user->insert_gender($gender,$id);

            if ($saved) {
                header("location:../set_pro_number.php");
                exit();
            }
        }
     
    }else {
        header("location:../set_profile.php");
        exit();
    }
?>