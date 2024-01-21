<?php
error_reporting(E_ALL);
require_once("../classes/Work.php");


$cat_id = $_POST['category_id'];


$wk = new Work();
$skill = $wk->get_skilbyid($cat_id);
// echo "<pre>";
// print_r($skill);
// echo "</pre>";


    $sn=1;
    foreach ($skill as $name) {
       
      echo  $skil = "<tr>";
        
        $skil = $skil . "<th scope='row'>". $sn++. "</th>";
        $skil = $skil . "<td>". $name['skill_name'] . "</td>";
        $skil = $skil . "<td>" . "<a href='#' class='btn btn-sm btn-primary'>" . "Edit" . "</a>" . "&nbsp;" . "&nbsp;" . " <a href='#' class='btn btn-sm btn-danger'>" . "Delete" . "</a>" . "</td>";
       echo  $skil . "</tr>";
        
        ?>
    <?php     
    }



?>