<?php
/**
 * Created by PhpStorm.
 * User: salman
 * Date: 5/12/2019
 * Time: 3:41 PM
 */

require_once $_SERVER['DOCUMENT_ROOT']."/Shirley/config.php";
$db = new Database();
$con = $db->connect();

$query = "Select * From fresh_flower";
$stm=$con->prepare($query);
$stm->execute();
$result=$stm->fetchAll();

?>


    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'#product_desc,#product_features' });</script>
    <div class="row"><!-- 1 row Starts -->

        <div class="col-lg-12"><!-- col-lg-12 Starts -->

            <ol class="breadcrumb"><!-- breadcrumb Starts  --->

                <li class="active">

                    <i class="fa fa-dashboard"></i> Dashboard / Edit Description

                </li>

            </ol><!-- breadcrumb Ends  --->

        </div><!-- col-lg-12 Ends -->

    </div><!-- 1 row Ends -->


    <div class="row"><!-- 2 row Starts -->

        <div class="col-lg-12"><!-- col-lg-12 Starts -->

            <div class="panel panel-default"><!-- panel panel-default Starts -->

                <div class="panel-heading"><!-- panel-heading Starts -->

                    <h3 class="panel-title"><!-- panel-title Starts -->

                        <i class="fa fa-money fa-fw"></i> Edit QUALITY Flower

                    </h3><!-- panel-title Ends -->

                </div><!-- panel-heading Ends -->
                <h3 class="text-center">Banner 1</h3>
                <?php

                foreach ($result as $row) {

                ?>
                <div class="panel-body"><!-- panel-body Starts -->

                    <form class="form-horizontal" id="form_poduct" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

                        <div class="form-group"><!-- form-group Starts -->

                            <label class="col-md-3 control-label">Banner_1 Titles </label>

                            <div class="col-md-3">
                                <input type="text" name="banner1_title" id="product_title" placeholder="Enter Title"
                                       class="form-control" required value="<?php echo $row['banner1_title']   ?>">
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="banner1_title_2" id="product_title" placeholder="Enter Title"
                                       class="form-control" required value="<?php echo $row['banner1_title_2']   ?>">
                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group"><!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Edit Banner_1 Image</label>

                            <div class="col-md-6">

                                <input type="file" name="banner1_image" class="form-control">
                                <br><img src=".././assets/Product_Images/<?php echo $row['banner1_image']; ?>" width="300" height="120" >

                            </div>
                            <?php
                            $banner1_images = $row["banner1_image"];

                            ?>
                        </div><!-- form-group Ends -->
                        <h3 class="text-center">Banner 2</h3>
                        <div class="form-group"><!-- form-group Starts -->

                            <label class="col-md-3 control-label">Banner_2 Titles </label>

                            <div class="col-md-3">
                                <input type="text" name="banner2_title" id="product_title" placeholder="Enter Title"
                                       class="form-control" required value="<?php echo $row['banner2_title']   ?>">
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="banner2_title_2" id="product_title" placeholder="Enter Title"
                                       class="form-control" required value="<?php echo $row['banner2_title_2']   ?>">
                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group"><!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Edit Banner_2 Image</label>

                            <div class="col-md-6">

                                <input type="file" name="banner2_image" class="form-control">
                                <br><img src=".././assets/Product_Images/<?php echo $row['banner2_image']; ?>" width="300" height="120" >

                            </div>
                            <?php
                            $banner2_images = $row["banner2_image"];

                            ?>
                        </div><!-- form-group Ends -->
                        <h3 class="text-center">Banner 3</h3>
                        <div class="form-group"><!-- form-group Starts -->

                            <label class="col-md-3 control-label">Banner_3 Titles </label>

                            <div class="col-md-3">
                                <input type="text" name="banner3_title" id="product_title" placeholder="Enter Title"
                                       class="form-control" required value="<?php echo $row['banner3_title']   ?>">
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="banner3_title_2" id="product_title" placeholder="Enter Title"
                                       class="form-control" required value="<?php echo $row['banner3_title_2']   ?>">
                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group"><!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Edit Banner_3 Image</label>

                            <div class="col-md-6">

                                <input type="file" name="banner3_image" class="form-control">
                                <br><img src=".././assets/Product_Images/<?php echo $row['banner3_image']; ?>" width="300" height="120" >

                            </div>
                            <?php
                            $banner3_images = $row["banner3_image"];

                            ?>
                        </div><!-- form-group Ends -->
                        <h3 class="text-center">Banner 4</h3>
                        <div class="form-group"><!-- form-group Starts -->

                            <label class="col-md-3 control-label">Banner_4 Titles </label>

                            <div class="col-md-3">
                                <input type="text" name="banner4_title" id="product_title" placeholder="Enter Title"
                                       class="form-control" required value="<?php echo $row['banner4_title']   ?>">
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="banner4_title_2" id="product_title" placeholder="Enter Title"
                                       class="form-control" required value="<?php echo $row['banner4_title_2']   ?>">
                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group"><!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Edit Banner_4 Image</label>

                            <div class="col-md-6">

                                <input type="file" name="banner4_image" class="form-control">
                                <br><img src=".././assets/Product_Images/<?php echo $row['banner4_image']; ?>" width="300" height="120" >

                            </div>
                            <?php
                            $banner4_images = $row["banner4_image"];

                            ?>
                        </div><!-- form-group Ends -->

                            <h3 class="text-center">Last Banner</h3>
                        <div class="form-group"><!-- form-group Starts -->

                            <label class="col-md-3 control-label">Top Title </label>

                            <div class="col-md-6">

                                <input type="text" name="top_title" placeholder="Enter Title"
                                       class="form-control" required value="<?php echo $row['top_title']   ?>">
                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group"><!-- form-group Starts -->

                            <label class="col-md-3 control-label">Title </label>

                            <div class="col-md-6">

                                <input type="text" name="product_title" id="product_title" placeholder="Enter Title"
                                       class="form-control" required value="<?php echo $row['title']   ?>">
                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group"><!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Flower Tabs </label>

                            <div class="col-md-6">

                                <ul class="nav nav-tabs"><!-- nav nav-tabs Starts -->

                                    <li class="active">

                                        <a data-toggle="tab" href="#description"> Flower Description </a>

                                    </li>

                                </ul><!-- nav nav-tabs Ends -->

                                <div class="tab-content"><!-- tab-content Starts -->

                                    <div id="description" class="tab-pane fade in active">
                                        <!-- description tab-pane fade in active Starts -->

                                        <br>

                                        <textarea name="edit_flower"  class="form-control" rows="15" id="product_desc"
                                                  required>
                                        <?php
                                        echo utf8_encode($row['des']);
                                        ?>
                                    </textarea>
                                        <small id="desc_error" class="form-text text-muted"></small>

                                    </div><!-- description tab-pane fade in active Ends -->


                                </div><!-- tab-content Ends -->

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group"><!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Edit Image</label>

                            <div class="col-md-6">

                                <input type="file" name="product_img1" class="form-control">
                                <br><img src=".././assets/Product_Images/<?php echo $row['img']; ?>" width="300" height="120" >

                            </div>
                            <?php
                            $title_name = $row["img"];

                            ?>
                        </div><!-- form-group Ends -->
                        <?php
                        }
                        ?>
                        <div class="form-group" ><!-- form-group Starts -->

                            <label class="col-md-3 control-label" ></label>

                            <div class="col-md-6" >

                                <input type="submit" name="submit" value="Update" class="btn btn-primary form-control" >

                            </div>

                        </div><!-- form-group Ends -->
                    </form>

                </div><!-- panel-body Ends -->

            </div><!-- panel panel-default Ends -->

        </div><!-- col-lg-12 Ends -->

    </div><!-- 2 row Ends -->

