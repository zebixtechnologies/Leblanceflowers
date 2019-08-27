<?php
/**
 * Created by PhpStorm.
 * User: salman
 * Date: 8/3/2019
 * Time: 11:43 AM
 */
require_once $_SERVER['DOCUMENT_ROOT']."/Shirley/Includes/product_view.php";

$pro_view=new product_view();
$row_alcohol    = $pro_view->gift_alcohol();
$row_chocolate  = $pro_view->gift_chocolate();
$row_toy        = $pro_view->gift_toy();
$row_candle     = $pro_view->gift_candle();
//print_r($row);
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
    <link rel="stylesheet" href="css/gifts.css">

</head>
<body>
<?php require_once "Includes/header.php";  ?>
<div class="container process">
    <div class="row">
        <div class="col-sm-4 mt-3">
            <a href="">
                <img src="assets/home-icon-truck_1.png" style="" alt="delivery">
                <p class=" mt-2">Same Day Delivery Monday - Saturday</p>
            </a>
        </div>
    </div>
</div>
<div class="mb-2 d-none d-sm-block d-sm-none d-md-block"></div>
<div class="container">
<h2>SHOPPING CART</h2>
</div>
<br>
<div class="row">
<div class="container col-md-6 offset-5">
    <h2>GIFTS</h2>
</div>
</div>

<div class="row">
<div class="container col-md-6 offset-5">
    <img src="assets/lotus-flower1.png" alt="" width="46" height="46" style="margin-bottom: 15px;margin-left: 20px">
</div>
</div>
<form id="gift-form" enctype="multipart/form-data"  onsubmit="return false">

<script>
function add_gifts(id, image, price,gType,gname) {

var formData = { g_id : id, g_image : image, g_price : price, g_type : gType, g_name:gname };


$.ajax({
    url: "http://localhost/Shirley/includes/add_gift_to_cart.php",
    method: 'POST',
    data: formData,
    success: function(data) {
        alert("Gift Inserted");
    },
    
})
}
</script>
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <nav>
                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">ALCOHOL</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">CHOCOLATES</a>
                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">TOYS</a>
                    <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">CANDLES</a>
                </div>
            </nav>
            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="container of-con mt-3">

                    <div class="row item-pane py-5">
                        <?php
                        foreach ($row_alcohol as $row) { ?>
                            <div class="col-sm-3 p-c text-center pb-2 border-0">

                            <img width="300" height="300" name="gift-image" src="assets/Product_Images/<?php echo $row['image']; ?>" alt="">
                                    <input type="hidden" name="agift-image" value="<?php echo $row['image']; ?>">
                                    <div class="dropdown-divider"></div>
                                    <p class="lead"><?php echo $row['product_name']; ?></p>
                                    <input type="hidden" name="agift-name" value="<?php echo $row['product_name']; ?>">
                                    <p class="price-box mt-2">$<?php echo $row['price']; ?></p>
                                    <input type="hidden" name="agift-price" value="<?php echo $row['price']; ?>">

                                    <button onclick="add_gifts(<?php echo $row['id']
                                     ?>,<?php echo '\''.$row['image'].'\'';
                                     ?>,<?php echo $row['price']
                                     ?>,'alcohol',<?php echo '\''.$row['product_name'].'\'';
                                     ?>)" class="btn btn-primary btn-xl" id="add_gift"
                                     >Add To Cart</button>
                            </div>
                            <?php } ?>

                           
                    </div>
</div>

                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="container of-con mt-3">

                        <div class="row item-pane py-5">
                            <?php
                            foreach ($row_chocolate as $row) { ?>
                                <div class="col-sm-3 p-c text-center pb-2 border-0">
                                <img width="300" height="300" name="gift-image" src="assets/Product_Images/<?php echo $row['image']; ?>" alt="">
                                    <input type="hidden" name="agift-image" value="<?php echo $row['image']; ?>">
                                    <div class="dropdown-divider"></div>
                                    <p class="lead"><?php echo $row['product_name']; ?></p>
                                    <input type="hidden" name="agift-name" value="<?php echo $row['product_name']; ?>">
                                    <p class="price-box mt-2">$<?php echo $row['price']; ?></p>
                                    <input type="hidden" name="agift-price" value="<?php echo $row['price']; ?>">

                                    <button onclick="add_gifts(<?php echo $row['id']
                                     ?>,<?php echo '\''.$row['image'].'\'';
                                     ?>,<?php echo $row['price']
                                     ?>,'chocolates',<?php echo '\''.$row['product_name'].'\'';
                                     ?>)" class="btn btn-primary btn-xl" id="add_gift"
                                     >Add To Cart</button>
                            </div>
                            <?php } ?>

                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <div class="container of-con mt-3">

                        <div class="row item-pane py-5">

                            <?php   
                            foreach ($row_toy as $row) { ?>
                                <div class="col-sm-3 p-c text-center pb-2 border-0">
                                <img width="300" height="300" name="gift-image" src="assets/Product_Images/<?php echo $row['image']; ?>" alt="">
                                    <input type="hidden" name="agift-image" value="<?php echo $row['image']; ?>">
                                    <div class="dropdown-divider"></div>
                                    <p class="lead"><?php echo $row['product_name']; ?></p>
                                    <input type="hidden" name="agift-name" value="<?php echo $row['product_name']; ?>">
                                    <p class="price-box mt-2">$<?php echo $row['price']; ?></p>
                                    <input type="hidden" name="agift-price" value="<?php echo $row['price']; ?>">

                                    <button onclick="add_gifts(<?php echo $row['id']
                                     ?>,<?php echo '\''.$row['image'].'\'';
                                     ?>,<?php echo $row['price']
                                     ?>,'toys',<?php echo '\''.$row['product_name'].'\'';
                                     ?>)" class="btn btn-primary btn-xl" id="add_gift"
                                     >Add To Cart</button>
                            </div>
                            <?php } ?>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                    <div class="container of-con mt-3">

                        <div class="row item-pane py-5">
                            <?php
                            foreach ($row_candle as $row) { ?>
                                <div class="col-sm-3 p-c text-center pb-2 border-0">
                                <img width="300" height="300" name="gift-image" src="assets/Product_Images/<?php echo $row['image']; ?>" alt="">
                                    <input type="hidden" name="agift-image" value="<?php echo $row['image']; ?>">
                                    <div class="dropdown-divider"></div>
                                    <p class="lead"><?php echo $row['product_name']; ?></p>
                                    <input type="hidden" name="agift-name" value="<?php echo $row['product_name']; ?>">
                                    <p class="price-box mt-2">$<?php echo $row['price']; ?></p>
                                    <input type="hidden" name="agift-price" value="<?php echo $row['price']; ?>">

                                    <button onclick="add_gifts(<?php echo $row['id']
                                     ?>,<?php echo '\''.$row['image'].'\'';
                                     ?>,<?php echo $row['price']
                                     ?>,'candles',<?php echo '\''.$row['product_name'].'\'';
                                     ?>)" class="btn btn-primary btn-xl" id="add_gift"
                                     >Add To Cart</button></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                </form>
            </div>
            <a href="cart_item.php" class="btn btn-primary btn-xl float-right">Continue To CheckOut</a>

        </div>
    </div>
</div>



<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script src="js/gifts.js"></script>

</body>
</html>
