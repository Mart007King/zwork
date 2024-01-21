<?php
session_start();
require_once("../classes/User.php");

$id = $_SESSION['useronline'];


    if ($_POST && isset($_POST["btn_next"])) {

        $number = $_POST['number'];

        if (empty($number)) {
            $_SESSION['errormsg'] = "Kindly enter your number";
            header("location:../set_pro_skills.php");
            exit();
        } else {
           
            $saved = $user->insert_number($number,$id);

            if ($saved) {
                header("location:../set_pro_pic.php");
                exit();
            }
        }
     
    }else {
        header("location:../set_profile.php");
        exit();
    }
?>