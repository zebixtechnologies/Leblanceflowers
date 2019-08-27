<?php
/**
 * Created by PhpStorm.
 * User: zza51
 * Date: 5/2/2019
 * Time: 2:59 PM
 */

class cart
{
private $con;
    function __construct(){

        require_once $_SERVER['DOCUMENT_ROOT']."/Shirley/config.php";
        $db=new Database();
        $this->con=$db->connect();

    }

    function getRealUserIp(){
        switch(true){
            case (!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
            case (!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
            case (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
            default : return $_SERVER['REMOTE_ADDR'];
        }
    }


    function insertToCart($productId , $productQuantity , $productPrice)
    {

        $ipAddress=$this->getRealUserIp();
$total=$productQuantity*$productPrice;
        $query="insert into cart(cart_id,product_id,ip_address,product_quantity,product_price,total)

values(:cartId,:productId,:ipAddress,:productQuantity,:productPrice,:total)";
        $stm=$this->con->prepare($query);
            $q= $stm->execute(
            array('cartId'=>null,
                'productId'=>$productId,
                'ipAddress'=>$ipAddress,
                'productQuantity'=>$productQuantity,
                'productPrice'=>$productPrice,
                'total'=>$total)
        );

    }

function checkStock($id)
{
    $query="select product_quantity from products where product_id=:id";
    $stm=$this->con->prepare($query);
     $stm->execute(
        array('id'=>$id)
    );
    $result=$stm->fetchAll();
    return $result;
}
function viewCartItems(){
        $ipAddress=$this->getRealUserIp();
        $query="select * from cart WHERE ip_address=:ipAddress";
        $stm=$this->con->prepare($query);

        $stm->execute(
            array(
                ':ipAddress'=>$ipAddress
            )
        );

        $result=$stm->fetchAll();

        return $result;
}
    function viewItems(){
        $ipAddress=$this->getRealUserIp();
        $query="select * from products WHERE ip_address=:ipAddress";
        $stm=$this->con->prepare($query);

        $stm->execute(
            array(
                ':ipAddress'=>$ipAddress
            )
        );

        $result=$stm->fetchAll();

        return $result;
    }
    function calculateTotalOfCart()
    {
        $ipAddress=$this->getRealUserIp();
        $query="select sum(product_price) from cart WHERE ip_address=:ipAddress";

        $stm=$this->con->prepare($query);
        $stm->execute(
            array(
                ':ipAddress'=>$ipAddress
            )
        );
        $result=$stm->fetchAll();
        return $result;
}
    function get($id,$product_type,$gift_type)
    {

        if($product_type=="g"){
            $query="select * from $gift_type where product_id=:id";    
        }
        else{
            $query="select * from products where product_id=:id";
        }
        $stm=$this->con->prepare($query);
        $stm->execute(
            array('id'=>$id)
        );
        $result=$stm->fetchAll();
        return $result;
    }

public function addItemsToCart($productId , $productQuantity ,$vase, $productPrice,$color,$message)
{
    $ipAddress=$this->getRealUserIp();

//    $color="";
//    $message="";
//    $total=$productQuantity * $productPrice;

    $query="insert into cart(cart_id,product_id,color,vase,ip_address,product_quantity,product_price,message)

values(:cartId,:productId,:color,:vase,:ipAddress,:productQuantity,:productPrice,:message)";

    $stm=$this->con->prepare($query);
    $q= $stm->execute(
        array('cartId'=>null,
            'productId'=>$productId,
            'color'=>$color,
            'vase'=>$vase,
            'ipAddress'=>$ipAddress,
            'productQuantity'=>$productQuantity,
            'productPrice'=>$productPrice,
            'message'=>$message)
    );
    $last_cart_id = $this->con->lastInsertId();
    return $last_cart_id;
//echo '<script>window.location.href="cart_item.php";</script>';
//header("location: cart_item.php");
}




public function order($name,$email,$address,$country,$state,$zip,$message){
//    echo '<script >alert("zohaib")
//</script>';
    $ipAddress=$this->getRealUserIp();
        $query="insert into orders(id,name,email,address,country,state,zip,message,ip_address)

values(:id,:name,:email,:address,:country,:state,:zip,:message,:ipAddress)";
    $stm=$this->con->prepare($query);
    $q= $stm->execute(
        array('id'=>null,
            'name'=>$name,
            'email'=>$email,
            'address'=>$address,
            'country'=>$country,
            'state'=>$state,
            'zip'=>$zip,
            'message'=>$message,
            'ipAddress'=>$ipAddress)
    );

}
public function countProductsInCart()
{
    $ipAddress=$this->getRealUserIp();
    $query="select COUNT(*) from cart where ip_Address=:ipAddress";
    $stm=$this->con->prepare($query);

    $q=$stm->execute(
        array(
            'ipAddress'=>$ipAddress
        )
    );

    $result=$stm->fetchAll();
    return $result;
}
public function deleteProductsFromCart(){
    $ipAddress=$this->getRealUserIp();
    $query="delete from cart where ip_address=:ipAddress";

    $stm=$this->con->prepare($query);
    $stm->execute(
        array('ipAddress'=>$ipAddress
        )
    );

}

public function getOrder(){
//    $ipAddress=$this->getRealUserIp();
    $ipAddress=123;
    $query="select * from orders where ip_address=:ipAddress";
    $stm=$this->con->prepare($query);
    $stm->execute(
    array(
        'ipAddress'=>$ipAddress
    )
    );

    $result=$stm->fetchAll();

    return $result;

}
function getShippingFee($country){
    $query="select * from shipping_fee WHERE country=:country";
$stm=$this->con->prepare($query);
$stm->execute(
    array(
        'country'=>$country
    )
);
$result= $stm->fetchAll();
return $result;
}
    public function addItemsToOrder($productId ,$productName,$cartId, $productQuantity ,$vase, $productPrice,$color,$message)
    {

        $ip=$this->getRealUserIp();

//        $ipAddress=preg_replace(":","",$ipAddress);
        $ipAddress=preg_replace("/[^0-9]/", '', $ip);
        $query="insert into orders1(invoice_no,cart_id,pro_id,pro_name,pro_quantity,pro_price,color,vase,status,message)

values(:invoiceNo,:cartId,:productId,:productName,:productQuantity,:productPrice,:color,:vase,:status,:message)";

        $stm=$this->con->prepare($query);
        $q= $stm->execute(
            array(
                'invoiceNo'=>$ipAddress,
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
        if ($q) {
            echo "<script>window.open('cart_item.php?view_products','_self')</script>";
        }
    }




}

//$obj = new cart();
//$obj->addItemsToOrder('5','5','5','5','5','5','5');