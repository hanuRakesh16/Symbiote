<?php
include 'partials/menu.php';

?>

<div class="main-content">
    <div class="wrapper">
        <h1>Manage Orders</h1>
        <br><br>
        <?php
          if(isset($_SESSION['update'])){
            echo $_SESSION['update'];
            unset($_SESSION['update']);
          }
        ?>

        <table class="tbl-full">
            <tr>
                <th>S.no</th>
                <th>Product</th>
                <th>Price</th>
                
                <th>Total</th>
                <th>fullname</th>

                <th>Contact</th>
                <th>Email</th>
                <th>Address</th>
                <th>Status</th>
                <th>Actions</th>
                

            </tr>

            <?php
                  $sql = "SELECT * FROM tbl_cart ORDER BY id DESC";
                  $res = mysqli_query($conn,$sql);
                  $count = mysqli_num_rows($res);
                  $sn=1;

                  if($count>0){
                    while($row=mysqli_fetch_assoc($res)){
                      $id = $row['id'];
                      $pid = $row['p_id'];
                      $product = $row['p_name'];
                      $price = $row['p_price'];
                     
                      $total = $row['total_price'];
                      $name = $row['u_name'];
                      $address = $row['u_address'];
                      $contact = $row['u_contact'];
                      $c_email = $row['u_email'];
                      $status = $row['status']; ?>
            <tr>
                <td><?php echo $sn++; ?></td>
                <td><?php echo $product; ?></td>
                <td><?php echo $price; ?></td>
                
                <td><?php echo $total; ?></td>
                <td><?php echo $name; ?></td>
                <td><?php echo $contact; ?></td>
                <td><?php echo $c_email; ?></td>
                <td><?php echo $address; ?></td>
                <td><?php echo $status; ?></td>
                <td>
                    <a href="<?php echo SITEURL; ?>admin/update-order.php?id=<?php echo $id; ?>" class="btn-primary">Update</a>
                </td>
            </tr>
            <?php
                    }


                  }
                  else{
                    echo "<tr><td colspan='12' class='error'>No Orders</td></tr>";
                  }
                ?>



        </table>

        <div class="clearfix"></div>

    </div>

</div>






<?php
include 'partials/footer.php';
?>