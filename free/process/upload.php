<?php
    
    if ($_POST) {
  
        $filename = $_FILES['dp']['name'];
        $tmp = $_FILES['dp']['tmp_name'];
        $size = $_FILES['dp']['size'];
        $error = $_FILES['dp']['error'];
        $type = $_FILES['dp']["type"];

        if (!$error) {
            $new_file_name = "zwork_view" . "_" .time() . "_" .uniqid(). "_" . $file_name;
            $rt = move_uploaded_file($tmp,"../uploads/$new_file_name");

            if ($rt) {
               $data2return = array("status"=>1,"message"=>$new_file_name);
            } else {
                $data2return = array("status"=>0,"message"=>"Failed");
            }
        } else {
            $data2return = array("status"=>0,"message"=>"Error uploading");
        } 
    } else {
        $data2return = array("status"=>0,"message"=>"Fill the form and try again");
    }

    echo json_encode($data2return);
?>