<?php
include 'partials/menu.php';
?>

<div class="main-content">
  <div class="wrapper">
    <h1>Manage Category</h1>
    <br>
    <a href="<?php echo SITEURL; ?>admin/add-product.php" class="btn-primary">Add Product</a><br><br>
    <?php
    if (isset($_SESSION['add'])) {
      echo $_SESSION['add'];
      unset($_SESSION['add']);
    }
    if (isset($_SESSION['remove'])) {
      echo $_SESSION['remove'];
      unset($_SESSION['remove']);
    }

    if (isset($_SESSION['delete-product'])) {
      echo $_SESSION['delete-product'];
      unset($_SESSION['delete-product']);
    }
    if (isset($_SESSION['no-category-found'])) {
      echo $_SESSION['no-category-found'];
      unset($_SESSION['no-category-found']);
    }
    if (isset($_SESSION['update'])) {
      echo $_SESSION['update'];
      unset($_SESSION['update']);
    }
    if (isset($_SESSION['upload'])) {
      echo $_SESSION['upload'];
      unset($_SESSION['upload']);
    }
    if (isset($_SESSION['failed-remove'])) {
      echo $_SESSION['failed-remove'];
      unset($_SESSION['failed-remove']);
    }


    ?>
    <br><br>

    <table class="tbl-full">
      <tr>
        <th>S.no</th>
        <th>Category</th>
        <th>Name</th>
        <th>Company</th>
        <th>Price</th>
        <th>Image</th>
        <th>Available</th>
        <th>Actions</th>
      </tr>

      <?php
      $sql = "SELECT * FROM tbl_product";          //query to get all category from database
      $res = mysqli_query($conn, $sql);             //execute query
      $count = mysqli_num_rows($res);
      $sn = 1; //create variable and assign the value
      if ($count > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
          $id = $row['p_id'];
          $category = $row['p_category'];
          $title = $row['p_name'];
          $company = $row['p_company'];
          $price = $row['p_price'];
          $image_name = $row['p_image'];
          $availability = $row['availability'];
        
      ?>
          <tr>
            <td><?php echo $sn++; ?></td>
            <td><?php echo $category; ?></td>
            <td><?php echo $title; ?></td>
            <td><?php echo $company; ?></td>
            <td><?php echo $price; ?></td>
            <td>
              <?php
              if ($image_name != "") {
              ?>
                <img src="<?php echo SITEURL; ?>assets/products/<?php echo $image_name; ?>" width="100px" height="100px">
              <?php

              } else {
                echo "<div class='error'>No image Available</div>";
              }


              ?>


            </td>
            <td><?php echo $availability; ?></td>
            
            <td>
              <a href="<?php echo SITEURL; ?>admin/update-product.php?id=<?php echo $id; ?>&image_name=<?php echo $image_name; ?>" class="btn-primary">Update</a>
              <a href="<?php echo SITEURL; ?>admin/delete-product.php?id=<?php echo $id; ?>&image_name=<?php echo $image_name; ?>" class="btn-secondary">Delete</a>
            </td>
          </tr>

        <?php
        }
      } else {

        ?>
        <tr>
          <td colspan="6">
            <div class="error">No Products to display</div>
          </td>
        </tr>
      <?php

      }
      ?>



    </table>

    <div class="clearfix"></div>

  </div>

</div>






<?php
include 'partials/footer.php';
?>