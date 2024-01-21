<?php
session_start();
require_once("../classes/Work.php");
require_once("../classes/utilities.php");
$wk = new Work();


    if ($_POST) {
        $cat_id = $_POST['cate'];
        $skill_name = sanitizer($_POST['skillname']);

        $result = $wk->insert_skill($skill_name,$cat_id);
        if ($result) {

            $_SESSION['skill_id'] = $result;
            echo "<div class='text-sm alert alert-success'>" . "Skill added successfully" . "</div>";

        }
    }
?>