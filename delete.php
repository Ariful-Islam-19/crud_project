<?php

include 'function.php';   

$delete= new crud();       ////// creating a object 



if($_GET['status']=='delete'){
    $delete->delete($_GET['id']);
   
}

?>