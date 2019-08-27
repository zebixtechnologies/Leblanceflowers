<?php
/**
 * Created by PhpStorm.
 * User: salman
 * Date: 8/3/2019
 * Time: 5:35 PM
 */

require_once $_SERVER['DOCUMENT_ROOT']."/Shirley/config.php";
$db = new Database();
$con = $db->connect();
// var_dump($_POST['g_price']);

    $id = $_POST['g_id'];
    $name=$_POST['g_name'];
    $image = $_POST['g_image'];
    $price = $_POST['g_price'];
    $type = $_POST['g_type'];

    insert($id,$name,$image,$price,$type);


function getRealUserIp(){
    switch(true){
        case (!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
        case (!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
        case (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
        default : return $_SERVER['REMOTE_ADDR'];
    }
}

function insert($id,$name,$image,$price,$type){
    global $con,$id,$image,$price;
    $ipAddress=getRealUserIp();
    $query="insert into cart(cart_id,product_id,color,vase,ip_address,product_quantity,product_price,message,product_type,gift_type)

    values(:cartId,:productId,:color,:vase,:ipAddress,:productQuantity,:productPrice,:message,:product_type,:gift_type)";
            $stm=$con->prepare($query);
                $q= $stm->execute(
                array('cartId'=>null,
                    'productId'=>$id,
                    'color'=>$image,
                    'vase'=>"no",
                    'ipAddress'=>$ipAddress,
                    'productQuantity'=>1,
                    'productPrice'=>$price,
                    'message'=>"Thank you",
                    'product_type'=>"g",
                    'gift_type'=>$type
                    )
            );
    $last_cart_id = $con->lastInsertId();
    // var_dump($last_cart_id);
$productData=addItemsToOrder($id,$name,$last_cart_id,1,"no",$price,$image,"Thank you");

// var_dump($productData);


  
}

 function addItemsToOrder($productId ,$productName,$cartId, $productQuantity ,$vase, $productPrice,$color,$message)
    {
        global $con; 

        $ip=getRealUserIp();

//        $ipAddress=preg_replace(":","",$ipAddress);
        // $ipAddress=preg_replace("/[^0-9]/", '', $ip);
$invoice_no=$_COOKIE['inv'];
        $query="insert into orders1(invoice_no,cart_id,pro_id,pro_name,pro_quantity,pro_price,color,vase,status,message)

values(:invoiceNo,:cartId,:productId,:productName,:productQuantity,:productPrice,:color,:vase,:status,:message)";

        $stm=$con->prepare($query);
        $q= $stm->execute(
            array(
                'invoiceNo'=>$invoice_no,
                'cartId'=>$cartId,
                'productId'=>$productId,
                'productName'=>$productName,

                'productQuantity'=>$productQuantity,
                'productPrice'=>$productPrice,
                'color'=>$color,
                'vase'=>$vase,
                'status'=>"not paid",
                'message'=>$message)
        );
            }

function getItemsDetails($id,$table_name){
    global $con;
    $query = "select * from $type where id=:id";
    $stm=$con->prepare($query);
    $q=$stm->execute(
         array('id' => $id )
     );
        $result=$stm->fetchAll();
        return $result;
}
