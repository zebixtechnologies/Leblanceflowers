
<?php
require_once $_SERVER['DOCUMENT_ROOT']."/Shirley/admin/includes/manage.php";
$obj=new manage();

$orderData=$obj->viewAllOrders();

?>
    <div class="row"><!-- 1 row Starts -->

        <div class="col-lg-12"><!-- col-lg-12 Starts -->

            <h1 class="page-header">Dashboard</h1>

            <ol class="breadcrumb"><!-- breadcrumb Starts -->

                <li class="active">

                    <i class="fa fa-dashboard"></i> Dashboard

                </li>

            </ol><!-- breadcrumb Ends -->

        </div><!-- col-lg-12 Ends -->

    </div><!-- 1 row Ends -->




    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

        <div class="panel panel-green"><!-- panel panel-green Starts -->

            <div class="panel-heading"><!-- panel-heading Starts -->

                <div class="row"><!-- panel-heading row Starts -->

                    <div class="col-xs-3"><!-- col-xs-3 Starts -->

                        <i class="fa fa-comments fa-5x"> </i>

                    </div><!-- col-xs-3 Ends -->

                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

                        <div class="huge"> 12 </div>

                        <div>Customers</div>

                    </div><!-- col-xs-9 text-right Ends -->

                </div><!-- panel-heading row Ends -->

            </div><!-- panel-heading Ends -->

            <a href="#">

                <div class="panel-footer"><!-- panel-footer Starts -->

                    <span class="pull-left"> View Details </span>

                    <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

                    <div class="clearfix"></div>

                </div><!-- panel-footer Ends -->

            </a>

        </div><!-- panel panel-green Ends -->

    </div><!-- col-lg-3 col-md-6 Ends -->


    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

        <div class="panel panel-yellow"><!-- panel panel-yellow Starts -->

            <div class="panel-heading"><!-- panel-heading Starts -->

                <div class="row"><!-- panel-heading row Starts -->

                    <div class="col-xs-3"><!-- col-xs-3 Starts -->

                        <i class="fa fa-shopping-cart fa-5x"> </i>

                    </div><!-- col-xs-3 Ends -->

                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

                        <div class="huge"> 12 </div>

                        <div>Products Categories</div>

                    </div><!-- col-xs-9 text-right Ends -->

                </div><!-- panel-heading row Ends -->

            </div><!-- panel-heading Ends -->

            <a href="#">

                <div class="panel-footer"><!-- panel-footer Starts -->

                    <span class="pull-left"> View Details </span>

                    <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

                    <div class="clearfix"></div>

                </div><!-- panel-footer Ends -->

            </a>

        </div><!-- panel panel-yellow Ends -->

    </div><!-- col-lg-3 col-md-6 Ends -->


    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

        <div class="panel panel-red"><!-- panel panel-red Starts -->

            <div class="panel-heading"><!-- panel-heading Starts -->

                <div class="row"><!-- panel-heading row Starts -->

                    <div class="col-xs-3"><!-- col-xs-3 Starts -->

                        <i class="fa fa-support fa-5x"> </i>

                    </div><!-- col-xs-3 Ends -->

                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

                        <div class="huge"> 12 </div>

                        <div>Orders</div>

                    </div><!-- col-xs-9 text-right Ends -->

                </div><!-- panel-heading row Ends -->

            </div><!-- panel-heading Ends -->

            <a href="dashboard.php?view_orders">

                <div class="panel-footer"><!-- panel-footer Starts -->

                    <span class="pull-left"> View Details </span>

                    <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

                    <div class="clearfix"></div>

                </div><!-- panel-footer Ends -->

            </a>

        </div><!-- panel panel-red Ends -->

    </div><!-- col-lg-3 col-md-6 Ends -->


    </div><!-- 2 row Ends -->

    <br>
    <br>
    <div class="row" ><!-- 3 row Starts -->

        <div class="col-lg-8" ><!-- col-lg-8 Starts -->

            <div class="panel panel-primary" ><!-- panel panel-primary Starts -->

                <div class="panel-heading" ><!-- panel-heading Starts -->

                    <h3 class="panel-title" ><!-- panel-title Starts -->

                        <i class="fa fa-money fa-fw" ></i> New Orders

                    </h3><!-- panel-title Ends -->

                </div><!-- panel-heading Ends -->

                <div class="panel-body" ><!-- panel-body Starts -->

                    <div class="table-responsive" ><!-- table-responsive Starts -->

                        <table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

                            <thead><!-- thead Starts -->

                            <tr>
                                <th>OrderNo</th>
                                <th>Invoice No</th>

                                <th>Name</th>
                                <th>Email</th>
                                <th>Amount Due</th>
                                <th>Paid Amount</th>
