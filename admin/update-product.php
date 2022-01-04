<?php
include 'partials/menu.php';
?>
<div class="main-content">

    <div class="wrapper">
        <h1>Update Product</h1>
        <br><br>

        <?php
        if (isset($_GET['id'])) {

            $id = $_GET['id'];
            $sql = "SELECT * FROM tbl_product WHERE p_id='$id'";
            $res = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($res);

            if ($count == 1) {
                $row = mysqli_fetch_array($res);
                $category = $row['p_category'];
                $title = $row['p_name'];
                $current_image = $row['p_image'];
                $company = $row['p_company'];
                $price = $row['p_price'];
                $availability = $row['availability'];
            } else {
                $_SESSION['no-category-found'] = "<div class='error'>No product Found</div>";
                header("location:" . SITEURL . 'admin/manage-products.php');
            }
        } else {
            header('location:' . SITEURL . 'admin/manage-products.php');
        }
        ?>



        <form action="" method="post" enctype="multipart/form-data">
            <table class="tbl-30">
                <tr>
                    <td>Category:</td>
                    <td><input type="text" name="category" value="<?php echo $category; ?>"></td>
                </tr>
                <tr>
                    <td>Title:</td>
                    <td><input type="text" name="title" value="<?php echo $title; ?>"></td>
                </tr>
                <tr>
                    <td>Company:</td>
                    <td><input type="text" name="company" value="<?php echo $company; ?>"></td>
                </tr>
                <tr>
                    <td>price:</td>
                    <td><input type="number" name="price" value="<?php echo $price; ?>"></td>
                </tr>
                <tr>
                    <td>Current Image:</td>
                    <td>
                        <?php if ($current_image != "") {
                        ?>
                            <img src="<?php echo SITEURL; ?>assets/products/<?php echo $current_image; ?>" width="100px" height="100px">
                        <?php
                        } else {
                            echo "<div class='error'>Image not Added</div>";
                        } ?>
                    </td>
                </tr>
                <tr>
                    <td>New Image:</td>
                    <td><input type="file" name="image" value=""></td>
                </tr>
                <tr>
                    <td>Availability:</td>
                    <td><input <?php if ($availability == "yes") {echo "checked";} ?> type="radio" name="availability" value="yes">&nbsp;Yes
                        <input <?php if ($availability == "no") {echo "checked";} ?> type="radio" name="availability" value="no">&nbsp;No
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2"><br>
                        <input type="hidden" name="current_image" value="<?php echo $current_image; ?>">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="Update Category" class="btn-primary">
                    </td>
                </tr>


            </table>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $id = $_POST['id'];
            $category = $_POST['category'];
            $title = $_POST['title'];
            $company = $_POST['company'];
            $price = $_POST['price'];
            $current_image = $_POST['current_image'];
            $availability = $_POST['availability'];
            $image = $_POST['image'];
           
            //img selected or not
            if (isset($_FILES['image']['name'])) {

                $image_name = $_FILES['image']['name'];
                if ($image_name != "") {
                    //auto rename images
                    $ext = end(explode('.', $image_name));

                    $image_name = "product-" . rand(000, 999) . '.' . $ext;

                    $source_path = $_FILES['image']['tmp_name'];
                    $destination_path = "../assets/products/" . $image_name;

                    //finally upload the img

                    $upload = move_uploaded_file($source_path, $destination_path);

                    if ($upload == false) {
                        $_SESSION['upload'] = "<div class='error'>upload failed</div>";
                        header('location:' . SITEURL . 'admin/manage-products.php');

                        //stop the process
                        die();
                    }
                   // remove current_image
                    if ($current_image != "") {
                        $remove_path = '../assets/products/' . $current_image;
                        $remove = unlink($remove_path);
                        if ($remove == false) {
                            $_SESSION['failed-remove'] = "<div class='error'>Failed to remove Image.</div>";
                            header("location:" . SITEURL . "admin/manage-products.php");
                            die();
                        }
                    }
                } else {
                    $image_name = $current_image;
                }
            } else {
                $image_name = $current_image;
            }


            //update db
            $sql2 = "UPDATE tbl_product SET
                p_category = '$category',
                p_name='$title',
                p_company = '$company',
                p_price = '$price',
                p_image = '$image_name',
                availability = '$availability'
                WHERE p_id='$id'";

            //execute query
            $res2 = mysqli_query($conn, $sql2);

            if ($res2 == TRUE) {
                $_SESSION['update'] = "<div class='success'>Updated Successfully.</div>";
                header("location:" . SITEURL . "admin/manage-products.php");
            } else {
                $_SESSION['update'] = "<div class='error'>Update Failed.</div>";
                header("location:" . SITEURL . "admin/manage-products.php");
            }
        }
        ?>


    </div>

</div>



<?php
include 'partials/footer.php';
?>