<?php

$con=mysqli_connect('localhost','root','','news');

if(!$con){
    die("Error when Connectiong".mysqli_error($con));
} 