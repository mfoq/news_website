<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Admin Dashboarad</title>
</head>
<body>
    <div class="container my-5">
    <?php
        if(isset($_GET['empty'])){
            echo '<div class="alert alert-danger mt-2 text-center">Please Fill in the Blanks</div>';
        }
    ?>

    <?php

        if(isset($_GET['success'])){
            echo '<div class="alert alert-success" role="alert">Data Inserted Successfully</div>'; 
        }

    ?>
    <h5 class="card-title text-center bg-info py-3 text-light rounded mb-4 fs-1 text">Add Article</h5>
    <form action="process.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Subject</label>
                <input type="text" class="form-control" placeholder="Enter article subject" name="subject" autocomplete="off">
            </div>

            <div class="mb-3">
                <label class="form-label">Article Image</label>
                <input type="file" class="form-control" name="image" autocomplete="off">
            </div>

            <div class="mb-3">
                <label class="form-label">Article Description</label>
                <input type="text" class="form-control" placeholder="Enter your article description" name="description">
            </div>

            <div class="input-group mb-3">
                <label class="form-label me-4">Article Category</label>
                <select name="type" class="form-select" id="Select">
                    <option value="1">1- Sport</option>
                    <option value="2">2- Agricultural</option>
                    <option value="3">3- Art</option>
                    <option value="3">4- Politics</option>
                    <option value="3">5- health</option>
                    <option value="3">5- Style</option>
                </select> 
                <label class="input-group-text" for="Select">Options</label>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>