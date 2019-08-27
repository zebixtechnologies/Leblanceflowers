<?php
require_once $_SERVER['DOCUMENT_ROOT']."/Shirley/config.php";
$obj = new Database();
$con = $obj->connect();
$query = "SELECT * FROM `categories`";
$stm=$con->prepare($query);
$stm->execute();
$result=$stm->fetchAll();

?>
<!DOCTYPE html>

    <html>

    <head>

        <title> Insert Products </title>


        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
        <script>tinymce.init({ selector:'#product_desc,#product_features' });</script>

    </head>

    <body>

    <div class="row"><!-- row Starts -->

        <div class="col-lg-12"><!-- col-lg-12 Starts -->

            <ol class="breadcrumb"><!-- breadcrumb Starts -->

                <li class="active">

                    <i class="fa fa-dashboard"> </i> Dashboard / Insert Products

                </li>

            </ol><!-- breadcrumb Ends -->

        </div><!-- col-lg-12 Ends -->

    </div><!-- row Ends -->


    <div class="row"><!-- 2 row Starts -->

        <div class="col-lg-12"><!-- col-lg-12 Starts -->

            <div class="panel panel-default"><!-- panel panel-default Starts -->

                <div class="panel-heading"><!-- panel-heading Starts -->

                    <h3 class="panel-title">

                        <i class="fa fa-money fa-fw"></i> Insert Products

                    </h3>

                </div><!-- panel-heading Ends -->

                <div class="panel-body"><!-- panel-body Starts -->

                    <form class="form-horizontal" id="form_poduct"    method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

                        <div class="form-group" ><!-- form-group Starts -->

                            <label class="col-md-3 control-label" > Product Title </label>

                            <div class="col-md-6" >

                                <input type="text" name="product_title" id="product_title" class="form-control" required >
                                <small id="u_error" class="form-text text-muted"></small>
                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group" ><!-- form-group Starts -->

                            <label class="col-md-3 control-label" > Select A Manufacturer </label>

                            <div class="col-md-6" >

                                <select class="form-control" name="category" required><!-- select manufacturer Starts -->

                                    <option> Select A Category </option>

                                    <?php

                                    foreach ($result as $row) {
                                        $categoty_id = $row['category_id'];
                                        $categoty_name = $row['category_name'];
                                        echo "<option value='$categoty_name'>
$categoty_name
</option>";
                                    }

                                    ?>

                                </select><!-- select manufacturer Ends -->

                            </div>

                        </div><!-- form-group Ends -->


                        <div class="form-group" ><!-- form-group Starts -->

                            <label class="col-md-3 control-label" > Product Image</label>

                            <div class="col-md-6" >

                                <input type="file" name="product_img1" id="" class="form-control" required>
                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group" ><!-- form-group Starts -->

                            <label class="col-md-3 control-label" > Front Image</label>

                            <div class="col-md-6" >
                                <input type="file" name="front_img" id="" class="form-control" required>
                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group" ><!-- form-group Starts -->

                            <label class="col-md-3 control-label" > Color Image_1</label>

                            <div class="col-md-6" >

                                <input type="file" name="color_img1" id="" class="form-control">
                                <small id="i_error" class="form-text text-muted"></small>

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group" ><!-- form-group Starts -->

                            <label class="col-md-3 control-label" > Color Image_2</label>

                            <div class="col-md-6" >

                                <input type="file" name="color_img2" id="" class="form-control">
                                <small id="i_error" class="form-text text-muted"></small>

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group" ><!-- form-group Starts -->

                            <label class="col-md-3 control-label" > Color Image_3</label>

                            <div class="col-md-6" >

                                <input type="file" name="color_img3" id="" class="form-control">
                                <small id="i_error" class="form-text text-muted"></small>

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group" ><!-- form-group Starts -->

                            <label class="col-md-3 control-label" > Color Image_4</label>

                            <div class="col-md-6" >

                                <input type="file" name="color_img4" id="" class="form-control">
                                <small id="i_error" class="form-text text-muted"></small>

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group" ><!-- form-group Starts -->

                            <label class="col-md-3 control-label" > Color Image_5</label>

                            <div class="col-md-6" >

                                <input type="file" name="color_img5" id="" class="form-control">
                                <small id="i_error" class="form-text text-muted"></small>

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group" ><!-- form-group Starts -->

                            <label class="col-md-3 control-label" > Color Image_6</label>

                            <div class="col-md-6" >

                                <input type="file" name="color_img6" id="" class="form-control">

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group" ><!-- form-group Starts -->

                            <label class="col-md-3 control-label" > Color Image_7</label>

                            <div class="col-md-6" >

                                <input type="file" name="color_img7" id="" class="form-control" >

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group" ><!-- form-group Starts -->

                            <label class="col-md-3 control-label" > Product Price </label>

                            <div class="col-md-6" >

                                <input type="number" name="product_price" id="product_price" class="form-control" required >
                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group" ><!-- form-group Starts -->

                            <label class="col-md-3 control-label" > Product Sizes_1 </label>

                            <div class="col-md-2" >

                                <input type="text" name="pro_size1" placeholder="Put Dozen, Stems etc" class="form-control" required >
                            </div>
                            <div class="col-md-2" >

                                <input type="number" name="pro_size1_price" placeholder="Put Price For Dozen" class="form-control" required >
                            </div>
                            <div class="col-md-2" >

                                <input type="text" name="pro_size1_color" placeholder="Name of the Color" class="form-control" required >
                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group" ><!-- form-group Starts -->

                            <label class="col-md-3 control-label" > Product Sizes_2 </label>

                            <div class="col-md-2" >

                                <input type="text" name="pro_size2" placeholder="Put Dozen, Stems etc" class="form-control">
                            </div>
                            <div class="col-md-2" >

                                <input type="number" name="pro_size2_price" placeholder="Put Price For Dozen" class="form-control">
                            </div>
                            <div class="col-md-2" >

                                <input type="text" name="pro_size2_color" placeholder="Name of the Color" class="form-control" >
                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group" ><!-- form-group Starts -->

                            <label class="col-md-3 control-label" > Product Sizes_2 </label>

                            <div class="col-md-2" >

                                <input type="text" name="pro_size3" placeholder="Put Dozen, Stems etc" class="form-control">
                            </div>
                            <div class="col-md-2" >

                                <input type="number" name="pro_size3_price" placeholder="Put Price For Dozen" class="form-control">
                            </div>
                            <div class="col-md-2" >

                                <input type="text" name="pro_size3_color" placeholder="Name of the Color" class="form-control" >
                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group" ><!-- form-group Starts -->

                            <label class="col-md-3 control-label" > Product Sizes_4 </label>

                            <div class="col-md-2" >

                                <input type="text" name="pro_size4" placeholder="Put Dozen, Stems etc" class="form-control">
                            </div>
                            <div class="col-md-2" >

                                <input type="number" name="pro_size4_price" placeholder="Put Price For Dozen" class="form-control">
                            </div>
                            <div class="col-md-2" >

                                <input type="text" name="pro_size4_color" placeholder="Name of the Color" class="form-control" >
                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group" ><!-- form-group Starts -->

                            <label class="col-md-3 control-label" > Product Sizes_5 </label>

                            <div class="col-md-2" >

                                <input type="text" name="pro_size5" placeholder="Put Dozen, Stems etc" class="form-control">
                            </div>
                            <div class="col-md-2" >

                                <input type="number" name="pro_size5_price" placeholder="Put Price For Dozen" class="form-control" >
                            </div>
                            <div class="col-md-2" >

                                <input type="text" name="pro_size5_color" placeholder="Name of the Color" class="form-control" >
                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group" ><!-- form-group Starts -->

                            <label class="col-md-3 control-label" > Product Sizes_6 </label>

                            <div class="col-md-2" >

                                <input type="text" name="pro_size6" placeholder="Put Dozen, Stems etc" class="form-control" >
                            </div>
                            <div class="col-md-2" >

                                <input type="number" name="pro_size6_price" placeholder="Put Price For Dozen" class="form-control" >
                            </div>
                            <div class="col-md-2" >

                                <input type="text" name="pro_size6_color" placeholder="Name of the Color" class="form-control" >
                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group" ><!-- form-group Starts -->

                            <label class="col-md-3 control-label" > Product Tabs </label>

                            <div class="col-md-6" >

                                <ul class="nav nav-tabs"><!-- nav nav-tabs Starts -->

                                    <li class="active">

                                        <a data-toggle="tab" href="#description"> Product Description </a>

                                    </li>

                                </ul><!-- nav nav-tabs Ends -->

                                <div class="tab-content"><!-- tab-content Starts -->

                                    <div id="description" class="tab-pane fade in active"><!-- description tab-pane fade in active Starts -->

                                        <br>

                                        <textarea name="product_desc" class="form-control" rows="15" id="product_desc"  required>

