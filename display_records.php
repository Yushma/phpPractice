<?php
//include 'db.php';

function display_records(){
    global $con;
    $sql = "SELECT * FROM user";
    $res = mysqli_query($con,$sql);
   //$row = mysqli_fetch_array($res);
   //echo "<pre>";
   //print_r($row);
    
    return $res;
   


}

?>