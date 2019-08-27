<?php
if ($_SERVER['REQUEST_METHOD']!='POST'){
    header("location: index.php");
    exit();
}

$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,'https://ipnpb.sandbox.paypal.com/cgi-bin/webscr');
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_POSTFIELDS,"cmd=_notify-validate".http_build_query($_POST));
$response=curl_exec($ch);
curl_close();

//file_put_contents("test.txt",$response);

if ($response=="VERIFIED" && $_POST['receiver_email']=="zohaibi619@gmail.com"){
    $cEmail=$_POST['payer_email'];
    $name=$_POST['first_name']." ".$_POST['last_name'];
    $price=$_POST['mc_gross'];
    $item=$_POST['item_number'];
    $currency=$_POST['mc_currency'];

    $paymentStatus=$_POST['payment_status'];
if ($item=="flower"&&$currency=="USD"&&$paymentStatus=="Confirmed"&&$price==500){}

//    $handle=fopen("test.txt","w");
//
//    foreach ($_POST as $key => $value)
//        fwrite($handle,"$key => $value \r\n");
//    fclose($handle);
}