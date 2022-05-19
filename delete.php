<?php
    require_once('Expired.php');
    include_once('db.php');

    if(isset($_GET['exp_id'])){
        $id = $_POST['exp_id'];
        $query = mysqli_query($con,"DELETE FROM 'expired' ORDER BY `expired`.`exp_id'='$exp_id'");

    }

?>
