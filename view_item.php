<?php

$productName=$_GET['name'];
$productPrice=$_GET['price'];
$productId=$_GET['id'];

//$productId=1;


require_once $_SERVER['DOCUMENT_ROOT']."/Shirley/includes/product_view.php";
require_once $_SERVER['DOCUMENT_ROOT']."/Shirley/includes/cart.php";

$obj=new product_view();

$obj_c=new cart();

$productDetails=$obj->productDetails($productId);


foreach ($productDetails as $pro_detail){


    $product=$pro_detail;


}


?>

    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
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
        <link rel="shortcut icon" href="assets/lotus-flower.png" type="image/x-icon">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/styles.css">
        <link href="css/fonts/Montserrat/Montserrat-Regular.ttf" type="application/x-font-ttf" rel="stylesheet">
        <link href="css/fonts/fontawesome/css/all.css" type="text/css" rel="stylesheet">
        <script src="js/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <style type="text/css">
            .price :hover{

                text-decoration: underline;
            }
            .icon-image{
                height: 50px;
                width: 50px;
            }
        </style>

    </head>
    <body>


    <script src="https://use.fontawesome.com/c560c025cf.js"></script>

    <?php
    require_once "Includes/header.php";
    ?>

    <form method="post">

        <div class="container" style="padding-top:30px;">
            <div class="row">
                <div class="col-md-6">

                </div>
                <div class="col-md-6">

                    <h1 style="font-family: 'Open Sans', sans-serif;text-decoration: none;"><?php echo $product['product_name']; ?></h1>
                    <p  style="font-family: 'Open Sans', sans-serif;">White / Pink</p>
                </div>

            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-12">
                        <div class="tab-content">
                            <div id="home" class="container tab-pane active"><br>
                                <img src="assets/Product_Images/<?php echo $product['product_image']; ?>" class="img-fluid" />
                            </div>
                            <div id="menu2" class="container tab-pane fade"><br>
                                <img src="assets/Product_Images/<?php echo $product['image1']; ?>" class="img-fluid" />
                            </div>
                            <div id="menu3" class="container tab-pane fade"><br>
                                <img src="assets/Product_Images/<?php echo $product['image2']; ?>" class="img-fluid" />
                            </div>
                            <div id="menu4" class="container tab-pane fade"><br>
                                <img src="assets/Product_Images/<?php echo $product['image3']; ?>" class="img-fluid" />
                            </div>

                            <div id="menu5" class="container tab-pane fade"><br>
                                <img src="assets/Product_Images/<?php echo $product['image4']; ?>" class="img-fluid" />
                            </div>

                            <div id="menu6" class="container tab-pane fade"><br>
                                <img src="assets/Product_Images/<?php echo $product['image5']; ?>" class="img-fluid" />
                            </div>

                            <div id="menu7" class="container tab-pane fade"><br>
                                <img src="assets/Product_Images/<?php echo $product['image6']; ?>" class="img-fluid" />
                            </div>

                            <div id="menu8" class="container tab-pane fade"><br>
                                <img src="assets/Product_Images/<?php echo $product['image7']; ?>" class="img-fluid" />
                            </div>

                            <div id="menu9" class="container tab-pane fade"><br>
                                <img src="assets/Product_Images/<?php echo $product['image1']; ?>" class="img-fluid" />
                            </div>

                            <div id="menu3" class="container tab-pane fade"><br>
                                <img src="assets/Product_Images/<?php echo $product['image1']; ?>" class="img-fluid" />
                            </div>

                            <div id="menu3" class="container tab-pane fade"><br>
                                <img src="assets/Product_Images/<?php echo $product['image1']; ?>" class="img-fluid" />
                            </div>

                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="nav " role="tablist">
                                <li class="nav-item" style="width: 33%;font-family: 'Open Sans', sans-serif;font-weight: bold;">
                                    <a class="nav-link active" data-toggle="tab" href="#home1">About</a>
                                </li>
                                <!--                        <li class="nav-item" style="width: 33%;font-family: 'Open Sans', sans-serif;font-weight: bold;">-->
                                <!--                            <a class="nav-link" data-toggle="tab" href="#menu12">Reviews</a>-->
                                <!--                        </li>-->
                                <!--                        <li class="nav-item" style="width: 33%;font-family: 'Open Sans', sans-serif;font-weight: bold;">-->
                                <!--                            <a class="nav-link" data-toggle="tab" href="#menu22">News</a>-->
                                <!--                        </li>-->
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="tab-content">
                            <div id="home1" class="container tab-pane active"><br>

                                <h4 style="font-family: 'Open Sans', sans-serif;"> <?php echo $product['product_name'] ?></h4>
                                <br>
                                <?php echo $product['product_description']?>
                                <!--                        The world’s finest long-stemmed Ecuadorian roses, hand tied by one of our experienced florists in signature OnlyRoses wrapping.-->
                                <!---->
                                <!--                        Choose from a dozen Classic Roses or up to two hundred in a beautiful arranged bouquet.-->
                                <!---->
                                <!--                        Available in all the inspiring varieties of our Classic Roses, including mix.-->
                                <!---->
                                <!--                        <h4 style="font-family: 'Open Sans', sans-serif;">Gift-Wrapped Roses</h4>-->
                                <!--                        Ideal as a gift, our ClassicRoses Stems are wrapped in exclusive OnlyRoses wrapping and placed in a special water pack so they will retain their beauty and freshness for up to 48 hours; plenty of time to place them in a vase of fresh water. Please note this water pack will not be visible from the outside.-->
                                <!--                        <br>-->
                                <!--                        Available with a personalised message. Your message will be hand-written on one of our luxurious black cards (A7 format). The message will be held in a black, sealed envelope which will bear the recipient's details. This will be attached to the wrapping for the recipient.-->
                            </div>
                            <div id="menu12" class="container tab-pane fade"><br>

                            </div>
                            <div id="menu22" class="container tab-pane fade"><br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <b><p style="font-family: 'Open Sans', sans-serif;">Mother's Day</p></b>

                                        <p>Mothers Day Roses from OnlyRoses, learn more about the history of Mothers Day and why we choose to send gorgeous roses to say thank you to our Mums</p>

                                        <p style="float: left;">3rd Apr 2019</p>&nbsp;&nbsp;<a href="" >Read More</a>
                                        <br>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6" style="text-transform: uppercase;font-family: 'Open Sans', sans-serif;"><b>Change Colour</b></div>
                        <div class="col-md-6"><a  onclick="expand()"  style="float: right;">See all colours <i class="fa fa-angle-down"></i></a></div>
                    </div>
                    <div class="col-md-12">
                        <ul class="nav nav-pills" role="tablist">
                            <li id="nav4" class="nav-item nav4" style="width: 15%;">
                                <a  data-toggle="pill" href="#home">
                                    <div class="row">
                                        <div class="col-md-2" id="<?php echo $product['product_image']?>">
                                            <img onclick="getColor()"  src="assets/Product_Images/<?php echo $product['product_image']?>"
                                                 class="icon-image" />
                                        </div>
                                        <div class="col-md-10 texthide" style="line-height: 50px;">
                                            New
                                        </div>

                                    </div>
                                </a>
                            </li>
                            <li id="nav4" class="nav-item nav4" style="width: 15%;">
                                <a  data-toggle="pill" href="#menu2" >
                                    <div class="row">
                                        <div class="col-md-2" id="<?php echo $product['image1']?>">
                                            <img onclick="getColor1()" src="assets/Product_Images/<?php echo $product['image1']?>" class="icon-image" />
                                        </div>
                                        <div class="col-md-10 texthide" style="line-height: 50px;">
                                            New
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li id="nav4" class="nav-item nav4" style="width: 15%;">
                                <a  data-toggle="pill" href="#menu3">
                                    <div class="row">
                                        <div class="col-md-2" id="<?php echo $product['image2']?>">
                                            <img onclick="getColor2()" src="assets/Product_Images/<?php echo $product['image2']?>" class="icon-image" />
                                        </div>
                                        <div class="col-md-10 texthide" style="line-height: 50px;">
                                            New
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li id="nav4" class="nav-item nav4" style="width: 15%;" >
                                <a  data-toggle="pill" href="#menu4">
                                    <div class="row">
                                        <div class="col-md-2" id="<?php echo $product['image3']?>">
                                            <img onclick="getColor3()" src="assets/Product_Images/<?php echo $product['image3']?>" class="icon-image" />
                                        </div>
                                        <div class="col-md-10 texthide" style="line-height: 50px;">
                                            New
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li id="nav4" class="nav-item nav4" style="width: 15%;">
                                <a  data-toggle="pill" href="#menu5">
                                    <div class="row">
                                        <div class="col-md-2" id="<?php echo $product['image4']?>">
                                            <img onclick="getColor4()" src="assets/Product_Images/<?php echo $product['image4']?>" class="icon-image" />
                                        </div>
                                        <div class="col-md-10 texthide" style="line-height: 50px;">
                                            New
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li id="nav4" class="nav-item nav4" style="width: 15%;">
                                <a  data-toggle="pill" href="#menu6">
                                    <div class="row">
                                        <div class="col-md-2" id="<?php echo $product['image5']?>">
                                            <img onclick="getColor5()" src="assets/Product_Images/<?php echo $product['image5']?>" class="icon-image" />
                                        </div>
                                        <div class="col-md-10 texthide" style="line-height: 50px;">
                                            New
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-12" id="hidden" style="display: none;">
                        <ul  class="nav nav-pills" role="tablist"  >
                            <li id="nav4" class="nav-item nav4" style="width: 15%;">
                                <a  data-toggle="pill" href="#menu7">
                                    <div class="row">
                                        <div class="col-md-2" id="<?php echo $product['image6']?>">
                                            <img onclick="getColor6()" src="assets/Product_Images/<?php echo $product['image6']?>" class="icon-image" />
                                        </div>
                                        <div class="col-md-10 texthide" style="line-height: 50px;">
                                            New
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li id="nav4" class="nav-item nav4" style="width: 15%;">
                                <a  data-toggle="pill" href="#menu8">
                                    <div class="row">
                                        <div class="col-md-2" id="<?php echo $product['image7']?>">
                                            <img onclick="getColor7()" src=" assets/Product_Images/<?php echo $product['image7']?>" class="icon-image" />
                                        </div>
                                        <div class="col-md-10 texthide" style="line-height: 50px;">
                                            New
                                        </div>
                                    </div>
                                    <script>
                                        function getColor() {
                                            var x=document.getElementById("<?php echo $product['product_image']?>").id;
                                            document.cookie = "color="+x;

//           alert(x);
//                    return x;
                                        }
                                        function getColor1() {
                                            var x=document.getElementById("<?php echo $product['image1']?>").id;
//                                    document.cookie = "color="+x;
//                                    document.cookie = "color="+"/color/"+x+"/"+"quantity/coook/cook";
                                            document.cookie = "color="+x;

                                            //                                    alert(x);
                                        }function getColor2() {
                                            var x=document.getElementById("<?php echo $product['image2']?>").id;
//                                    document.cookie = "color="+x;
//                                    document.cookie = "color="+"/color/"+x+"/"+"quantity/coook/cook";
                                            document.cookie = "color="+x;

                                            //                                    alert(x);
                                        }function getColor3() {
                                            var x=document.getElementById("<?php echo $product['image3']?>").id;
//                                    document.cookie = "color="+x;
//                                    document.cookie = "color="+"/color/"+x+"/"+"quantity/coook/cook";
                                            document.cookie = "color="+x;

                                            //                                    alert(x);
                                        }function getColor4() {
                                            var x=document.getElementById("<?php echo $product['image4']?>").id;
//                                    document.cookie = "color="+x;
//                                    document.cookie = "color="+"/color/"+x+"/"+"quantity/coook/cook";
                                            document.cookie = "color="+x;

                                            //                                    alert(x);
                                        }function getColor5() {
                                            var x=document.getElementById("<?php echo $product['image5']?>").id;
//                                    document.cookie = "color="+x;
//                                    document.cookie = "color="+"/color/"+x+"/"+"quantity/coook/cook";

                                            //                                    alert(x);
                                        }function getColor6() {
                                            var x=document.getElementById("<?php echo $product['image6']?>").id;
//                                    document.cookie = "color="+x;
//                                    document.cookie = "color="+"/color/"+x+"/"+"quantity/coook/cook";
                                            document.cookie = "color="+x;

                                            //                                    alert(x);
                                        }
                                        function getColor7() {
                                            var x=document.getElementById("<?php echo $product['image7']?>").id;
//                                    document.cookie = "color="+x;
//                                    document.cookie = "color="+"/color/"+x+"/"+"quantity/coook/cook";
                                            document.cookie = "color="+x;

                                            //                                    alert(x);
                                        }
                                    </script>
                                </a>
                            </li>
                            <?php

                            ?>

                        </ul>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6" style="text-transform: uppercase;font-family: 'Open Sans', sans-serif;"><b>Size</b></div>
                        <div class="col-md-6"><a  onclick="expand2()"  style="float: right;">See all sizes selector <i class="fa fa-angle-down"></i></a></div>
                    </div>
                    <br>
                    <div class="price_section" style="height: 140px;  overflow:auto;overflow-x: hidden;">
                        <a class="price" onclick="price()"  >
                            <input type="hidden" id="price" value="<?php echo $product['pro_size1_price'];?>">
                            <div class="row">

                                <div class="col-md-6" id="pro_size1">
                                    <?php echo $product['pro_size1'];?>
                                </div>
                                <div class="col-md-6 pricehide" >
                                    <p style="float: right;"><b><?php echo $product['pro_size1_price'];?></b></p>
                                </div>

                            </div>
                        </a>
                        <a class="price" onclick="price1()"  >
                            <input type="hidden" id="price1" name="price1" value="<?php echo $product['pro_size2_price'];?>">
                            <div class="row">

                                <div class="col-md-6" id="pro_size2">
                                    <?php echo $product['pro_size2'];?>
                                </div>
                                <div class="col-md-6 pricehide" >
                                    <p style="float: right;"><b><?php echo $product['pro_size2_price'];?></b></p>
                                </div>

                            </div>
                        </a>
                        <a class="price" onclick="price2()"  >
                            <input type="hidden" id="price2" name="price2" value="<?php echo $product['pro_size3_price'];?>">
                            <div class="row">

                                <div class="col-md-6" id="pro_size3">
                                    <?php echo $product['pro_size3'];?>
                                </div>
                                <div class="col-md-6 pricehide" >
                                    <p style="float: right;"><b><?php echo $product['pro_size3_price'];?></b></p>
                                </div>

                            </div>
                        </a>
                        <a class="price" onclick="price3()"  >
                            <input type="hidden" id="price3" name="=price3" value="<?php echo $product['pro_size4_price'];?>">
                            <div class="row">

                                <div class="col-md-6" id="pro_size4">
                                    <?php echo $product['pro_size4'];?>
                                </div>
                                <div class="col-md-6 pricehide" >
                                    <p style="float: right;"><b><?php echo $product['pro_size4_price'];?></b></p>
                                </div>

                            </div>
                        </a>
                        <div id="hidden1" style="display: none;">
                            <a class="price" onclick="price4()"   >
                                <input type="hidden" id="price4" name="price4" value="<?php echo $product['pro_size5_price'];?>">
                                <div class="row">

                                    <div class="col-md-6" id="pro_size5">
                                        <?php echo $product['pro_size5'];?>
                                    </div>
                                    <div class="col-md-6 pricehide" >
                                        <p style="float: right;"><b><?php echo $product['pro_size5_price'];?></b></p>
                                    </div>

                                </div>
                            </a>
                            <a class="price" onclick="price()"  >
                                <input type="hidden" id="price6" name="price6" value="<?php echo $product['pro_size6_price'];?>">
                                <div class="row">

                                    <div class="col-md-6" id="pro_size6">
                                        <?php echo $product['pro_size6'];?>
                                    </div>
                                    <div class="col-md-6 pricehide" >
                                        <p style="float: right;"><b><?php echo $product['pro_size6_price'];?></b></p>
                                    </div>

                                </div>
                            </a>

                        </div>

                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6" style="text-transform: uppercase;font-family: 'Open Sans', sans-serif;"><b>Add a vase</b></div>

                    </div>
                    <div class="row" style="padding: 20px;">
                        <a onclick="vase_remove()" class="price">
                            <input type="hidden" value="0" id="vase_remove">
                            <div  style="float:left;width:60px;border-left:1px solid black;border-top:1px solid black;border-right:1px solid black;height: 60px;">
                                <center>NO <br>VASE</center>
                            </div>
                        </a>
                        <a onclick="vase()" >
                            <div  style="float:left;width:60px;border-top:1px solid black;border-right:1px solid black;height: 60px;">
                                <input type="hidden" value="125" id="vase">
                                <center><img src="vase.png" /></center>
                            </div>
                        </a>

                    </div>
                    <br>
                    <div class="row" style="display: none">
                        <div class="col-md-6" style="text-transform: uppercase;font-family: 'Open Sans', sans-serif;"><b>Add a personal message</b></div>

                    </div>
                    <div class="row" style="display: none">
                        <div class="col-md-12">
                            <textarea class="form-control" name="message" rows="1"></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-2">
                            <h4>Total</h4>
                        </div>
                        <div class="col-md-5">
                            <input type="hidden"  name="totals" id="totals">
                            <h4 style="font-family: 'Open Sans', sans-serif;" id="total" ></h4>
                        </div>
                    </div>
                    <br>
                    <script>


                        function tot() {
                            var total= document.getElementById("total").innerHTML;
                            var thenum = total.replace( /^\D+/g, '');
                            thenum=parseInt(thenum);

                            document.getElementById("totals").value=thenum;

                        }

                    </script>
                    <!--
                                <div class="row">
        <!--                            <div class="col-md-6" style="margin-top: 10px;">-->
                    <input type="submit" name="submit" onclick="tot()" value="Add to Cart" class="btn btn-lg btn-info" style="width: 100%;height:50px;color: #fff;-->
                -webkit-box-shadow: 0 4px 8px 0 rgba(0,0,0,.3);
                -ms-box-shadow: 0 4px 8px 0 rgba(0,0,0,.3);
                -o-box-shadow: 0 4px 8px 0 rgba(0,0,0,.3);
                -moz-box-shadow: 0 4px 8px 0 rgba(0,0,0,.3);
                box-shadow: 0 4px 8px 0 rgba(0,0,0,.3);
                background: linear-gradient(#575757,#1E1E1E);
                border-radius: 4px;">
                    <!--                        <i class="fas fa-shopping-cart" ></i>-->
                    <!--                        &nbsp;Add to Cart-->
                    </input>
                </div>
                <!--                <div class="col-md-3" style="margin-top: 10px;">-->
                <!--                    <button clss="btn btn-lg btn-info" style="width: 100%;height:50px;    -webkit-box-shadow: 0 4px 8px 0 rgba(0,0,0,.3);-->
                <!--    -ms-box-shadow: 0 4px 8px 0 rgba(0,0,0,.3);-->
                <!--    -o-box-shadow: 0 4px 8px 0 rgba(0,0,0,.3);-->
                <!--    -moz-box-shadow: 0 4px 8px 0 rgba(0,0,0,.3);-->
                <!--    box-shadow: 0 4px 8px 0 rgba(0,0,0,.3);-->
                <!---->
                <!--    border-radius: 4px;color:#A9848B;"><i class="fas fa-heart"></i> &nbsp;  Whishlist</button>-->
                <!--                </div>-->
                <!--                <div class="col-md-3" style="margin-top: 10px;">-->
                <!--                    <button clss="btn btn-lg btn-info" style="width: 100%;height:50px;   -webkit-box-shadow: 0 4px 8px 0 rgba(0,0,0,.3);-->
                <!--    -ms-box-shadow: 0 4px 8px 0 rgba(0,0,0,.3);-->
                <!--    -o-box-shadow: 0 4px 8px 0 rgba(0,0,0,.3);-->
                <!--    -moz-box-shadow: 0 4px 8px 0 rgba(0,0,0,.3);-->
                <!--    box-shadow: 0 4px 8px 0 rgba(0,0,0,.3);-->
                <!---->
                <!--    border-radius: 4px;color:#A9848B;"><i class="fas fa-share"></i> &nbsp;  Share</button>-->
                <!--                </div>-->
            </div>

        </div>
        </div>


        </div>
        <input type="hidden" name="" id="current">
    </form>

    <br>
    <script type="text/javascript">
        function expand(){
            var div = document.getElementById("hidden");

            if( hidden.style.display == "none")
            {
                hidden.style.display = "block";


                $('.nav4').each(function(){
                    $(this).width("50%");
                });
                $('.texthide').show();
            }
            else{
                hidden.style.display = "none";


                $('.nav4').each(function(){
                    $(this).width("15%");
                });
                $('.texthide').hide();
            }

        }
    </script>
    <script type="text/javascript">
        function expand2(){
            var div2 = document.getElementById("hidden1");

            if(hidden1.style.display == "none")
            {
                hidden1.style.display = "block";
                $('.pricehide').show();
            }
            else{
                hidden1.style.display = "none";
                $('.pricehide').hide();

            }

        }
    </script>
    <script>
        $(document).ready(function(){

            $('.texthide').hide();
            $('.pricehide').hide();
            var price=document.getElementById("price").value;
            var vase=document.getElementById("vase").value;
            var total=0;
            total= parseInt(price);
            var value= "$"+total;
            document.getElementById("total").innerHTML = value;
            document.getElementById("current").value = price;
        });
    </script>
    <script type="text/javascript">
        function price(){

            var price=document.getElementById("price").value;
            var vase=document.getElementById("vase").value;
            var current=document.getElementById("current").value;
            var total=0;
            total= parseInt(price);
            var value= "$"+total;
            document.getElementById("total").innerHTML = value;
            document.getElementById("current").value = price;
            var q=document.getElementById("pro_size1").innerHTML;
            q=q.trim();
            document.cookie = "color1=" + q;

        }
    </script>
    <script type="text/javascript">
        function price1(){
            var price=document.getElementById("price1").value;
            var vase=document.getElementById("vase").value;
            var current=document.getElementById("current").value;
            var total=0;
            total= parseInt(price);
            var value= "$"+total;
            document.getElementById("total").innerHTML = value;
            document.getElementById("current").value = price;

            var q=document.getElementById("pro_size2").innerHTML;
//        document.cookie = "color="+"/color/quantity/"+q+"/"+"coook";
            q=q.trim();
            document.cookie = "color1=" + q;



        }
    </script>
    <script type="text/javascript">
        function price2(){
            var price=document.getElementById("price2").value;
            var vase=document.getElementById("vase").value;
            var current=document.getElementById("current").value;
            var total=0;
            total= parseInt(price);
            var value= "$"+total;
            document.getElementById("total").innerHTML = value;
            document.getElementById("current").value = price;
            var q=document.getElementById("pro_size3").innerHTML;
//        document.cookie = "color="+"/color/quantity/"+q+"/"+"coook";
            q=q.trim();
            document.cookie = "color1=" + q;

        }
    </script>
    <script type="text/javascript">
        function price3(){
            var price=document.getElementById("price3").value;
            var vase=document.getElementById("vase").value;
            var current=document.getElementById("current").value;
            var total=0;
            total= parseInt(price);
            var value= "$"+total;
            document.getElementById("total").innerHTML = value;
            document.getElementById("current").value = price;
            var q=document.getElementById("pro_size4").innerHTML;
//        document.cookie = "color="+"/color/quantity/"+q+"/"+"coook";
            q=q.trim();
            document.cookie = "color1=" + q;

        }
    </script>
    <script type="text/javascript">
        function price4(){
            var price=document.getElementById("price4").value;
            var vase=document.getElementById("vase").value;
            var current=document.getElementById("current").value;
            var total=0;
            total= parseInt(price);
            var value= "$"+total;
            document.getElementById("current").value = price;
            var q=document.getElementById("pro_size5").innerHTML;
//        document.cookie = "color="+"/color/quantity/"+q+"/"+"coook";
            q=q.trim();
            document.cookie = "color1=" + q;

        }
    </script>
    <script type="text/javascript">
        function vase_remove(){
            var price=document.getElementById("price").value;
            var vase=document.getElementById("vase_remove").value;
            var current=document.getElementById("current").value;
            var total=0;
            total= parseInt(current);
            var value= "$"+total;
            document.getElementById("total").innerHTML = value;
            var q=document.getElementById("pro_size6").innerHTML;
//        document.cookie = "color="+"/color/quantity/"+q+"/"+"coook";
            q=q.trim();

            document.cookie = "color1=" + q;
            document.cookie="vase="+0;

        }
    </script>
    <script type="text/javascript">
        function vase(){

            var vase=document.getElementById("vase").value;
            var current=document.getElementById("current").value;
            var total=0;
            total= parseInt(current) + parseInt(vase);
            var value= "$"+total;
            document.getElementById("total").innerHTML = value;

            document.cookie="vase="+1;

        }
    </script>



<?php
require_once "Includes/footer.php";
?>
    </body>
    </html>



<?php

if (isset($_POST['submit'])){
    if(isset($_COOKIE['color']))
    {
        $color=$_COOKIE['color'];
        unset($_COOKIE['color']);}

    else{
        $color=$product['product_image'];
    }

    if (isset($_COOKIE['color1'])){
        $quantity=$_COOKIE['color1'];
        unset($_COOKIE['color1']);

    }
    else{
        $quantity="dozen1";
    }
    if (isset($_COOKIE['vase'])&&$_COOKIE['vase']==1){
        $vase="yes";
//        unset($_COOKIE['vase']);
    $_COOKIE['vase']="0";
    }
    else{
        $vase="no";
    }



  $cartId= $obj_c->addItemsToCart($productId,$quantity,$vase,$_POST['totals'],$color,$_POST['message']);
//    $obj_c->addItemsToOrder(1,"zohaib","12","vase",12,"c","2");
    $obj_c->addItemsToOrder($productId,$productName,$cartId,$quantity,$vase,$_POST['totals'],$color,$_POST['message']);



    ?>
    <form action="index.php"></form>
<?php
//header("location: cart_item.php");
}

?>

