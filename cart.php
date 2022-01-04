<?php
include 'Templates/cartheader.php';
include 'config/constants.php';
include 'Templates/login-check.php';
include 'functions.php';

?>
<nav class="fixed-top navbar navbar-expand-lg navbar-dark bg-light">
    <a class="navbar-brand col-lg-2" href="index.php">
        <img src="./assets/logopng.png" width="100%" height="100%" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="buildpc.php">Build Pc</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
        </ul>

        <li>

            <a href="cart.php"><i class="fa fa-shopping-cart active" aria-hidden="true">    Cart</i></a>

        </li>

    </div>
</nav>
<!-- content -->
<div class="inner">
    <div class="container-fluid">
        <div class="row banner">
            <img src="assets/inner-bg.jpg" alt="">
            <div class="center col-sm-12"><h1>CART PRODUCT DETAILS</h1></div>
        </div>
    </div>
</div>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div id="cart" class="py-3">
                    <div class="container-fluid w-75">
                        <h5 class="">Shopping Cart</h5>

                       

                        <!-- shopping cart items -->
                        <div class="row">
                            <div class="col-sm-9">
                                <!-- cart item -->
                                <?php 
                                $total =0;
                                $ip = get_ip();
                                $run_cart = mysqli_query($conn,"SELECT * FROM cart WHERE ip ='$ip'");
                                while($fetch_cart=mysqli_fetch_array($run_cart)){
                                    $p_id = $fetch_cart['p_id'];
                                    $result_product = mysqli_query($conn,"SELECT * FROM tbl_product WHERE p_id = '$p_id'");
                                    while($fetch_product =mysqli_fetch_array($result_product)){
                                        $product_price = array($fetch_product['p_price']);
                                        $product_name = $fetch_product['p_name'];
                                        $product_company = $fetch_product['p_company'];
                                        $product_image = $fetch_product['p_image'];
                                        $sing_price = $fetch_product['p_price'];
                                        $values = array_sum($product_price);
                                        $total += $values;
                                    
                                ?>
                                <div class="row border-top py-3 mt-3">
                                    <div class="col-sm-2">
                                        <img src="<?php SITEURL; ?>assets/products/<?php echo $product_image;?> " alt="" class="img-fluid">
                                    </div>
                                    <div class="col-sm-8">
                                        <h5 class=""><?php echo $product_name; ?></h5>
                                        <small>by <?php echo $product_company; ?></small>
                                        <form method="post" action="">
                                        <input type="submit" name="remove"  class="btn btn-transparent text-danger px-3 border-right" style="font-size: 12px; margin-left:110px;" value="<?php $p_id; ?> Delete" class="btn-primary">
                                        <!-- <button type="submit" name="remove"  class="btn btn-transparent text-danger px-3 border-right" style="font-size: 12px; margin-left:110px;" value="<?php echo $p_id; ?>">Delete</button> -->
                                    </form></div>
                                    <div class="col-sm-2 text-right">
                                        <div class="text-danger">
                                            ₹<span class="product_price"><?php echo $sing_price; ?></span>
                                        </div>
                                    </div>
                                   

                                </div>
                                <?php }  } ?>
                            </div>
                            <div class="col-sm-3">

                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-3">
                <div class="offer pt-5">
                    <h5>COUPON CODE :</h5>
                    <form action="">
                        <input type="text" class="form-control table-striped" id="couponcode" placeholder="Apply Coupon Code">
                    </form></div>
                <div class="order-col">
                    <div class="order-hd">
                        ORDER DETAILS
                    </div>
                    <table class="table" width=100%>
                        <tbody>

                        <tr>
                            <td>Total Product</td>
                            <td class="text-right"><?php countItems(); ?></td>
                        </tr>
                        <tr>
                            <td>Sub Total</td>
                            <td class="text-right">₹<span><?php total_price(); ?></span> </td>
                        </tr>
                        <tr>
                            <td>Shipping Charges</td>
                            <td class="text-right">0</td>
                        </tr>
                        <tr class="last-td">
                            <td>Total</td>
                            <td class="text-right" id="dealPrice">₹<span><?php total_price(); ?></span></td>
                        </tr>

                        </tbody>

                    </table>
                    <a href = "checkout.php" class="btn btn-danger text-center checkout" style="font-size: 18px;  border-radius: 7px;"  >Proceed to Buy</a>
                    <!-- <form method="post" action="">
                                        <input type="submit" name="order"   class="btn btn-danger text-center checkout" style="font-size: 18px;  border-radius: 7px;" value="Proceed to Buy" class="btn-primary">
                                         <button type="submit" name="remove"  class="btn btn-transparent text-danger px-3 border-right" style="font-size: 12px; margin-left:110px;" value="<?php echo $p_id; ?>">Delete</button> -->
                                    <!-- </form> --> 
                    <!-- <button type="submit" name="order" class="btn btn-danger text-center checkout" style="font-size: 18px;  border-radius: 7px;">Proceed to Buy</button> -->
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include 'Templates/jsscript.php';
?>

<?php
include 'Templates/footer.php';
?>
<?php

if(isset($_POST['remove'])){
    // foreach($_POST['submit'] as $remove_id){
        $run_delete = mysqli_query($conn, "DELETE FROM cart WHERE p_id =$p_id");
        if($run_delete){
            echo "deleted";
        }

    }
// }
?>