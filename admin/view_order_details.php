<?php
require_once $_SERVER['DOCUMENT_ROOT']."/Shirley/admin/includes/manage.php";
$obj=new manage();
$invoiceNo=$_GET['invoice_no'];

$orderData=$obj->viewOrderDetails($invoiceNo);

$orderItemsData=$obj->viewOrderItemDetails($invoiceNo);

//$orderData=$obj->getOrder();

foreach ($orderData as $buyer)
    $buyerData=$buyer;

$dataOfTotal=$obj->calculateTotalOfProducts($invoiceNo);


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
        <div class="well col-md-12 ">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <address style="font-size: 15px">
                        <strong>NAME:   <?php echo $buyerData['name'];?></strong>
                        <br>ADDRESS:
                        <?php
                        echo $buyerData['address'];
                        ?>

                        <br>
                        <abbr title="Email">EMAIL: <?php echo $buyerData['email']?>
                    </address>
                </div>
                <div style="font-size: 15px" class="col-xs-6 col-sm-6 col-md-6 text-right">
                    <p>
                        <em><?php  echo $buyerData['date']; ?></em>
                    </p>
                    <p>
                        <em>Receipt #: <?php echo $buyerData['invoice_no'];?></em>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                </div>
                </span>
                <table class="table table-hover">
                    <thead style="font-size: 15px">
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Image Color</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">color</th>
                        <th class="text-center">Vase</th>
<!--                        <th class="text-center">status</th>-->
                        <!--                        <th class="text-center">Total</th>-->
                    </tr>
                    </thead>
                    <tbody style="font-size: 18px">


                    <?php
                    foreach ($orderItemsData as $result) {?>
                        <tr>
                            <td class="col-md-6"><em><?php echo $result['pro_name']?></em></h4></td>
                            <td class="col-md-1" style="text-align: center"> <?php echo $result['pro_quantity'];?></td>
                            <td class="col-md-2"><?php  echo $result['color']   ?></td>
                            <td class="col-md-1 text-center"><?php echo $result['pro_price']; ?></td>
                            <td class="col-md-1 text-center"><img src="../assets/Product_Images/<?php echo $result['color']; ?>" style="height: 100px; width: 100px;
"></td>
                            <td class="col-md-1 text-center"><?php echo $result['vase']; ?></td>
<!--                            <td class="col-md-1 text-center">--><?php //echo $result['status']; ?><!--</td>-->
                            <!--                            <td class="col-md-1 text-center">$26</td>-->
                            <?php
                            }
                            ?>
                        </tr>


                    <tr>
                        <td><strong>Message:</strong>
                            <?php  echo $buyerData['message'];   ?>  </td>
                        <td>   </td>

                        <td class="text-right">

                        </td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td class=""><h4><strong>Total: </strong></h4></td>
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
