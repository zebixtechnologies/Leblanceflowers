<?php
// require_once "product_view.php";
require_once $_SERVER['DOCUMENT_ROOT']."/Shirley/Includes/product_view.php";

$pro_view=new product_view();
$row= $pro_view->pro();


require_once $_SERVER['DOCUMENT_ROOT']."/Shirley/config.php";
$db = new Database();
$con = $db->connect();

$query = "Select * From fresh_flower";
$stm=$con->prepare($query);
$stm->execute();
$result=$stm->fetchAll();

?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Pearsons Florist Australia specialises in flowers, gifts and weddings. Multi award-winning Pearsons School of Floristry Sydney Australia offers a wide range of floristry courses.">
    <meta name="keywords" content="Sydney florist, Sydney flowers send flowers in Australia, flowers, floral arrangements, flowers delivered,
            roses, plants, bonsai, gifts, hampers, gift baskets, fruit baskets, Pearsons Florist, Pearsons, family business,
            flowers delivered, flowers Australia, flowers Sydney, florist Sydney, florist Australia, Christmas hampers, vale
            ntines day, mothers day, florist Bondi, florist Chatswood, florist northern beaches, florist Sydney city, wedding
            flowers, flowers for events, Pearsons School of Floristry, floristry school, floristry courses">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">
    <title>FloristStore</title>
    <link rel="shortcut icon" href="assets/lotus-flower1.png" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href="css/fonts/Montserrat/Montserrat-Regular.ttf" type="application/x-font-ttf" rel="stylesheet">
    <link href="css/fonts/fontawesome/css/all.css" type="text/css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <style>
        .btn-xl {
            padding: 5px 35px;
            font-size: 20px;
            border-radius: 10px;
        }

        .card1 {
            width: 300px;
            height: 300px;
            position: relative;
            display: inline-block;
            margin: 50px;
        }
        .card1 .img-top {
            display: none;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 99;
        }
        .card1:hover .img-top {
            display: inline;
        }
    </style>
</head>
<body>
<?php
require_once "Includes/header.php";
?>
<div class="container process">
    <div class="row">
        <div class="col-sm-4 mt-3 offset-2">
            <a href="">
                <img src="assets/home-icon-truck_1.png" style="padding: 0px;margin: 0px" alt="delivery">
                <p class=" mt-2">Same Day Delivery Monday - Saturday</p>
            </a>
        </div>
        <div class="col-sm-4 mt-3 offset-2">
            <a href="">
                <img src="phone_image.jpeg" style="padding: 0px;margin: 0px" alt="delivery">
                <a style="opacity: 0.6; color: blue;font-size: 18px" href="#">(02) 98086 500</a>

            </a>
        </div>
        <!--<div class="col-sm-4 d-none d-sm-block d-sm-none d-md-block">-->
        <!--    <a href="">-->
        <!--        <img src="assets/home-icon-shop_1.png" alt="shop flowers">-->
        <!--        <p class="mt-3 mt-md-0">Trust the FloristStore Nationwide Stores</p>-->
        <!--    </a>-->
        <!--</div>-->
        <!--<div class="col-sm-4 d-none d-sm-block d-sm-none d-md-block">-->
        <!--    <a href="">-->
        <!--        <img src="assets/Lets-Work-Together2.png" alt="join us">-->
        <!--        <p class="mt-3 mt-md-0">Join us to have a better experience</p>-->
        <!--    </a>-->
        <!--</div>-->
    </div>
</div>
<div class="mb-2 d-none d-sm-block d-sm-none d-md-block"></div>

<div class="container bg-img">
    <div class="row justify-content-center">
        <div class="col-md-6 my-3 justify-content-center">
            <p class="lead"><img class="img" src="assets/Picture1.png" alt=""></p>
            <p class="lead">Same Day Delivery</p>
            <p class="lead">ORDER BY 1PM MON - FRI AND 11AM SATURDAY</p>
            <p class="lead"><a class="btn btn-outline-light px-5 mx-auto my-3" href="">What's New</a></p>
        </div>
    </div>
