<?php
require_once $_SERVER['DOCUMENT_ROOT']."/Shirley/config.php";

if(isset($_GET['edit_product'])) {
    $id = $_GET['edit_product'];
    $obj = new Database();
    $con = $obj->connect();
    $query = "SELECT * FROM `products` WHERE product_id=:id";
    $stm = $con->prepare($query);
    $stm->execute(
        array(
            'id'=>$id
        )
    );
    $result = $stm->fetch();

    $query1 = "SELECT `category_name` FROM `categories`";
    $stm1 = $con->prepare($query1);
    $stm1->execute();
    $result1 = $stm1->fetchAll();
//    print_r($result1);
}

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

    <div class="form-group"><!-- form-group Starts -->

        <label class="col-md-3 control-label"> Product Title </label>

        <div class="col-md-6">

            <input type="text" name="product_title" id="product_title" value="<?php print_r($result['product_name']); ?>" class="form-control" required>
        </div>

    </div><!-- form-group Ends -->

                    <div class="form-group" ><!-- form-group Starts -->

                        <label class="col-md-3 control-label" > Select A Manufacturer </label>

                        <div class="col-md-6" >

                            <select class="form-control" name="category" required><!-- select manufacturer Starts -->

                                <option> Select A Category </option>

                                <?php

                                foreach ($result1 as $row1) {
                                    $categoty_id = $row1['category_id'];
                                    $categoty_name = $row1['category_name'];
                                    echo "<option value='$categoty_name'>
$categoty_name
</option>";
                                }

                                ?>

                            </select><!-- select manufacturer Ends -->

                        </div>

                    </div><!-- form-group Ends -->


                    <div class="form-group"><!-- form-group Starts -->

        <label class="col-md-3 control-label"> Product Image</label>

        <div class="col-md-6">

            <input type="file" name="product_img1" id="" class="form-control">
            <br><img src=".././assets/Product_Images/<?php  print_r($result['product_image']) ?>" width="70" height="70" >
            <?php
            $product_image = $result['product_image'];
            ?>
        </div>

    </div><!-- form-group Ends -->

    <div class="form-group"><!-- form-group Starts -->

        <label class="col-md-3 control-label"> Front Image</label>

        <div class="col-md-6">
            <input type="file" name="front_img" id="" class="form-control">
            <br><img src="../assets/Product_Images/<?php  print_r($result['front_img']) ?>" width="70" height="70" >
            <?php
            $front_img = $result['front_img'];
            ?>
        </div>

    </div><!-- form-group Ends -->

    <div class="form-group"><!-- form-group Starts -->

        <label class="col-md-3 control-label"> Color Image_1</label>

        <div class="col-md-6">

            <input type="file" name="color_img1" id="" class="form-control">
            <br><img src="../assets/Product_Images/<?php  print_r($result['image1']) ?>" width="70" height="70" >
            <?php
            $image1 = $result['image1'];
            ?>

        </div>

    </div><!-- form-group Ends -->

    <div class="form-group"><!-- form-group Starts -->

        <label class="col-md-3 control-label"> Color Image_2</label>

        <div class="col-md-6">

            <input type="file" name="color_img2" id="" class="form-control">
            <br><img src="../assets/Product_Images/<?php  print_r($result['image2']) ?>" width="70" height="70" >
            <?php
            $image2 = $result['image2'];
            ?>

        </div>

    </div><!-- form-group Ends -->

    <div class="form-group"><!-- form-group Starts -->

        <label class="col-md-3 control-label"> Color Image_3</label>

        <div class="col-md-6">

            <input type="file" name="color_img3" id="" class="form-control">
            <br><img src="../assets/Product_Images/<?php  print_r($result['image3']) ?>" width="70" height="70" >
            <?php
            $image3 = $result['image3'];
            ?>

        </div>

    </div><!-- form-group Ends -->

    <div class="form-group"><!-- form-group Starts -->

        <label class="col-md-3 control-label"> Color Image_4</label>

        <div class="col-md-6">

            <input type="file" name="color_img4" id="" class="form-control">
            <br><img src="../assets/Product_Images/<?php  print_r($result['image4']) ?>" width="70" height="70" >
            <?php
            $image4 = $result['image4'];
            ?>

        </div>

    </div><!-- form-group Ends -->

    <div class="form-group"><!-- form-group Starts -->

        <label class="col-md-3 control-label"> Color Image_5</label>

        <div class="col-md-6">

            <input type="file" name="color_img5" id="" class="form-control">
            <br><img src="../assets/Product_Images/<?php  print_r($result['image5']) ?>" width="70" height="70" >
            <?php
            $image5 = $result['image5'];
            ?>

        </div>

    </div><!-- form-group Ends -->

    <div class="form-group"><!-- form-group Starts -->

        <label class="col-md-3 control-label"> Color Image_6</label>

        <div class="col-md-6">

            <input type="file" name="color_img6" id="" class="form-control">
            <br><img src="../assets/Product_Images/<?php  print_r($result['image6']) ?>" width="70" height="70" >
            <?php
            $image6 = $result['image6'];
            ?>
        </div>

    </div><!-- form-group Ends -->

    <div class="form-group"><!-- form-group Starts -->

        <label class="col-md-3 control-label"> Color Image_7</label>

        <div class="col-md-6">

            <input type="file" name="color_img7" id="" class="form-control">
            <br><img src="../assets/Product_Images/<?php  print_r($result['image7']) ?>" width="70" height="70" >
            <?php
            $image7 = $result['image7'];
            ?>

        </div>

    </div><!-- form-group Ends -->

    <div class="form-group"><!-- form-group Starts -->

        <label class="col-md-3 control-label"> Product Price </label>

        <div class="col-md-6">

            <input type="number" name="product_price" id="product_price" class="form-control" value="<?php  print_r($result['product_price']) ?>">
        </div>

    </div><!-- form-group Ends -->

    <div class="form-group"><!-- form-group Starts -->

        <label class="col-md-3 control-label"> Product Sizes_1 </label>

        <div class="col-md-2">

            <input type="text" name="pro_size1" placeholder="Put Dozen, Stems etc" class="form-control" value="<?php  print_r($result['pro_size1']) ?>">
        </div>
        <div class="col-md-2">

            <input type="number" name="pro_size1_price" placeholder="Put Price For Dozen" class="form-control" value="<?php  print_r($result['pro_size1_price']) ?>">
        </div>
        <div class="col-md-2">

            <input type="text" name="pro_size1_color" placeholder="Name of the Color" class="form-control" value="<?php  print_r($result['pro_size1_color']) ?>">
        </div>

    </div><!-- form-group Ends -->

    <div class="form-group"><!-- form-group Starts -->

        <label class="col-md-3 control-label"> Product Sizes_2 </label>

        <div class="col-md-2">

            <input type="text" name="pro_size2" placeholder="Put Dozen, Stems etc" class="form-control" value="<?php  print_r($result['pro_size2']) ?>">
        </div>
        <div class="col-md-2">

            <input type="number" name="pro_size2_price" placeholder="Put Price For Dozen" class="form-control" value="<?php  print_r($result['pro_size2_price']) ?>">
        </div>
        <div class="col-md-2">

            <input type="text" name="pro_size2_color" placeholder="Name of the Color" class="form-control" value="<?php  print_r($result['pro_size2_color']) ?>">
        </div>

    </div><!-- form-group Ends -->

    <div class="form-group"><!-- form-group Starts -->

        <label class="col-md-3 control-label"> Product Sizes_2 </label>

        <div class="col-md-2">

            <input type="text" name="pro_size3" placeholder="Put Dozen, Stems etc" class="form-control" value="<?php  print_r($result['pro_size3']) ?>">
        </div>
        <div class="col-md-2">

            <input type="number" name="pro_size3_price" placeholder="Put Price For Dozen" class="form-control" value="<?php  print_r($result['pro_size3_price']) ?>">
        </div>
        <div class="col-md-2">

            <input type="text" name="pro_size3_color" placeholder="Name of the Color" class="form-control" value="<?php  print_r($result['pro_size3_color']) ?>">
        </div>

    </div><!-- form-group Ends -->

    <div class="form-group"><!-- form-group Starts -->

        <label class="col-md-3 control-label"> Product Sizes_4 </label>

        <div class="col-md-2">

            <input type="text" name="pro_size4" placeholder="Put Dozen, Stems etc" class="form-control" value="<?php  print_r($result['pro_size4']) ?>">
        </div>
        <div class="col-md-2">

            <input type="number" name="pro_size4_price" placeholder="Put Price For Dozen" class="form-control" value="<?php  print_r($result['pro_size4_price']) ?>">
        </div>
        <div class="col-md-2">

            <input type="text" name="pro_size4_color" placeholder="Name of the Color" class="form-control" value="<?php  print_r($result['pro_size4_color']) ?>">
        </div>

    </div><!-- form-group Ends -->

    <div class="form-group"><!-- form-group Starts -->

        <label class="col-md-3 control-label"> Product Sizes_5 </label>

        <div class="col-md-2">

            <input type="text" name="pro_size5" placeholder="Put Dozen, Stems etc" class="form-control" value="<?php  print_r($result['pro_size5']) ?>">
        </div>
        <div class="col-md-2">

            <input type="number" name="pro_size5_price" placeholder="Put Price For Dozen" class="form-control" value="<?php  print_r($result['pro_size5_price']) ?>">
        </div>
        <div class="col-md-2">

            <input type="text" name="pro_size5_color" placeholder="Name of the Color" class="form-control" value="<?php  print_r($result['pro_size5_color']) ?>">
        </div>

    </div><!-- form-group Ends -->

    <div class="form-group"><!-- form-group Starts -->

        <label class="col-md-3 control-label"> Product Sizes_6 </label>

        <div class="col-md-2">

            <input type="text" name="pro_size6" placeholder="Put Dozen, Stems etc" class="form-control" value="<?php  print_r($result['pro_size6']) ?>">
        </div>
        <div class="col-md-2">

            <input type="number" name="pro_size6_price" placeholder="Put Price For Dozen" class="form-control" value="<?php  print_r($result['pro_size6_price']) ?>">
        </div>
        <div class="col-md-2">

            <input type="text" name="pro_size6_color" placeholder="Name of the Color" class="form-control" value="<?php  print_r($result['pro_size6_color']) ?>">
        </div>

    </div><!-- form-group Ends -->

    <div class="form-group"><!-- form-group Starts -->

        <label class="col-md-3 control-label"> Product Tabs </label>

        <div class="col-md-6">

            <ul class="nav nav-tabs"><!-- nav nav-tabs Starts -->

                <li class="active">

                    <a data-toggle="tab" href="#description"> Product Description </a>

                </li>

            </ul><!-- nav nav-tabs Ends -->

            <div class="tab-content"><!-- tab-content Starts -->

                <div id="description" class="tab-pane fade in active">
                    <!-- description tab-pane fade in active Starts -->

                    <br>

                    <textarea name="product_desc" class="form-control" rows="15" id="product_desc" required>
