<?php
     require_once 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <button type="button" class=" my-5 btn btn-primary"><a href="add.php" class=" text-decoration-none text-light"> Add Article</a></button>
        <table class="table table-dark table-striped text-center">
            <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Image</th>
                    <th scope="col">Description</th>
                    <th scope="col">Category_Id</th>
                    <th scope="col">Operations</th>
                    </tr>
            </thead>
            <tbody>
                <?php
                    $query = "SELECT * FROM `articles` ";
                    $result = mysqli_query($con,$query);

                    if($result){

                        foreach($result as $row){
                            $id = $row['id'];
                            $Subject = $row['subject'];
                            $Image = '<img width="100"; height="100"; src="'.$row['image'] .'">';
                            $Description = substr($row['description'],0,125);
                            $Category_id = $row['category_id'];

                            echo '<tr>
                                <th width="5%" scope="row">'.$id.'</th>
                                <td width="20%">'.$Subject.'</td>
                                <td width="20%">'.$Image.'</td>
                                <td  width="30%">'.$Description.'</td>
                                <td width="5%">'.$Category_id.'</td>
                                <td width="30%">
                                    <button class="btn btn-primary">
                                        <a class="text-light text-decoration-none" href="update.php?updateid='.$id.'">Update</a>
                                        </button>
                                    <button class="btn btn-danger">
                                        <a class="text-light text-decoration-none" href="delete.php?deleteid='.$id.'">Delete</a>
                                        </button>
                                 </td>
                             </tr>';

                        }
                    }


                ?>
            </tbody>

        </table>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>