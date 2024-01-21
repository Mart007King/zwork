<?php
session_start();
require_once("classes/Admin.php");
$ad = new Admin();
$ad->logout_admin();
header("location:sign_in.php");

?>