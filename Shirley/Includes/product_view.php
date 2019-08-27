<?php
/**
 * Created by PhpStorm.
 * User: salman
 * Date: 5/1/2019
 * Time: 10:47 PM
 */
class product_view{

    private $con;
    function __construct(){
        require_once $_SERVER['DOCUMENT_ROOT']."/Shirley/config.php";
        $db = new Database();
        $this->con = $db->connect();
    }

public function pro(){

$query="select * from products";
$stm=$this->con->prepare($query);
$stm->execute();
$result=$stm->fetchAll();
//$total_rows=$stm->rowCount();

foreach ($result as $row)
{
    $products[]=$row;
}
        return $products;
}

public function gift_alcohol(){

        $query="select * from alcohol";
        $stm=$this->con->prepare($query);
        $stm->execute();
        $result=$stm->fetchAll();

        foreach ($result as $row)
        {
            $products[]=$row;
        }
        return $products;
}
public function gift_chocolate(){

        $query="select * from chocolates";
        $stm=$this->con->prepare($query);
        $stm->execute();
        $result=$stm->fetchAll();

        foreach ($result as $row)
        {
            $products[]=$row;
        }
        return $products;
}
public function gift_toy(){

        $query="select * from toys";
        $stm=$this->con->prepare($query);
        $stm->execute();
        $result=$stm->fetchAll();

        foreach ($result as $row)
        {
            $products[]=$row;
        }
        return $products;
}
public function gift_candle(){

        $query="select * from candles";
        $stm=$this->con->prepare($query);
        $stm->execute();
        $result=$stm->fetchAll();

        foreach ($result as $row)
        {
            $products[]=$row;
        }
        return $products;
}

public function productDetails($productId){
    $query="select * from products WHERE product_id=:productId";
    $stm=$this->con->prepare($query);
    $stm->execute(
        array(
            'productId'=>$productId
        )
    );

    $result=$stm->fetchAll();
//$total_rows=$stm->rowCount();

    foreach ($result as $row)
    {
        $product[]=$row;
    }
    return $product;
}


}

//$obj=new product_view();

//$obj->pro();