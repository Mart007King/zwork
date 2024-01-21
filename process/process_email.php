<?php
require_once("../classes/User.php");

    $email = isset($_POST['email'])? $_POST["email"] : "";
  

    $rsp = $user->confirm_email($email);

    if ($rsp) {

       echo "<div class='text-danger'>" . "Sorry, This email has already been assigned to a User" . "</div>";
    }else {
        echo "<div class='text-success'>" . "This email is available". "</div>";
    }

   

?>