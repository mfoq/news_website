<?php 

    require_once 'connect.php';

    $id=$_GET['categoryid'];

    $query = "SELECT * FROM `articles` WHERE `category_id` = $id";
    
    $result = mysqli_query($con , $query);
    $row = mysqli_fetch_assoc($result);
    $arr=array();
    foreach($result as $row){
        array_push($arr,$row);
    }

?>   

<?php require_once 'header.php' ?>

<!-- Category -->
<div class="container">
    <h1 class="display-3 text-center text-muted my-4">
        <?php
            if($id == 1){echo "Sports";}
            elseif($id == 2){echo "Agricultural";}
            elseif($id == 3){echo "Arts";}
        ?>
    </h1>
            <div class="row">

                <?php
                
                foreach($arr as $article){
                    echo '<div class="col-md-6 col-lg-4">';
                        echo '<div class="card mb-3">';
                            echo '<img src="'.$article['image'].'" class="card-img-top" alt="...">';
                            echo '<div class="card-body">';
                               echo '<h5 class="card-title">'.$article['subject'].'</h5>';
                                echo '<p class="card-text">'.$article['description'].'</p>';
                            echo '</div>';
                        echo '</div>';  
                    echo '</div>';
                }
                ?>

                <!-- <div class="col-md-6 col-lg-4">
                    <div class="card mb-3">
                        <img src="img/vid-2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>  
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card mb-3">
                        <img src="img/vid-3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>  
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card mb-3">
                        <img src="img/vid-4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>  
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card mb-3">
                        <img src="img/vid-5.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>  
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card mb-3">
                        <img src="img/vid-6.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>  
                </div> -->
            </div>
</div>

<?php require_once 'footer.php' ?>