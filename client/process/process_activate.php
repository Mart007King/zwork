<?php
require_once("../classes/Jobs.php");

    $jb = new Jobs();

    $jbid = $_POST["jid"];
    $stat = "active";
    $status = $jb->update_status($stat,$jbid);

    if ($status) {
 
     echo "done";
                                                                                                                   
    }

   

   

?>