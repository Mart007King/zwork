<?php
session_start();
require_once("../classes/utilities.php");
require_once("../classes/Jobs.php");

$idd = $_SESSION['useronline'];


if ($_POST && isset($_POST['btn_sub'])) {

    $jname = sanitizer($_POST['jname']);
    $jdesc = sanitizer($_POST['jdescription']);
    $compex = $_POST['complexity'];
    $type = $_POST['jtype'];
    $category = $_POST['cate'];
    $client_id = $_POST['client_id'];
    
    $duration = sanitizer($_POST['jduration']);
    $payment = $_POST['payment'];

    if (empty($jname) || empty($jdesc || empty($compex) || empty($type) || empty($category) || empty($duration)) || empty($payment)) {

       $_SESSION['errmsg'] = "Please complete the form";
       header("location:../jobs/create_jobs.php");

    } else {
        
        $job = new Jobs();
        $rsp =  $job->insert_job($jname,$jdesc,$compex,$type,$category,$duration,$payment,$idd);
       if ($rsp) {

        $_SESSION['job_id'] = $rsp;
        $_SESSION['success'] = "Job Created Successfully";
        header("location:../jobs/create_jobs.php");

       } else {

        $_SESSION['errmsg'] = "An error occured, Please try again";
        header("location:../jobs/create_jobs.php");

       }   
    }
    
} else {
    $_SESSION['errmsg'] = "Please Create a job";
    header("location:../jobs/create_jobs.php");
}


?>