</div>
<div class="container c-f-bg mt-3">
    <div class="row">
        <div class="col-sm-3">
            <h4 class="text-center" style="margin-top: 15px;">Quick Find Flowers</h4>
        </div>
        <div class="row justify-content-center">
            <div class="form-inline">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">What's the occasion?</label>
                        <select class="form-control " id="exampleFormControlSelect1" style="width: 80%;">
                            <option>All</option>
                            <option>Birthday</option>
                            <option>Condolence</option>
                            <option>Get Well</option>
                            <option>Romance</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">What's your budget?</label>
                        <select class="form-control " id="exampleFormControlSelect1" style="width: 80%;">
                            <option>All</option>
                            <option>Below $150</option>
                            <option>$200-$5000</option>
                            <option>$500-$1000</option>
                            <option>Above $500</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <a href="" class="btn btn-secondary" style="padding-right: 35px; padding-left: 35px;">Find Flowers Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container of-con mt-3">
    <h3 class="h3 mt-5">our favorites</h3>
    <div class="row item-pane py-5">
        <?php
        foreach ($row as $item){
            ?>

            <div class="col-sm-4 p-c text-center pb-2 border-0">
                <div class="star-badge float-right">
                    <h6>50% OFF</h6>


                </div>
                <div class="card1 border-0" style="padding: 0px;margin: 0px">
                    <img width="300" height="300" src="assets/Product_Images/<?php echo $item['product_image'];?>" alt="">
                    <img src="assets/Product_Images/<?php echo $item['front_img'];?>" width="300" height="300" class="img-top" alt="">

                </div>
                <div class="dropdown-divider"></div>
                <p class="lead"><?php echo $item['product_name'];?></p>
                <b> <p class="price-box mt-2">$<?php echo number_format($item['product_price'],2);?> AUD</b></p>
                <a class="btn btn-dark btn-xl" href="view_item.php?id=<?php echo $item['product_id']?>&price=<?php echo $item['product_price'];?>&name=<?php echo $item['product_name'];?>">View</a>
            </div>
        <?php } ?>
        <!--        <div class="col-sm-4 p-c text-center pb-2 border-0">-->
        <!--            <div class="star-badge float-right">-->
        <!--                <h6>50% OFF</h6>-->
        <!--            </div>-->
        <!--            <img src="assets/images (1).jpg" alt="">-->
        <!--            <div class="dropdown-divider"></div>-->
        <!--            <p class="lead">MOET AND FLOWERS</p>-->
        <!--            <p class="price-box mt-2">$490.00</p>-->
        <!--            <a class="btn btn-outline-secondary btn-xl" href="">View</a>-->
        <!--        </div>-->

    </div>
    <!--<div class="row justify-content-center">-->
    <!--<a class="btn btn-outline-secondary my-2 p-2 text-center">see more</a>-->
    <!--</div>-->
</div>
<?php
foreach ($result as $row) {

    ?>
<div class="container my-2">
    <div class="row justify-content-center bg-pane-1">
        <div class="col-md-12 my-3 text-center">
            <p class="lead"><img class="img" src="assets/Picture1.png" alt=""></p>
            <p class="lead"><?php echo $row['banner1_title'] ?></p>
            <p class="lead"><?php echo $row['banner1_title_2'] ?></p>
            <p class="lead"><a class="btn btn-outline-light px-5 mx-auto my-3" href="">LEARN MORE</a></p>
        </div>
    </div>
</div>
    <?php
    $banner_1 = './assets/Product_Images/'.$row['banner1_image'];
    ?>
<div class="container my-2">
    <div class="row justify-content-center tiles">
        <div class="col-md tile-1-temp my-1 mr-1 text-center pt-5">
            <p class="lead"><?php echo $row['banner2_title'] ?></p>
            <p class="lead"><?php echo $row['banner2_title_2']     ?></p>
            <p class="lead"><a class="btn btn-outline-light px-5 mx-auto my-3" href="">ORDER NOW</a></p>
        </div>
        <?php
        $banner_2 = './assets/Product_Images/'.$row['banner2_image'];
        ?>

        <div class="col-md tile-2 my-1 mx-2 text-center pt-5">
            <p class="lead"><?php echo $row['banner3_title'] ?></p>
            <p class="lead"><?php echo $row['banner3_title_2'] ?></p>
            <p class="lead"><a class="btn btn-outline-light px-5 mx-auto my-3" href="">ORDER NOW</a></p>
        </div>
        <?php
        $banner_3 = './assets/Product_Images/'.$row['banner3_image'];
        ?>
        <div class="col-md tile-3 my-1 ml-1 text-center pt-5">
            <p class="lead head-a"><?php echo $row['banner4_title'] ?></p>
            <p class="lead head-b"><?php echo $row['banner4_title_2'] ?></p>
            <p class="lead"><a class="btn btn-outline-light px-5 mx-auto my-3" href="">ORDER NOW</a></p>
        </div>
        <?php
        $banner_4 = './assets/Product_Images/'.$row['banner4_image'];
        ?>
    </div>
</div>

    <div class="container g-pasne mt-2 mb-4">
        <div class="row justify-content-center bg-pane-2a">
            <div class="col-md-6 bg-pane-2b"></div>
            <div class="col-md-6 my-3 text-center p-3">
                <p class="lead"><img class="img" src="assets/Picture1.png" alt=""></p>
                <p class="lead head-a"><?php echo $row['top_title']  ?></p>
                <p class="lead head-b"><?php echo $row['title']  ?></p>
                <div class="lead para">
                    <?php echo $row['des'];  ?>
                </div>
            </div>
        </div>
    </div>
    <?php
    $url = './assets/Product_Images/'.$row['img'];
    ?>
    <style>
        .bg-pane-1 {
            background-image: url('<?php echo $banner_1 ?>');
            background-size: cover;
        }
        .tile-1-temp {
            background-image: url('<?php echo $banner_2 ?>');
            background-size: cover;
        }
        .tile-2 {
            background-image: url('<?php echo $banner_3 ?>');
            background-size: cover;
        }
        .tile-3 {
            background-image: url('<?php echo $banner_4 ?>');
            background-size: cover;
        }
        .bg-pane-2b {
            /*height: 369.62px;*/
            /*width: 568.89px;*/
            background-image: url('<?php echo $url ?>');
            background-size: cover;
        }
    </style>
    <?php
}
?>

<?php
require_once "Includes/footer.php";
?>

<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>