<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Alcohol Gifts </title>
    <script src="./js/gifts.js"></script>
</head>

<body>

<div class="row"><!-- row Starts -->

    <div class="col-lg-12"><!-- col-lg-12 Starts -->

        <ol class="breadcrumb"><!-- breadcrumb Starts -->

            <li class="active">

                <i class="fa fa-dashboard"> </i> Dashboard / Toys Gifts

            </li>

        </ol><!-- breadcrumb Ends -->

    </div><!-- col-lg-12 Ends -->

</div><!-- row Ends -->


<div class="row"><!-- 2 row Starts -->

    <div class="col-lg-12"><!-- col-lg-12 Starts -->

        <div class="panel panel-default"><!-- panel panel-default Starts -->

            <div class="panel-heading"><!-- panel-heading Starts -->

                <h3 class="panel-title">

                    <i class="fa fa-money fa-fw"></i> Toys Gifts

                </h3>

            </div><!-- panel-heading Ends -->

            <div class="panel-body"><!-- panel-body Starts -->

                <form class="form-horizontal" id="form_toys" method="post" enctype="multipart/form-data" onsubmit="return false"><!-- form-horizontal Starts -->

                    <div class="form-group" ><!-- form-group Starts -->

                        <label class="col-md-3 control-label" > Toys Title </label>

                        <div class="col-md-6" >

                            <input type="text" name="toys_title" id="alcohol_title" placeholder="Toys Title" class="form-control" required>
                            <small id="u_error" class="form-text text-muted"></small>
                        </div>

                    </div><!-- form-group Ends -->

                    <div class="form-group" ><!-- form-group Starts -->

                        <label class="col-md-3 control-label" > Toys Price </label>

                        <div class="col-md-6" >

                            <input type="text" name="toys_price" id="alcohol_price" placeholder="Toys Price" class="form-control" required>
                            <small id="u_error" class="form-text text-muted"></small>
                        </div>

                    </div><!-- form-group Ends -->

                    <div class="form-group" ><!-- form-group Starts -->

                        <label class="col-md-3 control-label" > Toys Image</label>

                        <div class="col-md-6" >

                            <input type="file" name="toys_img1" id="" class="form-control" required>
                        </div>

                    </div><!-- form-group Ends -->

            </div><!-- form-group Ends -->

            <div class="form-group" ><!-- form-group Starts -->

                <label class="col-md-3 control-label" ></label>

                <div class="col-md-6" >

                    <input type="submit" name="submit" value="Insert Gifts" class="btn btn-primary form-control" >

                </div>

            </div><!-- form-group Ends -->
            <br>
            </form><!-- form-horizontal Ends -->

        </div><!-- panel-body Ends -->

    </div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->
</body>
</html>