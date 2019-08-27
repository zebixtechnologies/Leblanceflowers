<?php
/**
 * Created by PhpStorm.
 * User: salman
 * Date: 5/11/2019
 * Time: 3:47 PM
 */
?>
<!--<div class="container-fluid bg-white">-->

<!--</div>-->
<div class="container">
    <div class="row py-lg-4 py-md-3">
        <div class="col-md-3 logo">
            <h2 class="h2 brnd float-left">
                <a href="index.php">
                <img class="mb-1" src="assets/lotus-flower.jpeg" width="200" height="80" alt="FloristStore">
                </a>
            </h2>

            <button class="btn search s-label float-right"><i class="fas fa-search"></i></button>
        </div>
        <div class="col-md-9">
            <ul class="nav lg-rg justify-content-end">
                <li class="nav-item">
                    <form class="form-inline border searchbox" method="GET" action="">
                        <input class="form-control control-sm in-search mr-sm-2 border-0" id="search" type="search" placeholder="Search Flower..." aria-label="Search">
                        <button class="btn search s-label-1 my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link mt-lg-2 mt-md-2 mx-3 p-0">Login</a>
                </li>
                <li class="nav-item nl-cl mt-lg-2 mt-md-2">|</li>
                <li class="nav-item">
                    <a href="" class="nav-link mt-lg-2 mt-md-2 ml-3 p-0">Register</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="container-fluid sticky-top px-0 top-bg">
    <div class="nv container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-lg-4 px-0">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item mx-lg-3 active">
                        <a class="nav-link" href="./index.php">Customer of the week <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item mx-lg-3 dropdown position-static" aria-labelledby="navbarDropdownMenuLink">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                            Occasion
                        </a>
                        <div class="dropdown-menu w-103 rounded-0 pt-0" aria-labelledby="navbarDropdownMenuLink">
                            <div class="row">
                                <div class="col-sm-8">
                                    <a class="dropdown-item mt-lg-4" href="#">Valentine's Day</a>
                                    <div class="dropdown-divider mx-2"></div>
                                    <a class="dropdown-item" href="#">Birthday</a>
                                    <div class="dropdown-divider mx-2"></div>
                                    <a class="dropdown-item" href="#">Anniversary</a>
                                    <div class="dropdown-divider mx-2"></div>
                                    <a class="dropdown-item" href="#">New Baby</a>
                                    <div class="dropdown-divider mx-2"></div>
                                    <!--<a class="dropdown-item" href="#">Funeral</a>-->
                                </div>
                                <!--<div class="col-sm-4">-->
                                <!--    <a class="dropdown-item mt-lg-4" href="#">Mother's Day</a>-->
                                <!--    <div class="dropdown-divider mx-2"></div>-->
                                <!--    <a class="dropdown-item" href="#">Get Well</a>-->
                                <!--    <div class="dropdown-divider mx-2"></div>-->
                                <!--    <a class="dropdown-item" href="#">Thank you</a>-->
                                <!--    <div class="dropdown-divider mx-2"></div>-->
                                <!--    <a class="dropdown-item" href="#">Best Wishes</a>-->
                                <!--    <div class="dropdown-divider mx-2"></div>-->
                                <!--    <a class="dropdown-item" href="#">Memorial Services</a>-->
                                <!--</div>-->
                                <div class="col-sm-4 py-2">
                                    <a href=""><img class="thumb w-75 ml-5" src="assets/thumbnail1.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item mx-lg-3 dropdown position-static">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                            Luxury Roses
                        </a>
                        <div class="dropdown-menu w-103 rounded-0 pt-0" aria-labelledby="navbarDropdownMenuLink">
                            <div class="row">
                                <div class="col-sm-8">
                                    <a class="dropdown-item mt-lg-4" href="#">Fresh Roses</a>
                                    <div class="dropdown-divider mx-2"></div>
                                    <a class="dropdown-item" href="#">Care Tips</a>
                                    <div class="dropdown-divider mx-2"></div>
                                    <!--<a class="dropdown-item" href="#">Luxe Range</a>-->
                                    <!--<div class="dropdown-divider mx-2"></div>-->
                                    <!--<a class="dropdown-item" href="#">Signature vases</a>-->
                                </div>
                                <!--<div class="col-sm-4">-->
                                <!--    <a class="dropdown-item mt-lg-4" href="#">Plants</a>-->
                                <!--    <div class="dropdown-divider mx-2"></div>-->
                                <!--    <a class="dropdown-item" href="#">Bottles</a>-->
                                <!--    <div class="dropdown-divider mx-2"></div>-->
                                <!--    <a class="dropdown-item" href="#">Weekly Office Flowers</a>-->
                                <!--    <div class="dropdown-divider mx-2"></div>-->
                                <!--    <a class="dropdown-item" href="#">Gift Vouchers</a>-->
                                <!--</div>-->
                                <div class="col-sm-4 py-2">
                                    <a href=""><img class="thumb w-75 ml-5" src="assets/purple-background.gif" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item mx-lg-3 dropdown position-static">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Special Moments
                        </a>
                        <div class="dropdown-menu w-103 rounded-0 pt-0" aria-labelledby="navbarDropdownMenuLink">
                            <div class="row">
                                <div class="col-sm-8">
                                    <a class="dropdown-item mt-lg-4" href="#">Happy Breakfast</a>
                                    <div class="dropdown-divider mx-2"></div>
                                    <a class="dropdown-item" href="#">Breakfast in Bed</a>
                                    <div class="dropdown-divider mx-2"></div>
                                    <a class="dropdown-item" href="#">Special Night</a>
                                    <div class="dropdown-divider mx-2"></div>
                                    <!--<a class="dropdown-item" href="#">Party Hampers</a>-->
                                </div>
                                <!--<div class="col-sm-4">-->
                                <!--    <a class="dropdown-item mt-lg-4" href="#">Plant Hampers</a>-->
                                <!--    <div class="dropdown-divider mx-2"></div>-->
                                <!--    <a class="dropdown-item" href="#">Housewarming Gifts</a>-->
                                <!--    <div class="dropdown-divider mx-2"></div>-->
                                <!--    <a class="dropdown-item" href="#">Romantic Hampers</a>-->
                                <!--    <div class="dropdown-divider mx-2"></div>-->
                                <!--    <a class="dropdown-item" href="#">Gift Vouchers</a>-->
                                <!--</div>-->
                                <div class="col-sm-4 py-2">
                                    <a href=""><img class="thumb w-75 ml-5" src="assets/thumbnail6.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item mx-lg-3 dropdown position-static">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Wedding
                        </a>
                        <div class="dropdown-menu w-103 rounded-0 pt-0" aria-labelledby="navbarDropdownMenuLink">
                            <div class="row">
                                <div class="col-sm-4">
                                    <a class="dropdown-item mt-lg-4" href="#">Botonier</a>
                                    <div class="dropdown-divider mx-2"></div>
                                    <a class="dropdown-item" href="#">Bouquets</a>
                                    <div class="dropdown-divider mx-2"></div>
                                    <a class="dropdown-item" href="#">Basic Package</a>
                                    <div class="dropdown-divider mx-2"></div>
                                    <!--<a class="dropdown-item" href="#">Party Hampers</a>-->
                                </div>
                                <div class="col-sm-4">
                                    <a class="dropdown-item mt-lg-4" href="#">Deluxe Package</a>
                                    <div class="dropdown-divider mx-2"></div>
                                    <a class="dropdown-item" href="#">Deluxe Plus Package</a>
                                    <div class="dropdown-divider mx-2"></div>
                                    <a class="dropdown-item" href="#">Gallery</a>
                                    <div class="dropdown-divider mx-2"></div>
                                    <!--<a class="dropdown-item" href="#">Gift Vouchers</a>-->
                                </div>
                                <div class="col-sm-4 py-2">
                                    <a href=""><img class="thumb w-75 ml-5" src="assets/thumbnail6.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item mx-lg-3">
                        <a class="nav-link" href="./ContactFrom/contact_us.php">Contact Us</a>
                    </li>
                </ul>
            </div>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a href="./cart_item.php" class="nav-link px-0"><i class="fas fa-shopping-cart"></i> My Cart</a>
                </li>
            </ul>
        </nav>
    </div>
</div>