</textarea>
                                        <small id="desc_error" class="form-text text-muted"></small>

                                    </div><!-- description tab-pane fade in active Ends -->


                                </div><!-- tab-content Ends -->

                            </div>

                        </div><!-- form-group Ends -->


                        <div class="form-group" ><!-- form-group Starts -->

                            <label class="col-md-3 control-label" ></label>

                            <div class="col-md-6" >

                                <input type="submit" name="submit" value="Insert Product" class="btn btn-primary form-control" >

                            </div>

                        </div><!-- form-group Ends -->

                    </form><!-- form-horizontal Ends -->

                </div><!-- panel-body Ends -->

            </div><!-- panel panel-default Ends -->

        </div><!-- col-lg-12 Ends -->

    </div><!-- 2 row Ends -->
    <?php
//    session_start();
//    $_SESSION['name']=$_FILES['product_img1']['name'];

    ?>
<script>
    $(document).ready(function(){
        $('input[type="file"]').change(function(e){
            var fileName = e.target.files[0].name;

            document.cookie="image="+fileName;
//           alert('The file "' + fileName +  '" has been selected.');
        });
    });

</script>

<!--    <script src="./js/main.js"></script>-->

    </body>

    </html>

    <?php

    require_once "manage.php";

    $obj=new manage();

    if (isset($_POST['submit'])){
        $productTitle=$_POST['product_title'];
        $category = $_POST['category'];
        $productPrice=$_POST['product_price'];
        $productDescription=$_POST['product_desc'];
        $productImage=$_FILES['product_img1']['name'];
        $frontImage=$_FILES['front_img']['name'];

        $color_img1=$_FILES['color_img1']['name'];
        $color_img2=$_FILES['color_img2']['name'];
        $color_img3=$_FILES['color_img3']['name'];
        $color_img4=$_FILES['color_img4']['name'];
        $color_img5=$_FILES['color_img5']['name'];
        $color_img6=$_FILES['color_img6']['name'];
        $color_img7=$_FILES['color_img7']['name'];

        $pro_size1 = $_POST['pro_size1'];
        $pro_size1_price = $_POST['pro_size1_price'];
        $pro_size1_color = $_POST['pro_size1_color'];
        $pro_size2 = $_POST['pro_size2'];
        $pro_size2_price = $_POST['pro_size2_price'];
        $pro_size2_color = $_POST['pro_size2_color'];
        $pro_size3 = $_POST['pro_size3'];
        $pro_size3_price = $_POST['pro_size3_price'];
        $pro_size3_color = $_POST['pro_size3_color'];
        $pro_size4 = $_POST['pro_size4'];
        $pro_size4_price = $_POST['pro_size4_price'];
        $pro_size4_color = $_POST['pro_size4_color'];
        $pro_size5 = $_POST['pro_size5'];
        $pro_size5_price = $_POST['pro_size5_price'];
        $pro_size5_color = $_POST['pro_size5_color'];
        $pro_size6 = $_POST['pro_size6'];
        $pro_size6_price = $_POST['pro_size6_price'];
        $pro_size6_color = $_POST['pro_size6_color'];


    if ($productDescription!="" && $productPrice!="" && $productPrice!="" && $productImage!=""){
        move_uploaded_file($_FILES['product_img1']['tmp_name'],$_SERVER['DOCUMENT_ROOT']."/Shirley/assets/Product_Images/$productImage");
        move_uploaded_file($_FILES['front_img']['tmp_name'],$_SERVER['DOCUMENT_ROOT']."/Shirley/assets/Product_Images/$frontImage");
        move_uploaded_file($_FILES['color_img1']['tmp_name'],$_SERVER['DOCUMENT_ROOT']."/Shirley/assets/Product_Images/$color_img1");
        move_uploaded_file($_FILES['color_img2']['tmp_name'],$_SERVER['DOCUMENT_ROOT']."/Shirley/assets/Product_Images/$color_img2");
        move_uploaded_file($_FILES['color_img3']['tmp_name'],$_SERVER['DOCUMENT_ROOT']."/Shirley/assets/Product_Images/$color_img3");
        move_uploaded_file($_FILES['color_img4']['tmp_name'],$_SERVER['DOCUMENT_ROOT']."/Shirley/assets/Product_Images/$color_img4");
        move_uploaded_file($_FILES['color_img5']['tmp_name'],$_SERVER['DOCUMENT_ROOT']."/Shirley/assets/Product_Images/$color_img5");
        move_uploaded_file($_FILES['color_img6']['tmp_name'],$_SERVER['DOCUMENT_ROOT']."/Shirley/assets/Product_Images/$color_img6");
        move_uploaded_file($_FILES['color_img7']['tmp_name'],$_SERVER['DOCUMENT_ROOT']."/Shirley/assets/Product_Images/$color_img7");


    }


        $result= $obj->insert_p($productTitle,$category,$productPrice,$productDescription,$productImage,$frontImage,$color_img1,$color_img2,$color_img3,$color_img4,$color_img5,$color_img6,$color_img7,$pro_size1,$pro_size1_price,$pro_size1_color,$pro_size2,$pro_size2_price,$pro_size2_color,$pro_size3,$pro_size3_price,$pro_size3_color,$pro_size4,$pro_size4_price,$pro_size4_color,$pro_size5,$pro_size5_price,$pro_size5_color,$pro_size6,$pro_size6_price,$pro_size6_color);
//    if ($result=="product inserted"){
//echo '<script> alert("data inserted") </script>';
//    }
//else{
//    echo '<script> alert("some thing wrong") </script>';
//
//}

    }


//        $product_img1 = $_FILES['product_img1']['name'];
//        $product_img2 = $_FILES['product_img2']['name'];
//        $product_img3 = $_FILES['product_img3']['name'];
//
//        $temp_name1 = $_FILES['product_img1']['tmp_name'];
//        $temp_name2 = $_FILES['product_img2']['tmp_name'];
//        $temp_name3 = $_FILES['product_img3']['tmp_name'];
//
//        move_uploaded_file($temp_name1,"product_images/$product_img1");
//        move_uploaded_file($temp_name2,"product_images/$product_img2");
//        move_uploaded_file($temp_name3,"product_images/$product_img3");
//
?>
<!--<script> alert("data inserted") </script>-->
