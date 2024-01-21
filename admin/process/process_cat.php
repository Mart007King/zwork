<?php
session_start();
error_reporting(E_ALL);
require_once("../classes/Work.php");
require_once("../classes/utilities.php");
$wk = new Work();


    if ($_POST && isset($_POST["btn_cat"])) {
        $cat_name = sanitizer($_POST["catname"]);

        if (empty($cat_name)) {

            $_SESSION['errors'] = "Please enter a category Name";
            header("location:../addskill.php");
            exit();

        } else {

            $done = $wk->add_cate($cat_name);

            if ($done) {

                $_SESSION['cat_id'] = $done;
                $_SESSION['success'] = "Category Added successfully";
                header("location:../addskill.php");
                exit();

            }else {

                $_SESSION['errors'] = "An error occured";
                header("location:../addskill.php");
                exit();

            }
         

        }

    } else {
        header("location:../addskill.php");
        exit();
    }
    

?>