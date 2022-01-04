<?php
include 'partials/menu.php';
include 'partials/login-check.php';
?>


        <!-- menu section -->
        <div class="main-content"> 
        <div class="wrapper"> 
               <h1>Dashboard</h1>
               <?php 
               $sql = "SELECT p_category FROM tbl_product GROUP BY p_category";
               $res = mysqli_query($conn, $sql);
               $count = mysqli_num_rows($res);
               ?>
               <div class="col-4 text-center">
                   <h1><?php echo $count;?></h1><br>
                   category
               </div>
               <?php 
               $sql2 = "SELECT p_name FROM tbl_product";
               $res2 = mysqli_query($conn, $sql2);
               $count2 = mysqli_num_rows($res2);
               ?>
               <div class="col-4 text-center">
                   <h1><?php echo $count2; ?></h1><br>
                   Products
               </div>
               <?php 
               $sql3 = "SELECT * FROM tbl_cart GROUP BY u_name";
               $res3 = mysqli_query($conn, $sql3);
               $count3 = mysqli_num_rows($res3);
               ?>
               <div class="col-4 text-center">
                   <h1><?php echo $count3;?></h1><br>
                   Orders
               </div>
               <?php 
               $sql3 = "SELECT SUM(total_price) AS total FROM tbl_cart";
               $res3 = mysqli_query($conn, $sql3);
               $row3 = mysqli_fetch_assoc($res3);
               $revenue = $row3['total'];
               ?>
               <div class="col-4 text-center">
                   <h1><?php echo $revenue; ?></h1><br>
                   Total Revenue
               </div>
               <div class="clearfix"></div>

            </div>
            
        </div>
       

      <?php
      include 'partials/footer.php';
      ?>