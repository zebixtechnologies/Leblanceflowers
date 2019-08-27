<?php
/**
 * Created by PhpStorm.
 * User: salman
 * Date: 5/10/2019
 * Time: 3:14 PM
 */

include_once "../config.php";
require_once "cart.php";

$con = new Database();
$con=$con->connect();

$obj=new cart();


$dataOfTotal=$obj->calculateTotalOfCart();
$ipAddress=$obj->getRealUserIp();
foreach ($dataOfTotal as $tot)
    $totalOfCart=$tot;
$total=$totalOfCart[0];

if (isset($_POST['firstname'])) {

    $name = $_POST['firstname'] . " " . $_POST['lastname'];

    $email = $_POST['email'];

    $address = $_POST['address'];
    $country = $_POST['country'];
    $state = "test";
    $zip = $_POST['zip'];
    $message = $_POST['message'];
    $total1 = $_POST['total'];

    $pro_date = $today = date("j/n/Y");

    // $invoice_no=preg_replace("/[^0-9]/", '',$ipAddress );

$invoice_no=$_COOKIE['inv'];
    if (!empty($name) AND !empty($email) AND !empty($message)) {
        $query = "insert into orders(id,invoice_no,name,email,date,address,country,state,zip,due_amount,amount_paid,message,ip_address)

values(:id,:invoice_no,:name,:email,:date,:address,:country,:state,:zip,:due_amount,:amount_paid,:message,:ipAddress)";
        $stm = $con->prepare($query);
        $q = $stm->execute(
            array('id' => null,
                'invoice_no'=>$invoice_no,
                'name' => $name,
                'email' => $email,
                'date' =>$pro_date,
                'address' => $address,
                'country' => $country,
                'state' => $state,
                'zip' => $zip,
                'due_amount'=>$total1,
                'amount_paid'=>0,
                'message' => $message,
                'ipAddress'=>$ipAddress
            )
        );
        if ($q) {
            echo 'zohaib';
        }
    }
}
if (isset($_POST['manageProduct'])) {
    ?>
    <div class="card shopping-cart">
        <div class="card-header bg-dark text-light">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            Shipping cart
            <!--<a href="" class="btn btn-outline-info btn-sm pull-right">Continiu shopping</a>-->
            <div class="clearfix"></div>
        </div>
        <?php


        $dataOfCart=$obj->viewCartItems();

        if (empty($dataOfCart)) {
            ?>

        <h1>No item in the cart</h1>
        <script>
        $("#next_step").hide();
        </script>
<?php
        }
        foreach ($dataOfCart as $result){

            
            $pr= $obj->get($result['product_id'],$result['product_type'],$result['gift_type']);


            foreach($pr as $prs){
                $prn=$prs;
            }
            
            // print_r($prn);
            ?>
            <div class="card-body">
                <!-- PRODUCT -->

                <div class="row">
                    <div class=" col-md-2 text-center">
                        <img class="img-responsive" src="assets/Product_Images/<?php echo $prn['product_image']; ?>" alt="prewiew" width="120" height="80">
                    </div>

                    <div class="text-sm-center text-md-left col-md-6">
                        <h4 class="product-name"><strong><?php echo $prn['product_name']; ?></strong></h4>
                        <h4>
                            <small><?php
                            error_reporting('E_NOTICE');
                            if($prn['product_description']==""){
                                $des="Its a Gift";
                            }
                            else{
                                $des=$prn['product_description'];
                            }
                            echo utf8_encode($des); ?></small>
                        </h4>
                    </div>
                    <div class="text-sm-center col-md-4 text-md-right row">
                        <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                            <h6><strong>$<?php echo number_format($result['product_price'],2); ?>
                        </div>
                        <div class="col-md-6 text-right offset-10">

                            <a href="#" did="<?php echo $result['cart_id']; ?>" class="btn btn-outline-danger btn-sm del_product"><i class="fa fa-trash" aria-hidden="true">

                                </i></a>

                        </div>
                    </div>
                </div>
                <?php ?>
                <hr>
                <!-- END PRODUCT -->
                <!-- PRODUCT -->

                <hr>
                <!-- END PRODUCT -->

            </div>
            <?php
        }
        ?>
        <div class="card-footer">
            <div class="coupon col-md-5 col-sm-5 no-padding-left pull-left">
                <div class="row">

                </div>
            </div>
            <div class="pull-right" style="margin: 10px">
                <!--                <a href="" class="btn btn-success pull-right">Checkout</a>-->
                <div class="pull-right" style="margin: 5px">
                    Total price: <b>$<?php echo number_format($totalOfCart[0],2);?></b>
                </div>

            </div>


        </div>

    </div>
    <div class="row">
        <div class="col-md-8"></div>
        <div class="col-md-4">
            <a href="checkout.php" id="next_step" class="btn btn-primary btn-lg btn-block"> Continue To Next Step</a>
        </div>
    </div>
    <?php
}
// Delete Product
if (isset($_POST['deleteProduct'])){
    $id = $_POST['id'];
    $query = "DELETE FROM `cart` WHERE cart_id=:pro_id";
    $stm = $con->prepare($query);
    $sal = $stm->execute(
        array(
            ':pro_id'=>$id,
        )
    );
//    $id = $_POST['id'];
    $query = "DELETE FROM `orders1` WHERE cart_id=:pro_id";
    $stm = $con->prepare($query);
    $sal = $stm->execute(
        array(
            ':pro_id'=>$id,
        )
    );

    if ($stm){
        echo "DELETED";
    }

}

