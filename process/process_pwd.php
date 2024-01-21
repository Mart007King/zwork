<?php

$pwd = isset($_POST['pcode'])? $_POST["pcode"] : "";

$len_pwd = strlen($pwd);

if ($len_pwd > 10) {
    echo "<div class='text-danger'>" . "Password cannot be more than 10 characters" . "</div>";
}else{
    echo "<div class='text-success'>" . "Password is strong". "</div>";
}

?>