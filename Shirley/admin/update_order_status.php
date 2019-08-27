<?php
require_once $_SERVER['DOCUMENT_ROOT']."/Shirley/admin/includes/manage.php";
$obj=new manage();
$con = new PDO("mysql:host=localhost;dbname=db_florist","root","");

$invoiceNo=$_GET['invoice_no'];


//$page=$_GET['p'];
//echo $invoiceNo;

    $dueAmountData=$obj->viewOrderDetails($invoiceNo);
    foreach ($dueAmountData as $dueAmount)
        $amount=$dueAmount;
    $totalAmount=$amount[9];

//    echo $totalAmount;
//    exit();


    $query="update orders set status=:status , amount_paid=:amountPaid where invoice_no=:invoiceNo";
    $stm= $con->prepare($query);
    $stm->execute(
        array(
            'status'=>"paid",
            'amountPaid'=>$totalAmount,
            'invoiceNo'=>$invoiceNo
        )
    );
//    if ()
if (isset($_GET['p'])) {
    header("location: http://localhost/Shirley/admin/dashboard.php?view_orders");
}
else{
    header("location: http://localhost/Shirley/admin/dashboard.php?dashboard");

}