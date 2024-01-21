<?php
require_once("../classes/Work.php");


    $cat_id = $_POST['category'];
   $skills =  $wk->get_skilbyid($cat_id);
//    echo "<pre>";
//     print_r($skills);
//     echo "</pre>";


echo $skil = "<p class ='alert alert-warning mb-2'>" . "<i>" . "Please select the type of skill you want for this job" . "</i>" . "</p>";
    foreach ($skills as $all) { 
        $skil = "<div class= ' container'>"; 
        $skil = $skil .  "<div class='row flex-column gap-2'>".  "</div>"; 
            
         $skil = $skil . "<div class='col flex-shrink-1 p-2'>". "<span>". "<input type='checkbox' name='skills[]' value='$all[skill_id]' class='form-check'>" . $all["skill_name"] . "</span>" . "</div>"; 
         echo $skil . "</div>";      
?>
   <?php
   }
   
    
?>