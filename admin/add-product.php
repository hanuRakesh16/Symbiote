<?php
include 'partials/menu.php';
?>

    <div class=main-content>
    <div class="wrapper">
    <h1>Add Product</h1>
    <br><br>
    <?php
    if(isset($_SESSION['add'])){
        echo $_SESSION['add'];
        unset($_SESSION['add']);
    }
    if(isset($_SESSION['upload'])){
        echo $_SESSION['upload'];
        unset($_SESSION['upload']);
    }

    ?>
    <br><br>
    <form action="" method="POST" enctype="multipart/form-data">
    <table class="tbl-30">
        <tr>
        <td>Category:</td>
        <td>
            <input type="text" name="category" placeholder="category">
        </td></tr>
        <tr>
        <td>Title:</td>
        <td>
            <input type="text" name="title" placeholder="title">
        </td></tr>
        <tr>
        <td>Company:</td>
        <td>
            <input type="text" name="company" placeholder="company">
        </td></tr>
        <tr>
        <td>Price:</td>
        <td>
            <input type="number" name="price" placeholder="price">
        </td>
        
        </tr>
        <tr>
        <td>Image:</td>
        <td>
            <input type=file name="image">
        </td>
        </tr>
        <tr>
        <td>Availability:</td>
            <td>
            <input type="radio" name="availability" value="yes">&nbsp;Yes
            <input type="radio" name="availability" value="no">&nbsp;No</td>
            </tr>
           

            <tr>
            <td colspan="2">
            <input type="submit" name="submit" value="Add Product" class="btn-primary">
            </td>
            </tr>
    </table>


    </form>

    <?php
    if(isset($_POST['submit'])){
       //get value from form
        $category = $_POST['category'];
       $title = $_POST['title'];
       $company = $_POST['company'];
       $price = $_POST['price'];
       if(isset($_POST['availability'])){
        //get the value
         $availability = $_POST['availability'];
    }
    else{
        //set default
         $availability = "no";
    }
    
      
       
       //check img is uploaded
    if(isset($_FILES['image']['name'])){
        //upload the img
        $image_name = $_FILES['image']['name'];

        //upload only if img is selected
        if($image_name != ""){

        

        //auto rename images
        $ext = end(explode('.',$image_name));

        $image_name = "product-".rand(000,999).'.'.$ext;

        $source_path = $_FILES['image']['tmp_name'];
        $destination_path = "../assets/products/".$image_name;

        //finally upload the img

        $upload = move_uploaded_file($source_path, $destination_path);

        if($upload == false){
            $_SESSION['upload'] = "<div class='error'>upload failed</div>";
            header('location:'.SITEURL.'admin/add-product.php');

            //stop the process
            die();
        }
       

    }
    else{
        //not upload
        $image_name = "";
    }
       //create sql query for
       $sql = "INSERT INTO tbl_product SET 
       p_category = '$category',
       p_name = '$title',
       p_company = '$company',
       p_price = '$price',
       p_image = '$image_name',
       availability = '$availability'
       
       ";
       //execute the query
       $res = mysqli_query($conn, $sql);

       //checking execute query
        if($res == TRUE){
            $_SESSION['add'] = "<div class='success'>Added Successfully</div>";
            header('location:'.SITEURL.'admin/manage-products.php');
        }
        else{
            $_SESSION['add'] = "<div class='error'>Product Update Failed</div>";
            header('location:'.SITEURL.'admin/manage-products.php');
        }
    }
}


    ?>

    </div>
    </div>



<?php
include 'partials/footer.php';
?>