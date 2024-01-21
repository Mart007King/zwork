<?php
require_once("../classes/Jobs.php");

$jb = new Jobs();

    $jid = $_POST["jid"];
    $stat = "inactive";
   $status = $jb->update_status($stat,$jid);

    if ($status) {
 
     echo "yes";
                                                                                                                   
    }

   

   

?>