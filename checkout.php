<?php
include 'Templates/cartheader.php';
include 'config/constants.php';
include 'Templates/login-check.php';
include 'functions.php';

?>
<?php
                    $_SESSION['user'];
                    
						if(isset($_POST['submit'])){
                           
							$name = $_POST['name'];
							$email = $_POST['email'];
							$contact = $_POST['contact'];
							$address = $_POST['address'];
							$zip = $_POST['zip'];
							$uid = $_SESSION['user'];

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

                                    $ins_sql = "INSERT INTO tbl_cart(p_id,p_name,p_price,total_items,total_price,u_name,u_email,u_contact,u_address,u_postal,status,ip)
                                    VALUES ('$p_id','$product_name', '$sing_price', 'count_items();', '$total','$name','$email','$contact','$address','$zip','ordered','$ip')";
                                    $res2 = mysqli_query($conn,$ins_sql);
                                    $las_sql = "SELECT LAST_INSERT_ID(id) FROM tbl_cart";

                                   
                                    if($res2){
                                        $lastid = $conn->insert_id;
                                        $sql = "DELETE FROM cart WHERE ip ='$ip' ";
                                        $run = mysqli_query($conn,$sql);
                                        $_SESSION['order']=header('location:'.SITEURL.'v.php?id='.$lastid);
                                   
                                        echo "<script>alert('Your order has been placed...)'</script>";
                                        
                                        
                                    } 
                                   
                                   
                                }
                            }
							
															
						}
                        
					?>




<nav class="fixed-top navbar navbar-expand-lg navbar-dark bg-light">
    <a class="navbar-brand col-lg-2" href="index.php">
        <img src="./assets/logopng.png" width="100%" height="100%" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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

            <a href="cart.php"><i class="fa fa-shopping-cart active" aria-hidden="true"> Cart</i></a>

        </li>

    </div>
</nav>
<!-- content -->
<div class="inner">
    <div class="container-fluid">
        <div class="row banner">
            <img src="assets/inner-bg.jpg" alt="">
            <div class="center col-sm-12">
                <h1>CHECKOUT DETAILS</h1>
            </div>
        </div>
    </div>
</div>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div id="cart" class="py-3">
                    <div class="container-fluid w-75">
                        <h5 class="">Delivery Detatils</h5>



                        <!-- shopping cart items -->
                        <div class="row">
                            <div class="col-sm-9">
                                <!-- cart item -->
                                <form method="POST" action="">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="f_name">Name</label>
                                            <input type="text" id="name" name="name" class="form-control">
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="email">Email</label>
                                            <input type="text" id="email" name="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="mobile">Mobile</label>
                                            <input type="number" id="contact" name="contact" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="address1">Address Line </label>
                                            <input type="text" id="address" name="address" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="address1">ZIP Code</label>
                                            <input type="text" id="zip" name="zip" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <br>
                                            <input type="submit" id="order" name="submit" value="CHECKOUT"
                                                class="btn-danger form-control">
                                        </div>
                                    </div>
                                    <br />


                                </form>

                            </div>
                            <div class="col-sm-3">

                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-3">

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
                    <!-- <a href="checkout.php?id=<?php echo $ip;?>"><button type="submit" name="order" class="btn btn-danger text-center checkout" style="font-size: 18px;  border-radius: 7px;">Proceed to Buy</button></a> -->
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