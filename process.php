<?php

    require_once 'connect.php';

    if(isset($_POST['submit'])){
        
        $Subject = mysqli_real_escape_string($con,$_POST['subject']);
        $Image = $_FILES['image'];

        if($Image && $Image['tmp_name']){
            $path = "images/".$Image['name'];
            move_uploaded_file($Image['tmp_name'],$path);
        }
                
        $Description = mysqli_real_escape_string($con,$_POST['description']);
        $Category = $_POST['type'];

        $query = "insert into `articles` (subject,image,description,category_id)
                  values ('$Subject','$path','$Description','$Category')";
        
        if(empty($Subject) || empty($Image) || empty($Description) || empty($Category)){
           header('location:add.php?empty');
        }else {
            $result = mysqli_query($con,$query);
            if($result){
                header('location:adminDashBoard.php');
            }else{
                die(mysqli_error($con));
            }
        }


    }

    // $option = isset($_POST['type']) ? $_POST['type'] : false;
    // if ($option) {
    //     echo htmlentities($_POST['type'], ENT_QUOTES, "UTF-8");
    // } else {
    //     echo "task option is required";
    //     exit; 
    // }


