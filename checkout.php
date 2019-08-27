
<?php
require_once $_SERVER['DOCUMENT_ROOT']."/Shirley/Includes/cart.php";
$obj=new cart();
$dataOfCart=$obj->viewCartItems();


$dataOfTotal=$obj->calculateTotalOfCart();
$noOfProducts=$obj->countProductsInCart();

foreach ($noOfProducts as $no)
    $noProducts=$no;

foreach ($dataOfTotal as $tot)
    $totalOfCart=$tot;
$total=$totalOfCart[0];

//$sf=$obj->getShippingFee()


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Checkout example for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/checkout/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Custom styles for this template -->

<!--    <script src="js/jquery-3.3.1.min.js"></script>-->
    <script src="js/jquery.min.js"></script>
    <link href="form-validation.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="js/checkout.js"></script>

</head>

<body class="bg-light">

<div class="pt-2">
    <a href="cart_item.php">
        <img width="60" height="40" src="lightbox-btn-prev.gif" alt="Back">
    </a>
</div>
<div class="container">

    <div class="py-5 text-center">
        <h2>Checkout form</h2>
    </div>
    <form  class="needs-validation" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" novalidate id="checkout">

    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Your cart</span>
                <span class="badge badge-secondary badge-pill"><?php echo $noProducts[0];?></span>
            </h4>
            <ul class="list-group mb-3">
             <?php
             foreach ($dataOfCart as $result){

                $pr= $obj->get($result['product_id'],$result['product_type'],$result['gift_type']);

             foreach($pr as $prs){


                 $prn=$prs;
             }

             ?>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0"><?php
                            $results = substr($prn['product_name'], 0, 22);
                            echo  $results?></h6>
                        <small class="text-muted">Brief description</small>
                    </div>
                    <span class="text-muted"><?php echo $result['product_price'] ?></span>
                </li>
                <?php }?>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total (AUD)</span>
                    <strong>$<?php echo $total?></strong>
                    <input type="hidden" name="total" value="<?php echo $total?>">
                </li>
            </ul>

        </div>
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Billing address</h4>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">First name</label>
                        <input type="text" name="firstname" class="form-control" id="firstName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName">Last name</label>
                        <input type="text" name="lastname" class="form-control" id="lastName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>
                </div>



                <div class="mb-3">
                    <label for="email">Email <span class="text-muted">(Required)</span></label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="you@example.com" required>
                    <div class="invalid-feedback">
                        Please enter a valid email address for shipping updates.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="address">Address</label>
                    <input type="text" name="address" class="form-control" id="address" placeholder="1234 Main St" required>
                    <div class="invalid-feedback">
                        Please enter your shipping address.
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-5 mb-3">
                        <label for="country">Country</label>
                        <select class="custom-select d-block w-100" name="country" id="country" required>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid country.
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="state">State</label>
                        <select class="custom-select d-block w-100" id="state1" name="state">

                        </select>
                        <div class="invalid-feedback">
                            Please provide a valid state.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="zip">Zip</label>
                        <input type="text" class="form-control" id="zip" placeholder="" name="zip" required>
                        <div class="invalid-feedback">
                            Zip code required.
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="address2">Add a personel message</label>
                    <textarea class="form-control" id="address2" dirname="message" name="message" required></textarea>
                    <div class="invalid-feedback">
                        Please enter your shipping address.
                    </div>
                </div>

                <input type="submit" name="submit" class="btn btn-primary btn-lg btn-block" value="Continue To Checkout">
                <input type="hidden" name="cmd" value="_xclick">
                <input type="hidden" name="business" value="shirleyruiz9@gmail.com">
                <input type="hidden" name="lc" value="US">
                <input type="hidden" name="item_name" value="Flowr">
                <input type="hidden" name="amount" value="<?php echo $total;?>">
                <input type="hidden" name="currency_code" value="AUD">
                <input type="hidden" name="button_subtype" value="services">
                <input type="hidden" name="no_note" value="1">
                <input type="hidden" name="no_shipping" value="2">
                <input type="hidden" name="shipping" value="">
                <input type="hidden" name="cn" value="Add special instructions to the seller:">
                <input type="hidden" name="rm" value="1">
                <input type="hidden" name="return" value="http://localhost/Florist_Site/thankyou.php">
                <input type="hidden" name="cancel_return" value="http://localhost/Florist_Site/checkout.php">

                <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHosted">







