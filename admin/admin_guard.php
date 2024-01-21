<?php
    if (!isset( $_SESSION['admin_online'])) {
        $_SESSION["errormessage"] = "You need to log in as an admin";
       header("location:sign_in.php");
       exit();
    }


?>