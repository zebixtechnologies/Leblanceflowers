<?php
/**
 * Created by PhpStorm.
 * User: salman
 * Date: 5/12/2019
 * Time: 3:41 PM
 */
require_once $_SERVER['DOCUMENT_ROOT']."/Shirley/admin/includes/manage.php";
$obj=new manage();

$orderData=$obj->viewAllOrders1();
?>
    <div class="row"><!-- 1 row Starts -->

        <div class="col-lg-12"><!-- col-lg-12 Starts -->

            <ol class="breadcrumb"><!-- breadcrumb Starts  --->

                <li class="active">

                    <i class="fa fa-dashboard"></i> Dashboard / View Orders

                </li>

            </ol><!-- breadcrumb Ends  --->

        </div><!-- col-lg-12 Ends -->

    </div><!-- 1 row Ends -->


    <div class="row"><!-- 2 row Starts -->

        <div class="col-lg-12"><!-- col-lg-12 Starts -->

            <div class="panel panel-default"><!-- panel panel-default Starts -->

                <div class="panel-heading"><!-- panel-heading Starts -->

                    <h3 class="panel-title"><!-- panel-title Starts -->

                        <i class="fa fa-money fa-fw"></i> View Orders

                    </h3><!-- panel-title Ends -->

                </div><!-- panel-heading Ends -->

                <div class="panel-body"><!-- panel-body Starts -->

                    <div class="table-responsive"><!-- table-responsive Starts -->

                        <table class="table table-bordered table-hover table-striped"><!-- table table-bordered table-hover table-striped Starts -->

                            <thead><!-- thead Starts -->

                            <tr>

                                <th>Order No:</th>
                                <th>Invoice No:</th>
                                <th>Customer NAME:</th>
                                <th>Customer Email:</th>
                                <th>Amount Due:</th>
                                <th>Paid Amount:</th>
                                <th>Status:</th>
                                <th>View:</th>


                            </tr>

                            </thead><!-- thead Ends -->


                            <tbody><!-- tbody Starts -->
                            <?php
                            foreach ($orderData as $result) {


                                ?>

                                <tr>

                                    <td><?php echo $result['id'] ?></td>


                                    <td bgcolor="yellow"><?php echo $result['invoice_no'] ?></td>

                                    <td><?php echo $result['name'] ?></td>

                                    <td><?php echo $result['email'] ?></td>

                                    <td><?php echo $result['due_amount'] ?></td>

                                    <td>
                                        <?php
                                        echo $result['amount_paid']

                                        ?>
                                    </td>

                                    <td> <a href="update_order_status.php?invoice_no=<?php echo $result['invoice_no']?>&p=view" >
                                            <?php echo $result['status']?></a></td>
                                    <td><a href="view_order_details.php?invoice_no=<?php echo $result['invoice_no']?>" target="_blank">View</a> </td>



                                </tr>
                                <?php
                            }
                            ?>


                            </tbody><!-- tbody Ends -->

                        </table><!-- table table-bordered table-hover table-striped Ends -->

                    </div><!-- table-responsive Ends -->

                </div><!-- panel-body Ends -->

            </div><!-- panel panel-default Ends -->

        </div><!-- col-lg-12 Ends -->

    </div><!-- 2 row Ends -->

