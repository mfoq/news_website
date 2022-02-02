<?php

require_once 'connect.php';
$query = "SELECT * FROM `articles` ORDER BY id DESC LIMIT 6";

$result = mysqli_query($con , $query);
$row = mysqli_fetch_assoc($result);
$arr=array();
foreach($result as $row){
    array_push($arr,$row);
}
?>


<?php require_once 'header.php'; ?>

<!--News Body-->
<div class="container pt-4 my-5">
        <!-- About -->
            <div class="row">
                <div class="col-lg">
                    <img src="<?php echo $arr[0]['image'];?>" class="img-fluid mb-4 rounded" alt="">
                    <h4><?php echo $arr[0]['subject'];?></h4>
                    <p><?php echo $arr[0]['description'];?></p>
                </div>

                <div class="col-lg">
                    <img src="<?php echo $arr[1]['image'];?>" class="img-fluid mb-4 rounded" alt="">
                    <h4><?php echo $arr[1]['subject'];?></h4>
                    <p><?php echo $arr[1]['description'];?></p>
                </div>

                <div class="col-lg">
                    <h3 class="mb-4">Categories</h3>
                    <div class="list-group">
                            <a href="articles.php?categoryid=1" class="list-group-item list-group-item-action"><strong class="text-danger">#Sports</strong></a>
                            <a href="articles.php?categoryid=2" class="list-group-item list-group-item-action"><strong class="text-danger">#Agricultural</strong></a>
                            <a href="articles.php?categoryid=3" class="list-group-item list-group-item-action"><strong class="text-danger">#Arts</strong></a>
                            <a href="articles.php?categoryid=4" class="list-group-item list-group-item-action"><strong class="text-danger">#Health</strong></a>
                            <a href="articles.php?categoryid=5" class="list-group-item list-group-item-action"><strong class="text-danger">#Politics</strong></a>
                        </div>
                </div>
            </div>

        <div class="row my-5">
            <div class="card bg-light text-white">
                    <img class="img-fluid mb-4 rounded" style="height:360px; width:100%;" src="<?php echo $arr[2]['image'];?>" alt="Card image">

                    <div class="card-img-overlay">
                            <h5 class="card-title"><?php echo $arr[2]['subject'];?></h5>
                            <p class="card-text"><?php echo $arr[2]['description'];?></p>
                            <p class="card-text">Last updated 3 mins ago</p>
                    </div>
            </div>
        </div>
</div>   
<?php require_once 'footer.php'; ?>