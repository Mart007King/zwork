<?php
session_start();
error_reporting(E_ALL);

    if ($_POST && isset($_POST['sign'])) {
        $user_type = $_POST['sign'];
        $_SESSION['usertype'] = $user_type;
        header("location:../site/signup2.php");
        exit();

    } else {
       $_SESSION['errormessage'] = "Please select the type of user you are";
       header("location:../signup.php");
       exit();
    }
    


?>