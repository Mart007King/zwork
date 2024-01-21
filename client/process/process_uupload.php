<?php
error_reporting(E_ALL);
session_start();
require_once("../classes/Work.php");
require_once("../classes/User.php");

$id = $_SESSION['useronline'];

    
    if ($_POST && isset($_POST["btn_submit"])) {

        if (isset($_FILES["picture"]) && $_FILES["picture"]["error"] == 0) {

            $filename = $_FILES["picture"]["name"];
            $tmp = $_FILES["picture"]["tmp_name"];
            $size = $_FILES["picture"]["size"];
            $type = $_FILES["picture"]["type"];

            if ($size > 3145728) {
                $_SESSION['errormsg'] = "Picture should not be more 3mb";
                exit();
            }

            $allowed = ["image/jpeg", "image/jpg", "image/png"];
            if (!in_array($type,$allowed)) {
                $_SESSION['errormsg'] = "This file type is ot allowed.. png, jpeg, jpg are allowed";
                exit();
            }

            $new_file_name = "zwork_view" . "_" .time() . "_" .uniqid(). "_" . $file_name;

            $destination = "../uploaded/". $new_file_name;

            if (move_uploaded_file($tmp,$destination)) {
               $result = $wk->insert_pic($new_file_name,$id);

               if ($result) {
                header("location:../jobs/dashboard.php");
                exit();
               }
               
               
            }
        }
  
    } else {
        header("location:../set_pro_pic.php");
        exit();
    }

   
?>