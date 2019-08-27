<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>


        .quantity {
            float: left;
            margin-right: 15px;
            background-color: #eee;
            position: relative;
            width: 80px;
            overflow: hidden
        }

        .quantity input {
            margin: 0;
            text-align: center;
            width: 15px;
            height: 15px;
            padding: 0;
            float: right;
            color: #000;
            font-size: 20px;
            border: 0;
            outline: 0;
            background-color: #F6F6F6
        }

        .quantity input.qty {
            position: relative;
            border: 0;
            width: 100%;
            height: 40px;
            padding: 10px 25px 10px 10px;
            text-align: center;
            font-weight: 400;
            font-size: 15px;
            border-radius: 0;
            background-clip: padding-box
        }

        .quantity .minus, .quantity .plus {
            line-height: 0;
            background-clip: padding-box;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 0;
            -webkit-background-size: 6px 30px;
            -moz-background-size: 6px 30px;
            color: #bbb;
            font-size: 20px;
            position: absolute;
            height: 50%;
            border: 0;
            right: 0;
            padding: 0;
            width: 25px;
            z-index: 3
        }

        .quantity .minus:hover, .quantity .plus:hover {
            background-color: #dad8da
        }

        .quantity .minus {
            bottom: 0
        }
        .shopping-cart {
            margin-top: 20px;
        }
    </style>
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
    <script src="js/checkout.js"></script>
</head>
<body>
<!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
<!--<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>-->
<!--<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>-->
<!------ Include the above in your HEAD tag ---------->

<script src="https://use.fontawesome.com/c560c025cf.js"></script>

<?php
require_once "Includes/header.php";
?>

<form action="" id="del" onsubmit="return false" autocomplete="off">

<div class="container" id="get_product">

</div>
</form>
<br>
<br>
<?php
require_once "Includes/footer.php";
?>

</body>
</html>