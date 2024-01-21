<?php
session_start();
error_reporting(E_ALL);
require_once("../classes/Work.php");
require_once("../classes/utilities.php");

    if ($_POST && isset($_POST["btn_submit"])) {
       
        $category = $_POST['cate'];
        $skill = $_POST['skill'];

       echo  $skill . "all";
    } else {
       
    }
    




?>