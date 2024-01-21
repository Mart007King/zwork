<?php
session_start();
require_once("classes/User.php");
$ad = new User();
$ad->logout_user();
header("location:../site/index.php");

?>