<?php  print_r($result['product_description']) ?>
</textarea>
                    <small id="desc_error" class="form-text text-muted"></small>

                </div><!-- description tab-pane fade in active Ends -->


            </div><!-- tab-content Ends -->

        </div>

    </div><!-- form-group Ends -->


    <div class="form-group"><!-- form-group Starts -->

        <label class="col-md-3 control-label"></label>

        <div class="col-md-6">

            <input type="submit" name="submit" value="Update Product" class="btn btn-primary form-control">

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
    $productPrice=$_POST['product_price'];
    $productDescription=$_POST['product_desc'];
    $productImage=$_FILES['product_img1']['name'];
    $frontImage=$_FILES['front_img']['name'];
    $category = $_POST['category'];


    $color_img1=$_FILES['color_img1']['name'];
    $color_img2=$_FILES['color_img2']['name'];
    $color_img3=$_FILES['color_img3']['name'];
    $color_img4=$_FILES['color_img4']['name'];
    $color_img5=$_FILES['color_img5']['name'];
    $color_img6=$_FILES['color_img6']['name'];
    $color_img7=$_FILES['color_img7']['name'];



//    if (empty($productImage) || empty($frontImage) || empty($color_img1) || empty($color_img2) || empty($color_img3)
//    || empty($color_img4) || empty($color_img5) || empty($color_img6) || empty($color_img7)){
//        $productImage = $product_image;
//        $frontImage = $front_img;
//        $color_img1 = $image1;
//        $color_img2 = $image2;
//        $color_img3 = $image3;
//        $color_img4 = $image4;
//        $color_img5 = $image5;
//        $color_img6 = $image6;
//        $color_img7 = $image7;
//    }
    if (empty($productImage))
        $productImage = $product_image;
    if (empty($frontImage))
        $frontImage = $front_img;
    if (empty($color_img1))
        $color_img1 = $image1;
    if (empty($color_img2))
        $color_img2 = $image2;
    if (empty($color_img3))
        $color_img3 = $image3;
    if (empty($color_img4))
        $color_img4 = $image4;
    if (empty($color_img5))
        $color_img5 = $image5;
    if (empty($color_img6))
        $color_img6 = $image6;
    if (empty($color_img7))
        $color_img7 = $image7;

//    echo $productImage;
//    exit();

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


    $result= $obj->update_p($productTitle,$productPrice,$category,$productDescription,$productImage,$frontImage,$color_img1,$color_img2,$color_img3,$color_img4,$color_img5,$color_img6,$color_img7,$pro_size1,$pro_size1_price,$pro_size1_color,$pro_size2,$pro_size2_price,$pro_size2_color,$pro_size3,$pro_size3_price,$pro_size3_color,$pro_size4,$pro_size4_price,$pro_size4_color,$pro_size5,$pro_size5_price,$pro_size5_color,$pro_size6,$pro_size6_price,$pro_size6_color,$id);

}

