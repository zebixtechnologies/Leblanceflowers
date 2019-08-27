<?php
require_once $_SERVER['DOCUMENT_ROOT']."/Shirley/Includes/cart.php";
$obj=new cart();

$cartData=$obj->viewCartItems();

$dataOfTotal=$obj->calculateTotalOfCart();

$orderData=$obj->getOrder();



foreach ($orderData as $buyer)
    $buyerData=$buyer;


foreach ($dataOfTotal as $tot)
    $totalOfCart=$tot;
$total=$totalOfCart[0];

$body='

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
       table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}
</style>
    
</head>

<!------ Include the above in your HEAD tag ---------->
<body>


 <div class="container">
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <address>
                        <strong>'.$buyerData["name"];


$body.='
                        </strong>
                        <br>'.$buyerData["address"];


$body.='<br>
                        <abbr title="Email">'. $buyerData["email"];

$body.='</address>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    <p>
                        <em>Date:'.$buyerData["date"];


$body.='</em>
                    </p>
                    <p>
                        <em>Receipt #:'.$buyerData["invoice_no"];

$body.='</em>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <h1>Receipt</h1>
                </div>
                </span>
                <table class="table table-hover" style="border-collapse: collapse;
  width: 100%;" >
                    <thead>
                    <tr>
                        <th style=" background-color: #4CAF50;
  color: white; text-align: left;
  padding: 8px;">Product</th>
                        <th style=" background-color: #4CAF50;
  color: white; text-align: left;
  padding: 8px;">size</th>
                        <th style=" background-color: #4CAF50;
  color: white; text-align: left;
  padding: 8px;" class="text-center">Price</th>
<!--                        <th style=" background-color: #4CAF50;
  color: white; text-align: left;
  padding: 8px;" class="text-center">Total</th>-->
                    </tr>
                    </thead>
                    <tbody>';

foreach ($cartData as $result) {

    $pr= $obj->get($result["product_id"]);

    foreach($pr as $prs){

        $prn=$prs;
    }



    $body.='<tr>


                            <td style=" text-align: left;
  padding: 8px;" class="col-md-9">
                            <em>'. $prn["product_name"];

    $body.='</em></h4></td>
                            <td style=" text-align: left;
  padding: 8px;" class="col-md-1" style="text-align: center">'.
        $result["product_price"];

    $body.='</td>

                               <td style=" text-align: left;
  padding: 8px;" class="col-md-1 text-center">'.
        $result["product_quantity"];
    $body.='</td>
<!--                            <td style=" text-align: left;
  padding: 8px;" class="col-md-1 text-center">$26</td>-->
                        </tr>';

}


$body.='<tr>
                        <td>   </td>
                        <td>   </td>
                        <td style=" text-align: left;
  padding: 8px;" class="text-right">
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
                        <td style=" text-align: left;
  padding: 8px;" class="text-right"><h4><strong>Total: </strong></h4></td>
                        <td style=" text-align: left;
  padding: 8px;" class="text-center text-danger"><h4><strong>$'.
    $total;
$body.='</strong></h4></td>
                    </tr>
                    </tbody>
                </table>
                </td>
            </div>
        </div>
    </div>
    </body>
</html>
    ';
// mail("salman9607@gmail.com","OrderDetails",$body);
$to = 'salman9607@gmail.com';

$subject = 'Website Change Reqest';

// $headers = "From:zohaibzebi66@gmail.com";
// $headers .= "Reply-To: ". strip_tags($_POST['req-email']) . "\r\n";
// $headers .= "CC: susan@example.com\r\n";
// $headers .= "MIME-Version: 1.0\r\n";
$headers = "Content-Type: text/html; charset=UTF-8\r\n";
// $message = '<p><strong>This is strong text</strong> while this is not.</p>';
mail($to, $subject, $body, $headers);


?>

