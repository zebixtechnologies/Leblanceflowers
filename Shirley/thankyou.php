<?php

require_once $_SERVER['DOCUMENT_ROOT']."/Shirley/includes/cart.php";

$obj=new cart();

$obj->deleteProductsFromCart();



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        body {
            margin-top: 20px;
        }
    </style>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

<!------ Include the above in your HEAD tag ---------->
<body>
<br>
<br>
<br>
<div class="container-fluid">
    <div class="jumbotron text-xs-center">
        <h1 class="display-3 text-center">Thank You!</h1>
        <p class="lead text-center"><strong>Please check your email</strong> for further instructions on how to complete your account setup.</p>
        <hr>
        <p>
            <!--Having trouble? <a href="">Contact us</a>-->
        </p>
        <p class="lead text-center">
            <a class="btn btn-primary btn-sm" href="index.php" role="button">Continue to homepage</a>
        </p>
    </div>
</div>
</body>
</html>
