<?php
/**
 * Created by PhpStorm.
 * User: salman
 * Date: 5/2/2019
 * Time: 2:32 PM
 */

class manage
{
    private $con;

    public function __construct()
    {
        require_once $_SERVER['DOCUMENT_ROOT']."/Shirley/config.php";
        $db = new Database();
        $this->con = $db->connect();
    }
    public function insert_p($pro_title,$pro_price,$pro_desc,$pro_img,$frontImage,$color_img1,$color_img2,$color_img3,$color_img4,$color_img5,$color_img6,$color_img7,$pro_size1,$pro_size1_price,$pro_size2,$pro_size2_price,$pro_size3,$pro_size3_price,$pro_size4,$pro_size4_price,$pro_size5,$pro_size5_price,$pro_size6,$pro_size6_price){


//        $pro_img=$_COOKIE['image'];

//        $pro_img=45;
//        $product_img1 = $_FILES['$pro_img']['name'];
//        $temp_name1 = $_FILES['product_img1']['tmp_name'];
//        move_uploaded_file($temp_name1,"product_images/$pro_img");

        $pro_date = date("j/n/Y");
        // $pro_date = '2/5/2016';

        $query = "Insert into products (product_name,product_date,product_image,front_img,image1,image2,image3,image4,image5,image6,image7,product_price,pro_size1,pro_size1_price,pro_size2,pro_size2_price,pro_size3,pro_size3_price,pro_size4,pro_size4_price,pro_size5,pro_size5_price,pro_size6,pro_size6_price,product_description) 
        VALUES (:pro_name, :pro_date, :pro_img, :front_img, :image_1, :image_2, :image_3, :image_4, :image_5, :image_6, :image_7, :pro_price,  :pro_size1, :pro_size1_price, :pro_size2, :pro_size2_price, :pro_size3, :pro_size3_price, :pro_size4, :pro_size4_price, :pro_size5, :pro_size5_price, :pro_size6, :pro_size6_price,:pro_desc)";
        $stm = $this->con->prepare($query);
        $result= $stm->execute(
            array(
                'pro_name' => $pro_title,
                'pro_date' => $pro_date,
                'pro_img' => $pro_img,
                'front_img' => $frontImage,
                'image_1' => $color_img1,
                'image_2' => $color_img2,
                'image_3' => $color_img3,
                'image_4' => $color_img4,
                'image_5' => $color_img5,
                'image_6' => $color_img6,
                'image_7' => $color_img7,
                'pro_price'=> $pro_price,

                'pro_size1' => $pro_size1,
                'pro_size1_price' => $pro_size1_price,
                'pro_size2' => $pro_size2,
                'pro_size2_price' => $pro_size2_price,
                'pro_size3' => $pro_size3,
                'pro_size3_price' => $pro_size3_price,
                'pro_size4' => $pro_size4,
                'pro_size4_price' => $pro_size4_price,
                'pro_size5' => $pro_size5,
                'pro_size5_price' => $pro_size5_price,
                'pro_size6' => $pro_size6,
                'pro_size6_price' => $pro_size6_price,
                'pro_desc' => $pro_desc

            )
        );

//        $result = $stm->fetchAll();
        if ($result){
            echo "<script>window.open('dashboard.php?view_products','_self')</script>";
        }else{
            echo 'Something Wrong';
        }

    }

    function viewAllOrders(){
        $query="select * from orders ORDER BY id DESC limit 5";
        $stm=$this->con->prepare($query);
        $stm->execute();
        $result=$stm->fetchAll();
        return $result;
    }
    function viewAllOrders1(){
        $query="select * from orders ORDER BY id DESC ";
        $stm=$this->con->prepare($query);
        $stm->execute();
        $result=$stm->fetchAll();
        return $result;
    }

    function viewOrderDetails($invoiceNo){
        $query="select * from orders where invoice_no=:invoiceNo";
        $stm=$this->con->prepare($query);
        $stm->execute(
            array(
                'invoiceNo'=>$invoiceNo
            )
        );
        $result=$stm->fetchAll();
        return $result;

    }
    function viewOrderItemDetails($invoiceNo){
        $query="select * from orders1 where invoice_no=:invoiceNo";
        $stm=$this->con->prepare($query);
        $stm->execute(
            array(
                'invoiceNo'=>$invoiceNo
            )
        );
        $result= $stm->fetchAll();
        return $result;
    }
    function calculateTotalOfProducts($invoiceNo)
    {
//        $ipAddress=$this->getRealUserIp();
        $query="select sum(pro_price) from orders1 WHERE invoice_no=:invoiceNo";

        $stm=$this->con->prepare($query);
        $stm->execute(
            array(
                ':invoiceNo'=>$invoiceNo
            )
        );
        $result=$stm->fetchAll();
        return $result;
    }




}
//$obj = new manage();
//$obj->insert_p('sal','img','54','saasas','3.jpg','3.jpg','3.jpg','3.jpg','3.jpg','3.jpg','3','4','4','4','4','4','4','4','4','4','4','4','4','5');