<!--                paypal code end-->
            </form>
        </div>
    </div>

</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';

        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');

            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
<script src="Json/js/jquery.min.js"></script>
<!--<script src="Json/js/custom.js"></script>-->
<script>
    jQuery(document).ready(function () {
        var countryOp;
        var StateOp;
        var StateOp1;
        var StateOp2;
        var StateOp3;
        var StateOp4;
        var StateOp5;
        var StateOp6;
        var StateOp7;
        $.getJSON('Json/countries.json', function (resultData) {
            $.each(resultData, function (i, countryName) {
                // alert(countryName.name + "," + countryName.code);
                countryOp +="<option value='"+countryName.code+"'>"+countryName.name+"</option>";
            })
            $("#country").html(countryOp);
        })

        $("#country").change(function () {
            if ($(this).val()=="AU") {
                $.getJSON('Json/au-states.json', function (result) {
                    $.each(result, function (stateCode, stateName) {
                        StateOp += "<option value='AUD'>" +stateName.name+ "</option>";
                    })
                    $("#state1").html(StateOp);
                })
            }
        })

        $("#country").change(function () {
            if ($(this).val()=="CN") {
                $.getJSON('Json/china-states.json', function (result) {
                    $.each(result, function (stateCode, stateName) {
                        StateOp1 += "<option value='"+stateCode+"'>" +stateName.name+ "</option>";
                    })
                    $("#state1").html(StateOp1);
                })
            }
        })
        $("#country").change(function () {
            if ($(this).val()=="VN") {
                $.getJSON('Json/Vietnam-states.json', function (result) {
                    $.each(result, function (stateCode, stateName) {
                        StateOp2 += "<option value='"+stateCode+"'>" +stateName.name+ "</option>";
                    })
                    $("#state1").html(StateOp2);
                })
            }
        })
        $('#country').change(function () {
            if ($(this).val()=='JP'){
                $.getJSON('Json/japan-states.json', function (result) {
                    $.each(result,function (i,states) {
                        StateOp3 += "<option value='"+i+"'>"+states.name+"</option>";
                    })
                    $('#state1').html(StateOp3);
                })
            }
        })
        $('#country').change(function () {
            if ($(this).val()=='US'){
                $.getJSON('Json/usa-states.json', function (result) {
                    $.each(result,function (i,states) {
                        StateOp4 += "<option value='"+i+"'>"+states.name+"</option>";
                    })
                    $('#state1').html(StateOp4);
                })
            }
        })
        $('#country').change(function () {
            if ($(this).val()=='NL'){
                $.getJSON('Json/holland-states.json', function (result) {
                    $.each(result,function (i,states) {
                        StateOp5 += "<option value='"+i+"'>"+states.name+"</option>";
                    })
                    $('#state1').html(StateOp5);
                })
            }
        })
        $('#country').change(function () {
            if ($(this).val()=='GB'){
                $.getJSON('Json/uk-states.json', function (result) {
                    $.each(result,function (i,states) {
                        StateOp6 += "<option value='"+i+"'>"+states.name+"</option>";
                    })
                    $('#state1').html(StateOp6);
                })
            }
        })
        $('#country').change(function () {
            if ($(this).val()=='AE'){
                $.getJSON('Json/uae-states.json', function (result) {
                    $.each(result,function (i,states) {
                        StateOp7 += "<option value='"+i+"'>"+states.name+"</option>";
                    })
                    $('#state1').html(StateOp7);
                })
            }
        })
    })
</script>
</body>
</html>
