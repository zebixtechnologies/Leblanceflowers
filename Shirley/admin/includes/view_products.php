<?php
require_once $_SERVER['DOCUMENT_ROOT']."/Shirley/config.php";
$db = new Database();
$con = $db->connect();

$query = "Select * From products";
$stm=$con->prepare($query);
$stm->execute();
$result=$stm->fetchAll();


?>
<div class="row"><!--  1 row Starts -->

    <div class="col-lg-12" ><!-- col-lg-12 Starts -->

        <ol class="breadcrumb" ><!-- breadcrumb Starts -->

            <li class="active" >

                <i class="fa fa-dashboard"></i> Dashboard / View Products

            </li>

        </ol><!-- breadcrumb Ends -->

    </div><!-- col-lg-12 Ends -->

</div><!--  1 row Ends -->

<div class="row" ><!-- 2 row Starts -->

    <div class="col-lg-12" ><!-- col-lg-12 Starts -->

        <div class="panel panel-default" ><!-- panel panel-default Starts -->

            <div class="panel-heading" ><!-- panel-heading Starts -->

                <h3 class="panel-title" ><!-- panel-title Starts -->

                    <i class="fa fa-money fa-fw" ></i> View Products

                </h3><!-- panel-title Ends -->


            </div><!-- panel-heading Ends -->

            <div class="panel-body" ><!-- panel-body Starts -->

                <div class="table-responsive" ><!-- table-responsive Starts -->

                    <table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

                        <thead>

                        <tr>
                            <th>Pro ID</th>
                            <th>Pro Title</th>
                            <th>Pro Image1</th>
                            <th>Pro Image2</th>
                            <th>Pro Image3...</th>
                            <th>Pro Price</th>
                            <th>Pro Date</th>
                            <th>Pro Size1</th>
                            <th>Pro Size1Price</th>
                            <th>Pro Size2</th>
                            <th>Pro Size2Price...</th>
                            <th>Edit</th>
                            <th>Delete</th>




                        </tr>

                        </thead>
                        <?php
                        $i=0;
                        foreach ($result as $row) {
                            $i++;


                            ?>
                            <tbody>


                            <tr>

                                <td><?php echo $i ?></td>

                                <td><?php echo substr($row['product_name'],0,18 ) ?></td>

                                <td><img src=".././assets/Product_Images/<?php echo $row['product_image'] ?>" width="60"
                                         height="60"></td>
                                <td><img src=".././assets/Product_Images/<?php echo $row['image1'] ?>" width="60"
                                         height="60"></td>
                                <td><img src=".././assets/Product_Images/<?php echo $row['image2'] ?>" width="60"
                                         height="60"></td>


                                <td>$<?php echo $row['product_price']?></td>


                                <td><?php echo $row['product_date'] ?></td>

                                <td><?php echo $row['pro_size1'] ?></td>
                                <td><?php echo $row['pro_size1_price'] ?></td>
                                <td><?php echo $row['pro_size2'] ?></td>
                                <td><?php echo $row['pro_size2_price'] ?></td>
                                <td>
                                    <a href="dashboard.php?edit_product=<?php echo $row['product_id'] ?>">
                                        <i class="fa fa-pencil"> </i> Edit
                                    </a>
                                </td>
                                <td>
                                    <a href="dashboard.php?delete_product=<?php echo $row['product_id'] ?>">
                                        <i class="fa fa-trash-o"> </i> Delete
                                    </a>
                                </td>

                            </tr>


                            </tbody>
                            <?php
                        }
                        ?>

                    </table><!-- table table-bordered table-hover table-striped Ends -->

                </div><!-- table-responsive Ends -->

            </div><!-- panel-body Ends -->

        </div><!-- panel panel-default Ends -->

    </div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->


