<?php

require_once("../classes/User.php");

    $states = $user->fetch_states();
    

    $st = "<select class='form-select border-success' name='state'>";
            foreach ($states as $state) {
                $st = $st . "<option value='$state[state_id]'>". $state['state_name'] . "</option>";
            }
    $st = $st . "</select>";

    echo $st;



?>