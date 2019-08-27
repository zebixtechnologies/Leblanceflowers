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

$query = "Select * From categories";
$stm=$con->prepare($query);
$stm->execute();
$result=$stm->fetchAll();

if (isset($_GET["msg"]) AND !empty($_GET["msg"])) {
    ?>
    <div class="alert alert-success alert-dismissible  show" role="alert">
        <?php echo $_GET["msg"]; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php
}
?>
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'#product_desc,#product_features' });</script>
    <div class="row"><!-- 1 row Starts -->

        <div class="col-lg-12"><!-- col-lg-12 Starts -->

            <ol class="breadcrumb"><!-- breadcrumb Starts  --->

                <li class="active">

                    <i class="fa fa-dashboard"></i> Dashboard / Each Category

                </li>

            </ol><!-- breadcrumb Ends  --->

        </div><!-- col-lg-12 Ends -->

    </div><!-- 1 row Ends -->


    <div class="row"><!-- 2 row Starts -->

        <div class="col-lg-12"><!-- col-lg-12 Starts -->

            <div class="panel panel-default"><!-- panel panel-default Starts -->

                <div class="panel-heading"><!-- panel-heading Starts -->

                    <h3 class="panel-title"><!-- panel-title Starts -->

                        <i class="fa fa-money fa-fw"></i> Each Category

                    </h3><!-- panel-title Ends -->

                </div><!-- panel-heading Ends -->
                <?php

//                foreach ($result as $row) {

                ?>
                <div class="panel-body"><!-- panel-body Starts -->

                    <form class="form-horizontal" id="form_poduct" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

                            <div class="form-group"><!-- form-group Starts -->

                                <label class="col-md-3 control-label"> Select A Manufacturer </label>

                                <div class="col-md-6">

                                    <select class="form-control" id="category_dropdown" name="category_dropdown" required>
                                        <!-- select manufacturer Starts -->

<!--                                        <option> Select A Category</option>-->

                                        <?php
                                        foreach ($result as $row) {

                                        $categoty_id = $row['category_id'];
                                        $categoty_name = $row['category_name'];
                                        echo "<option value='$categoty_id'>
                                           $categoty_name
                                        </option>";


                                        }
                                        ?>

                                    </select><!-- select manufacturer Ends -->
                                </div>
                            </div><!-- form-group Ends -->

                        <div class="form-group"><!-- form-group Starts -->

                            <label class="col-md-3 control-label">Category Title </label>

                            <div class="col-md-6">

                                <input type="text" name="product_title" id="product_title" placeholder="Enter Title"
                                       class="form-control" required value="<?php    ?>">
                            </div>

                        </div><!-- form-group Ends -->


                        <div class="form-group"><!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Edit Image</label>

                            <div class="col-md-6">

                                <input type="file" name="category_image" class="form-control" required>
<!--                                <br><img src=".././assets/Product_Images/--><?php //?><!--" width="300" height="120" >-->

                            </div>
                            <?php
//                            $title_name = $row["img"];

                            ?>
                        </div><!-- form-group Ends -->

                        <div class="form-group"><!-- form-group Starts -->

                            <label class="col-md-3 control-label">Category Footer </label>

                            <div class="col-md-6">

                                <input type="text" name="category_footer" placeholder="Enter Title"
                                       class="form-control" required value="<?php   ?>">
                            </div>

                        </div><!-- form-group Ends -->
                        <?php

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
    $category_dropdown = $_POST['category_dropdown'];
    $product_title = $_POST['product_title'];
    $category_footer = $_POST['category_footer'];

    $category_image = $_FILES['category_image']['name'];
    $temp_name1 = $_FILES['category_image']['tmp_name'];

    move_uploaded_file($temp_name1,$_SERVER['DOCUMENT_ROOT']."/Shirley/assets/Banners/$category_image");

    $sql = "UPDATE `categories` SET `category_header_text`='$product_title', `category_image`='$category_image', 
`category_footer_text`='$category_footer' WHERE category_id='$category_dropdown'";

    $stm=$con->prepare($sql);
    $run = $stm->execute();
    if ($run){
        echo "<script>window.open('http://localhost/Shirley/admin/dashboard.php?each_category&msg=Category Inserted Successfully','_self')</script>";

    }

}
?>
<!--<script>-->
<!--    function Validate() {-->
<!--        var e = document.getElementById("category_dropdown");-->
<!--        var strUser = e.options[e.selectedIndex].value;-->
<!--        var strUser1 = e.options[e.selectedIndex].text;-->
<!---->
<!--        if (strUser==0){-->
<!--            alert('Please Select a User');-->
<!--        }else {-->
<!--            alert('sdfs');-->
<!--        }-->
<!--    }-->
<!--</script>-->
