<?php

require_once "connect.php";

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $query = "DELETE FROM `articles` WHERE `articles`.`id` = $id";
    $result = mysqli_query($con,$query);

    if($result){
        header("location:adminDashBoard.php");
    }else{
        die(mysqli_error($con));
    }

}