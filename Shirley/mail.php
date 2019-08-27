<?php
require_once $_SERVER['DOCUMENT_ROOT']."/Florist_Site/includes/cart.php";
$obj=new cart();

$cartData=$obj->viewCartItems();

$dataOfTotal=$obj->calculateTotalOfCart();

$orderData=$obj->getOrder();

foreach ($orderData as $buyer)
    $buyerData=$buyer;


foreach ($dataOfTotal as $tot)
    $totalOfCart=$tot;
$total=$totalOfCart[0];

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
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

<!------ Include the above in your HEAD tag ---------->
<body>

<div class="container">
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <address>
                        <strong><?php echo $buyerData['name'];?></strong>
                        <br>
                        <?php
                        echo $buyerData['address'];
                        ?>

                        <br>
                        <abbr title="Email"><?php echo $buyerData['email']?>
                    </address>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    <p>
                        <em>Date: 1st November, 2013</em>
                    </p>
                    <p>
                        <em>Receipt #: 34522677W</em>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <h1>Receipt</h1>
                </div>
                </span>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Product</th>
                        <th>size</th>
                        <th class="text-center">Price</th>
<!--                        <th class="text-center">Total</th>-->
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>

                    <?php
                    foreach ($cartData as $result) {

                        $pr= $obj->get($result['product_id']);

                    foreach($pr as $prs){

                        $prn=$prs;
                    }


                        ?>


                        <tr>


                            <td class="col-md-9"><em><?php echo $prn['product_name']?></em></h4></td>
                            <td class="col-md-1" style="text-align: center"> <?php echo $result['product_price'];?></td>

                                                        <td class="col-md-1 text-center"><?php echo $result['product_quantity']; ?></td>
<!--                            <td class="col-md-1 text-center">$26</td>-->
                        </tr>
                        <?php
                    }
                    ?>

                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td class="text-right">
                            <p>
<!--                                <strong>Subtotal: </strong>-->
                            </p>
                            <p>
<!--                                <strong>Tax: </strong>-->
                            </p></td>
                        <td class="text-center">
                            <p>
<!--                                <strong>$6.94</strong>-->
                            </p>
                            <p>
<!--                                <strong>$6.94</strong>-->
                            </p></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td class="text-right"><h4><strong>Total: </strong></h4></td>
                        <td class="text-center text-danger"><h4><strong>$<?php echo $total?></strong></h4></td>
                    </tr>
                    </tbody>
                </table>
                </td>
            </div>
        </div>
    </div>
</body>
</html>
