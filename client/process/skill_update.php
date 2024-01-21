<?php

error_reporting(E_ALL);
require_once("../classes/Work.php");

$cat_id = $_POST['category_id'];

$store = $wk->save($cat_id);

echo $store;

?>