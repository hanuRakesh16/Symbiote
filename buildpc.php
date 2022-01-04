<?php

include 'Templates/buildheader.php';
include 'config/constants.php';
include 'Templates/login-check.php';
include 'functions.php';
?>
<nav class="fixed-top navbar navbar-expand-lg navbar-dark bg-light">
    <a class="navbar-brand col-lg-2" href="index.php">
        <img src="./assets/logopng.png" width="100%" height="100%" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse no" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="buildpc.php">Build Pc</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
        </ul>
        <li>

            <div class="cart-no">
                <a href="cart.php" class="btn"><i class="fa fa-shopping-cart" aria-hidden="true"> Cart</i></a>
                <?php
              countItems();
             ?>
            </div>
        </li>
    </div>
</nav>
<!-- content -->
<div class="inner">
    <div class="container-fluid">
        <div class="row banner">
            <img src="assets/inner-bg.jpg" alt="">
            <div class="center col-sm-12">
                <h1>YOUR PC CONFIG</h1>
            </div>
        </div>
    </div>
</div>
<section>
    <div class="container-fluid contentrow">
        <div class="row">
            <div class="col-md-4 contentBackground">
                <p>BUILD OPTIONS</p>
            </div>
        </div>
    </div>
</section>
<!-- tech specs -->
<section class="tech">
    <div class="container">
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading col-lg-12">
                    <h1 class="panel-title collapsetitle flex-lg-row">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Processors</a>
                    </h1>
                </div>
                <div id="collapse1" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <div class="container">
                            <div class="row ">
                                <?php 
                                $sql = "SELECT * FROM tbl_product WHERE p_category='processor' AND availability='yes'";
                                $res = mysqli_query($conn, $sql);
                                $count = mysqli_num_rows($res);
                                if($count >0){
                                    //available
                                    while($row=mysqli_fetch_assoc($res)){
                                        $id = $row['p_id'];
                                        $category = $row['p_category'];
                                        $title = $row['p_name'];
                                        $company = $row['p_company'];
                                        $image_name = $row['p_image'];
                                        $price = $row['p_price'];
                                        $availability = $row['availability'];
                                        ?>
                                <div class="col-md-4 card-margin">
                                    <div class="card" style="width:350px">
                                        <img class="card-img-top"
                                            src="<?php echo SITEURL; ?>assets/products/<?php echo $image_name; ?>"
                                            alt="Card image" style="width:100%">
                                        <div class="card-body align-center">
                                            <h4 class="card-title align-center"><?php echo $title; ?></h4>
                                            <div class="text-danger align-center"
                                                style="text-align:center; margin-bottom:10px;">
                                                ₹<span class=" card-title align-center"><?php echo $price;?></span>
                                            </div>
                                            <a href="buildpc.php?add_cart=<?php echo $id?>"
                                                style="margin-left:0px !important">
                                                <button type="submit" name="cart" class="btn btn-warning cart-btn">Add
                                                    to Cart</button></a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    }
                                    }
                                    else{
                                    echo "<div class='error'>Not available</div>";
                                    }
                                    ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading col-lg-12">
                        <h1 class="panel-title collapsetitle flex-lg-row">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Motherboards</a>
                        </h1>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="container">
                                <div class="row ">
                                    <?php 
                                $sql2 = "SELECT * FROM tbl_product WHERE p_category='motherboard' AND availability='yes'";
                                $res2 = mysqli_query($conn, $sql2);
                               $count2 = mysqli_num_rows($res2);
                                if($count2 >0){
                                    //available
                                    while($row2=mysqli_fetch_assoc($res2)){
                                        $id = $row2['p_id'];
                                        $category = $row2['p_category'];
                                        $title = $row2['p_name'];
                                        $company = $row2['p_company'];
                                        $image_name = $row2['p_image'];
                                        $price = $row2['p_price'];
                                        $availability = $row2['availability'];
                                        ?>
                                    <div class="col-md-4 card-margin">
                                        <div class="card" style="width:350px">
                                            <img class="card-img-top"
                                                src="<?php echo SITEURL; ?>assets/products/<?php echo $image_name; ?>"
                                                alt="Card image" style="width:100%">
                                            <div class="card-body align-center">
                                                <h4 class="card-title align-center"><?php echo $title;?></h4>
                                                <div class="text-danger align-center"
                                                    style="text-align:center; margin-bottom:10px;">
                                                    ₹<span class=" card-title align-center"><?php echo $price;?></span>
                                                </div>
                                                <a href="buildpc.php?add_cart=<?php echo $id?>"
                                                    style="margin-left:0px !important">
                                                    <button type="submit" name="cart"
                                                        class="btn btn-warning cart-btn">Add to Cart</button></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    }
                                    }
                                    else{
                                    echo "<div class='error'>Not available</div>";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading col-lg-12">
                        <h1 class="panel-title collapsetitle flex-lg-row">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">RAM</a>
                        </h1>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="container">
                                <div class="row ">
                                    <?php 
        $sql3 = "SELECT * FROM tbl_product WHERE p_category='ram' AND availability='yes'";
            $res3 = mysqli_query($conn, $sql3);
         $count3 = mysqli_num_rows($res);
        if($count3 >0){                 //available
         while($row3=mysqli_fetch_assoc($res3)){
          $id = $row3['p_id'];
         $category = $row3['p_category'];
         $title = $row3['p_name'];
         $company = $row3['p_company'];
         $image_name = $row3['p_image'];
         $price = $row3['p_price'];
        $availability = $row3['availability'];
        ?>
                                    <div class="col-md-4 card-margin">
                                        <div class="card" style="width:350px">
                                            <img class="card-img-top" src="<?php echo SITEURL; ?>assets/products/<?php echo $image_name; ?>
" alt="Card image" style="width:100%">
                                            <div class="card-body align-center">
                                                <h4 class="card-title"><?php echo $title;?></h4>
                                                <div class="text-danger align-center"
                                                    style="text-align:center; margin-bottom:10px;">
                                                    ₹<span class=" card-title align-center"><?php echo $price;?></span>
                                                </div>
                                                <a href="buildpc.php?add_cart=<?php echo $id?>"
                                                    style="margin-left:0px !important">
                                                    <button type="submit" name="cart"
                                                        class="btn btn-warning cart-btn">Add to Cart</button></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
    }
    }
    else{
    echo "<div class='error'>Not available</div>";
    }
    ?>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading col-lg-12">
                        <h1 class="panel-title collapsetitle flex-lg-row">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Graphics Card</a>
                        </h1>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="container">
                                <div class="row ">
                                    <?php 
        $sql4 = "SELECT * FROM tbl_product WHERE p_category='graphics' AND availability='yes'";
            $res4 = mysqli_query($conn, $sql4);

         $count4 = mysqli_num_rows($res4);
        if($count >0){                 //available
         while($row4=mysqli_fetch_assoc($res4)){
          $id = $row4['p_id'];
         $category = $row4['p_category'];
         $title = $row4['p_name'];
         $company = $row4['p_company'];
         $image_name = $row4['p_image'];
         $price = $row4['p_price'];
        $availability = $row4['availability'];
        ?>
                                    <div class="col-md-4 card-margin">
                                        <div class="card" style="width:350px">
                                            <img class="card-img-top"
                                                src="<?php echo SITEURL; ?>assets/products/<?php echo $image_name; ?>"
                                                alt="Card image" style="width:100%">
                                            <div class="card-body align-center">
                                                <h4 class="card-title"><?php echo $title;?></h4>
                                                <div class="text-danger align-center"
                                                    style="text-align:center; margin-bottom:10px;">
                                                    ₹<span class=" card-title align-center"><?php echo $price;?></span>
                                                </div>
                                                <a href="buildpc.php?add_cart=<?php echo $id?>"
                                                    style="margin-left:0px !important">
                                                    <button type="submit" name="cart"
                                                        class="btn btn-warning cart-btn">Add to Cart</button></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
  }
   }
  else{
  echo "<div class='error'>Not available</div>";
  }
 ?>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading col-lg-12">
                        <h1 class="panel-title collapsetitle flex-lg-row">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Primary Storage for
                                OS</a>
                        </h1>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse">
                        <div class="panel-body ">
                            <div class="container">
                                <div class="row ">
                                    <?php 
        $sql5 = "SELECT * FROM tbl_product WHERE p_category='primary' AND availability='yes'";
            $res5 = mysqli_query($conn, $sql5);

         $count5 = mysqli_num_rows($res5);
        if($count5 >0){                 //available
         while($row5=mysqli_fetch_assoc($res5)){
          $id = $row5['p_id'];
         $category = $row5['p_category'];
         $title = $row5['p_name'];
         $company = $row5['p_company'];
         $image_name = $row5['p_image'];
         $price = $row5['p_price'];
        $availability = $row5['availability'];
        ?>
                                    <div class="col-md-4 card-margin">
                                        <div class="card" style="width:350px">
                                            <img class="card-img-top" src="<?php echo SITEURL; ?>assets/products/<?php echo $image_name; ?>
" alt="Card image" style="width:100%">
                                            <div class="card-body align-center">
                                                <h4 class="card-title"><?php echo $title;?></h4>
                                                <div class="text-danger align-center"
                                                    style="text-align:center; margin-bottom:10px;">
                                                    ₹<span class=" card-title align-center"><?php echo $price;?></span>
                                                </div>
                                                <a href="buildpc.php?add_cart=<?php echo $id?>"
                                                    style="margin-left:0px !important">
                                                    <button type="submit" name="cart"
                                                        class="btn btn-warning cart-btn">Add to Cart</button></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
  }
   }
  else{
  echo "<div class='error'>Not available</div>";
  }
 ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading col-lg-12">
                        <h1 class="panel-title collapsetitle flex-lg-row">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">Secondary Storage</a>
                        </h1>
                    </div>
                    <div id="collapse6" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="container">
                                <div class="row ">
                                    <?php 
        $sql6 = "SELECT * FROM tbl_product WHERE p_category='secondary' AND availability='yes'";
            $res6 = mysqli_query($conn, $sql6);

         $count6 = mysqli_num_rows($res6);
        if($count6 >0){                 //available
         while($row6=mysqli_fetch_assoc($res6)){
          $id = $row6['p_id'];
         $category = $row6['p_category'];
         $title = $row6['p_name'];
         $company = $row6['p_company'];
         $image_name = $row6['p_image'];
         $price = $row6['p_price'];
        $availability = $row6['availability'];
        ?>
                                    <div class="col-md-4 card-margin">
                                        <div class="card" style="width:350px">
                                            <img class="card-img-top" src="assets/hdd.png" alt="Card image"
                                                style="width:100%">
                                            <div class="card-body align-center">
                                                <h4 class="card-title"><?php echo $title;?></h4>
                                                <div class="text-danger align-center"
                                                    style="text-align:center; margin-bottom:10px;">
                                                    ₹<span class=" card-title align-center"><?php echo $price;?></span>
                                                </div>

                                                <a href="buildpc.php?add_cart=<?php echo $id?>"
                                                    style="margin-left:0px !important">
                                                    <button type="submit" name="cart"
                                                        class="btn btn-warning cart-btn">Add to Cart</button></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
  }
   }
  else{
  echo "<div class='error'>Not available</div>";
  }
 ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading col-lg-12">
                        <h1 class="panel-title collapsetitle flex-lg-row">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">Operating System</a>
                        </h1>
                    </div>
                    <div id="collapse7" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="container">
                                <div class="row ">
                                    <?php 
        $sql7 = "SELECT * FROM tbl_product WHERE p_category='os' AND availability='yes'";
            $res7 = mysqli_query($conn, $sql7);

         $count7 = mysqli_num_rows($res7);
        if($count7 >0){                 //available
         while($row7=mysqli_fetch_assoc($res7)){
          $id = $row7['p_id'];
         $category = $row7['p_category'];
         $title = $row7['p_name'];
         $company = $row7['p_company'];
         $image_name = $row7['p_image'];
         $price = $row7['p_price'];
        $availability = $row7['availability'];
        ?>
                                    <div class="col-md-4 card-margin">
                                        <div class="card" style="width:350px">
                                            <img class="card-img-top" src="<?php echo SITEURL; ?>assets/products/<?php echo $image_name; ?>
" alt="Card image" style="width:100%">
                                            <div class="card-body align-center">
                                                <h4 class="card-title"><?php echo $title;?></h4>
                                                <div class="text-danger align-center"
                                                    style="text-align:center; margin-bottom:10px;">
                                                    ₹<span class=" card-title align-center"><?php echo $price?></span>
                                                </div>
                                                <a href="buildpc.php?add_cart=<?php echo $id?>"
                                                    style="margin-left:0px !important">
                                                    <button type="submit" name="cart"
                                                        class="btn btn-warning cart-btn">Add to Cart</button></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
  }
   }
  else{
  echo "<div class='error'>Not available</div>";
  }
 ?>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading col-lg-12">
                        <h1 class="panel-title collapsetitle flex-lg-row" style="margin-bottom:0;">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">Power Supply</a>
                        </h1>
                    </div>
                    <div id="collapse8" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="container">
                                <div class="row ">
                                    <?php 
        $sql8 = "SELECT * FROM tbl_product WHERE p_category='psu' AND availability='yes'";
            $res8 = mysqli_query($conn, $sql8);

         $count8 = mysqli_num_rows($res8);
        if($count8 >0){                 //available
         while($row8=mysqli_fetch_assoc($res8)){
          $id = $row8['p_id'];
         $category = $row8['p_category'];
         $title = $row8['p_name'];
         $company = $row8['p_company'];
         $image_name = $row8['p_image'];
         $price = $row8['p_price'];
        $availability = $row8['availability'];
        ?>
                                    <div class="col-md-4 card-margin">
                                        <div class="card" style="width:350px">
                                            <img class="card-img-top"
                                                src="<?php echo SITEURL; ?>assets/products/<?php echo $image_name; ?>"
                                                alt="Card image" style="width:100%">
                                            <div class="card-body align-center">
                                                <h4 class="card-title"><?php echo $title;?></h4>
                                                <div class="text-danger align-center"
                                                    style="text-align:center; margin-bottom:10px;">
                                                    ₹<span class=" card-title align-center"><?php echo $price;?></span>
                                                </div>

                                                <a href="buildpc.php?add_cart=<?php echo $id?>"
                                                    style="margin-left:0px !important">
                                                    <button type="submit" name="cart"
                                                        class="btn btn-warning cart-btn">Add to Cart</button></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
  }
   }
  else{
  echo "<div class='error'>Not available</div>";
  }
 ?>

                                </div>
                            </div>
                        </div>
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
if(isset($_GET['add_cart'])){
    $p_id = $_GET['add_cart'];
    $ip = get_ip();
    $run = mysqli_query($conn,"SELECT * FROM cart WHERE p_id = '$p_id'");
    if(mysqli_num_rows($run) > 0){
        echo "";

    }else{
        $fetch = mysqli_query($conn,"SELECT * FROM tbl_product WHERE p_id = '$p_id'");
        $fetch = mysqli_fetch_array($fetch);
        $p_name =  $fetch['p_name']; 
        $runinsert =mysqli_query($conn,"INSERT INTO cart(p_id,p_name,ip,quantity) VALUES ('$p_id','$p_name','$ip','1')"); 
       
    }
}
?>