<?php

if(isset($_POST['submit'])){
    $product_title = $_POST['product_title'];
    $edit_flower = $_POST['edit_flower'];
    $banner1_title = $_POST['banner1_title'];
    $banner1_title_2 = $_POST['banner1_title_2'];
    $banner2_title = $_POST['banner2_title'];
    $banner2_title_2 = $_POST['banner2_title_2'];
    $banner3_title = $_POST['banner3_title'];
    $banner3_title_2 = $_POST['banner3_title_2'];
    $banner4_title = $_POST['banner4_title'];
    $banner4_title_2 = $_POST['banner4_title_2'];
    $top_title = $_POST['top_title'];

    $product_img1 = $_FILES['product_img1']['name'];
    $temp_name1 = $_FILES['product_img1']['tmp_name'];

    $banner1_image = $_FILES['banner1_image']['name'];
    $temp_name2 = $_FILES['banner1_image']['tmp_name'];
    $banner2_image = $_FILES['banner2_image']['name'];
    $temp_name3 = $_FILES['banner2_image']['tmp_name'];
    $banner3_image = $_FILES['banner3_image']['name'];
    $temp_name4 = $_FILES['banner3_image']['tmp_name'];
    $banner4_image = $_FILES['banner4_image']['name'];
    $temp_name5 = $_FILES['banner4_image']['tmp_name'];

    if (empty($product_img1)){
        $product_img1 = $title_name;
    }
    if (empty($banner1_image)){
        $banner1_image = $banner1_images;
    }
    if (empty($banner2_image)){
        $banner2_image = $banner2_images;
    }
    if (empty($banner3_image)){
        $banner3_image = $banner3_images;
    }
    if (empty($banner4_image)){
        $banner4_image = $banner4_images;
    }
    move_uploaded_file($temp_name1,$_SERVER['DOCUMENT_ROOT']."/Shirley/assets/Product_Images/$product_img1");
    move_uploaded_file($temp_name2,$_SERVER['DOCUMENT_ROOT']."/Shirley/assets/Product_Images/$banner1_image");
    move_uploaded_file($temp_name3,$_SERVER['DOCUMENT_ROOT']."/Shirley/assets/Product_Images/$banner2_image");
    move_uploaded_file($temp_name4,$_SERVER['DOCUMENT_ROOT']."/Shirley/assets/Product_Images/$banner3_image");
    move_uploaded_file($temp_name5,$_SERVER['DOCUMENT_ROOT']."/Shirley/assets/Product_Images/$banner4_image");

    $sql = "UPDATE `fresh_flower` SET `title`='$product_title',`des`='$edit_flower',`img`='$product_img1' WHERE 1";

    $sql = "UPDATE `fresh_flower` SET `banner1_title`='$banner1_title',`banner1_title_2`='$banner1_title_2',`banner1_image`='$banner1_image',
`banner2_title`='$banner2_title',`banner2_title_2`='$banner2_title_2',`banner2_image`='$banner2_image',`banner3_title`='$banner3_title',
`banner3_title_2`='$banner3_title_2',`banner3_image`='$banner3_image',`banner4_title`='$banner4_title',`banner4_title_2`='$banner4_title_2',
`banner4_image`='$banner4_image',`title`='$product_title',`top_title`='$top_title',`des`='$edit_flower',`img`='$product_img1' WHERE 1";
    $stm=$con->prepare($sql);
    $run = $stm->execute();
    if ($run){
        echo "<script>window.open('http://localhost/Shirley/admin/dashboard.php?edit_flower','_self')</script>";

    }

}
