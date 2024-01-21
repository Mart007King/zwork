<?php
session_start();
require_once("../classes/User.php");

require_once("../classes/utilities.php");



if ($_POST && isset($_POST["btn_sub"])) {

    $email = sanitizer($_POST['email']);
    $pwd = $_POST['pwd'];

    if (empty($email) || empty($pwd)) {

        $_SESSION['errormessage'] = "All fields are required";
        header("location:../site/login.php");
        exit();

    } else {

        $result = $user->login_user($email,$pwd);

        if ($result) {

            $_SESSION["useronline"] = $result['user_id'];
            $user_deets = $user->get_userbyid($_SESSION["useronline"]);

           
            if ($user_deets['user_type'] == "client") {

                header("location:../client/jobs/dashboard.php");
                 exit();

             } else if ($user_deets['user_type'] == "freelancer") {

                 header("location:../free/set_profile.php?name=$fname");
                 exit();

             }      

            // echo "<pre>";
            // print_r($user_type);
            // echo "</pre>";

            // header("location:../dashboard.php");
            // exit();

        } else {
   
            $_SESSION['errormesage'] = "Login details incorrect";
            header("location:../site/login.php");
            exit();
        }

    }
    
} else {

   $_SESSION['errormesage'] = "You need to login";
   header("location:../sign_in.php");
   exit();

}


?>