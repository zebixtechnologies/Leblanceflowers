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

if (isset($_POST['alcohol_title'])){
    $title = $_POST['alcohol_title'];
    $price = $_POST['alcohol_price'];
    $color_img1 = $_FILES['alcohol_img1']['name'];
    move_uploaded_file($_FILES['alcohol_img1']['tmp_name'],$_SERVER['DOCUMENT_ROOT']."/Shirley/assets/Product_Images/$color_img1");
    insert('alcohol',$title,$price,$color_img1);
}
if (isset($_POST['chocolate_title'])){
    $title = $_POST['chocolate_title'];
    $price = $_POST['chocolate_price'];
    $color_img1 = $_FILES['chocolate_img1']['name'];
    move_uploaded_file($_FILES['chocolate_img1']['tmp_name'],$_SERVER['DOCUMENT_ROOT']."/Shirley/assets/Product_IMAGES/$color_img1");
    insert('chocolates', $title, $price, $color_img1);
}
if (isset($_POST['toys_title'])){
    $title = $_POST['toys_title'];
    $price = $_POST['toys_price'];
    $color_img1 = $_FILES['toys_img1']['name'];
    move_uploaded_file($_FILES['toys_img1']['tmp_name'],$_SERVER['DOCUMENT_ROOT']."/Shirley/assets/Product_IMAGES/$color_img1");
    insert('toys', $title, $price, $color_img1);
}
if (isset($_POST['candle_title'])){
    $title = $_POST['candle_title'];
    $price = $_POST['candle_price'];
    $color_img1 = $_FILES['candle_img1']['name'];
    move_uploaded_file($_FILES['candle_img1']['tmp_name'],$_SERVER['DOCUMENT_ROOT']."/Shirley/assets/Product_IMAGES/$color_img1");
    insert('candles', $title, $price, $color_img1);
}
function insert($table,$title,$price,$color_img1){
    global $con;
    $query = "Insert into $table (product_name,price, image) VALUES (:name, :price, :image)";
    $stm = $con->prepare($query);
    $result = $stm->execute(
        array(
            'name'=>$title,
            'price'=>$price,
            'image'=>$color_img1
        )
    );
    if ($result){
        echo "Successfully_Inserted";
    }else{
        echo "Something_Wrong";
    }
}