<!--                                <th>Product ID:</th>-->
<!--                                <th>Product Qty:</th>-->
<!--                                <th>Product Size:</th>-->
                                <th>Status</th>
                                <th>View</th>

                </tr>

                            </thead><!-- thead Ends -->

                            <tbody><!-- tbody Starts -->

                            <?php
                            foreach ($orderData as $result){


                            ?>
                                <tr>
                            <td><?php echo $result['id']?></td>
                            <td><?php echo $result['invoice_no']?></td>
                            <td><?php echo $result['name']?></td>
                            <td><?php echo $result['email']?></td>
                            <td><?php echo $result['due_amount']?></td>
                            <td><?php echo $result['amount_paid']?></td>
                            <td> <a href="update_order_status.php?invoice_no=<?php echo $result['invoice_no']?>" >
                                    <?php echo $result['status']?></a></td>
                            <td><a href="view_order_details.php?invoice_no=<?php echo $result['invoice_no']?>" target="_blank">View</a> </td>
                                </tr>
<?php }?>
<!--<td>zoaib</td>-->





                            </tbody><!-- tbody Ends -->


                        </table><!-- table table-bordered table-hover table-striped Ends -->

                    </div><!-- table-responsive Ends -->

                    <div class="text-right" ><!-- text-right Starts -->

                        <a href="dashboard.php?view_orders" >

                            View All Orders <i class="fa fa-arrow-circle-right" ></i>

                        </a>

                    </div><!-- text-right Ends -->


                </div><!-- panel-body Ends -->

            </div><!-- panel panel-primary Ends -->

        </div><!-- col-lg-8 Ends -->

        <div class="col-md-4"><!-- col-md-4 Starts -->

            <div class="panel"><!-- panel Starts -->

                <div class="panel-body"><!-- panel-body Starts -->

                    <div class="thumb-info mb-md"><!-- thumb-info mb-md Starts -->

                        <img src="admin_images/<?php ?>" class="rounded img-responsive">

                        <div class="thumb-info-title"><!-- thumb-info-title Starts -->

                            <span class="thumb-info-inner"> salman </span>

                            <span class="thumb-info-type"> salman </span>

                        </div><!-- thumb-info-title Ends -->

                    </div><!-- thumb-info mb-md Ends -->

                    <div class="mb-md"><!-- mb-md Starts -->

                        <div class="widget-content-expanded"><!-- widget-content-expanded Starts -->

                            <i class="fa fa-user"></i> <span>Email: </span> salman9607@gmail.com <br>
                            <i class="fa fa-user"></i> <span>Country: pakisan   <br>
                            <i class="fa fa-user"></i> <span>Contact: </span> 30315   <br>

                        </div><!-- widget-content-expanded Ends -->

                        <hr class="dotted short">

                        <h5 class="text-muted">About</h5>

                        <p>
                            About
                        </p>

                    </div><!-- mb-md Ends -->

                </div><!-- panel-body Ends -->

            </div><!-- panel Ends -->

        </div><!-- col-md-4 Ends -->

    </div><!-- 3 row Ends -->

