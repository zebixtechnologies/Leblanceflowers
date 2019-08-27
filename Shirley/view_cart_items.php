<?php
/**
 * Created by PhpStorm.
 * User: zza51
 * Date: 5/3/2019
 * Time: 4:21 PM
 */
require_once $_SERVER['DOCUMENT_ROOT']."/Shirley/cart.php";
$obj=new cart();
$dataOfCart=$obj->viewCartItems();

$dataOfTotal=$obj->calculateTotalOfCart();
foreach ($dataOfTotal as $tot)
    $totalOfCart=$tot;

$total=$totalOfCart[0];

$body="";
?>



<html>
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
        <link rel="shortcut icon" href="assets/lotus-flower.png" type="image/x-icon">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/styles.css">
        <link href="css/fonts/Montserrat/Montserrat-Regular.ttf" type="application/x-font-ttf" rel="stylesheet">
        <link href="css/fonts/fontawesome/css/all.css" type="text/css" rel="stylesheet">
        <script src="js/jquery.min.js"></script>


</head>
<body>

<div class="container">
    <h2>Shopping Cart</h2>
    <p>Following are the items in your cart</p>
    <table class="table">
        <thead>
        <tr>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total</th>
            </tr>
        </thead>
        <?php
        foreach ($dataOfCart as $result){
        $body.=$result['product_quantity']."<br>";
        $body.=$result['product_price']."<br>";
        $body.=$result['product_quantity']*$result['product_price']."<br>";

            ?>
        <tbody>
        <tr>
            <td>name</td>
            <td><?php echo $result['product_quantity']; ?></td>
            <td><?php echo $result['product_price']; ?></td>
            <td><?php echo $result['product_price'] * $result['product_quantity'];?></td>


        </tr>

        <?php

        }
        ?>
<td>

</td>
<td>

</td>
        <td>
    Total
</td>
        <td><?php echo $totalOfCart[0];?></td>
		<tr>
		<td></td>
		<td></td>
		<td></td>
		<td>
			  <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_xclick">
                    <input type="hidden" name="business" value="shirleyruiz9@gmail.com">
                    <input type="hidden" name="lc" value="US">
                    <input type="hidden" name="item_name" value="Flowr">
                    <input type="hidden" name="amount" value="<?php echo $total;?>">
                    <input type="hidden" name="currency_code" value="USD">
                    <input type="hidden" name="button_subtype" value="services">
                    <input type="hidden" name="no_note" value="1">
                    <input type="hidden" name="no_shipping" value="2">
                    <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHosted">
                    <input type="image" src="https://www.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                    <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>
		</td>
		</tr>

<script>
    document.getElementById('amount').value=300;
</script>

        </tbody>
    </table>

    <br>




</div>



</body>
</html>

<?php


?>

