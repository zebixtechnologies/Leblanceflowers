<?php
/**
 * Created by PhpStorm.
 * User: salman
 * Date: 5/1/2019
 * Time: 11:22 PM
 */
?>
<!DOCTYPE html>
<html>

<head>

    <title>Admin Panel</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">

    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" >
    <script src="js/jquery.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
</head>
<body>

<div id="wrapper"><!-- wrapper Starts -->

    <?php include("sidebar.php");  ?>

    <div id="page-wrapper"><!-- page-wrapper Starts -->

        <div class="container-fluid">


    <div class="offset-1">
        <?php

        if (isset($_GET["dashboard"]) AND !empty($_GET["dashboard"])) {
            ?>
            <div class="alert alert-success" role="alert"><?php echo $_GET['dashboard'] ?></div>

            <?php
        }


    if(isset($_GET['dashboard'])){

        include "right_sidebar.php";
    }

    if(isset($_GET['insert_product'])){


        require_once "includes/insert_p.php";

    }
        if(isset($_GET['view_products'])){

        include("includes/view_products.php");
    }
    if(isset($_GET['view_orders'])){

        include("includes/view_orders.php");
    }
     if(isset($_GET['edit_flower'])){

         include("includes/edit_flower.php");
     }
    if(isset($_GET['edit_product'])){

        include("includes/edit_product.php");
    }
    if(isset($_GET['delete_product'])){

        include("includes/delete_product.php");
    }
    if(isset($_GET['each_category'])){

        include("includes/each_category.php");
    }
    if(isset($_GET['alcohol'])){

        include("includes/alcohol.php");
    }
    if(isset($_GET['chocolates'])){

        include("includes/chocolates.php");
    }
    if(isset($_GET['toys'])){

        include("includes/toys.php");
    }
    if(isset($_GET['candles'])){

        include("includes/candles.php");
    }

    ?>
    </div>
    </div>
</div>
</div>
</body>
</html>