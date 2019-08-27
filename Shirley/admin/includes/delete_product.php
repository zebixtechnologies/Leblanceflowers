<?php

//    delete_product variable is retrieving from view product
    if(isset($_GET['delete_product'])){
        $delete_id = $_GET['delete_product'];

        require_once $_SERVER['DOCUMENT_ROOT']."/Shirley/config.php";
        $db = new Database();
        $con = $db->connect();


        $query = "delete from products where product_id='$delete_id'";

        $stm=$con->prepare($query);
        $run_delete = $stm->execute();

        if($run_delete){

            echo "<script>alert('One Product Has been deleted')</script>";

            echo "<script>window.open('dashboard.php?view_products','_self')</script>";

        }

    }

    ?>
