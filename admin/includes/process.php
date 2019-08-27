<?php
/**
 * Created by PhpStorm.
 * User: salman
 * Date: 5/2/2019
 * Time: 2:25 PM
 */

require_once "manage.php";
session_start();
if (isset($_POST['product_title'])){
    $manage = new manage();
//    $name=$_SESSION['name'];
    $result = $manage->insert_p($_POST['product_title'], $_POST['product_price'], $_POST['product_desc']);
    echo $result;
    exit();
}