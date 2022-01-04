<?php
include 'config/constants.php';
?>
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Transparent Login Form UI</title> -->
    <link rel="stylesheet" href="css/login.css">
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <div class="bg-img"><img src=" img\service1.jpg">
      <div class="content">
        <header>Sign up Form</header>
        <form action="" method="POST">
        <div class="field space">
                <span class="fa fa-user"></span>
                <input type="text" name="fname" required placeholder="Name">
              </div>
            <div class="field space">
                <span class="fa fa-user"></span>
                <input type="text" name="u_name" required placeholder="username">
              </div>
              <div class="field space">
                <span class="fa fa-user"></span>
                <input type="number" name="contact" required placeholder="Phone">
              </div>
          <div class="field space">
            <span class="fa fa-user"></span>
            <input type="email" name="u_email"  required placeholder="Email">
          </div>
          <div class="field space">
            <span class="fa fa-user"></span>
            <input type="text" name="address" required placeholder="Address">
          </div>
<div class="field space">
            <span class="fa fa-lock"></span>
            <input type="password" name="password" class="pass-key" required placeholder="Password">
            <span class="show">SHOW</span>
          </div>
         
          <div class="pass">
            <a href="#">Forgot Password?</a>
          </div>
<div class="field">
            <input type="submit" name="submit" value="SIGNUP">
          </div>
</form>
<div class="login">
Or login with</div>
<div class="links">
          <div class="facebook">
            <i class="fab fa-facebook-f"><span>Facebook</span></i>
          </div>
<div class="instagram">
            <i class="fab fa-instagram"><span>Instagram</span></i>
          </div>
</div>
<div class="signup">
Do you have account?
          <a href="login.php">Login Now</a>
        </div>
        </div>
       

</div>
</div>
<script>
      const pass_field = document.querySelector('.pass-key');
      const showBtn = document.querySelector('.show');
      showBtn.addEventListener('click', function(){
       if(pass_field.type === "password"){
         pass_field.type = "text";
         showBtn.textContent = "HIDE";
         showBtn.style.color = "#3498db";
       }else{
         pass_field.type = "password";
         showBtn.textContent = "SHOW";
         showBtn.style.color = "#222";
       }
      });
    </script>
  </body>
</html>
<?php
        //process the value from form
        if(isset($_POST['submit']))
        {
        $full_name=$_POST['fname'];
        $username=$_POST['u_name'];
        $email=$_POST['u_email'];
        $password=md5($_POST['password']);
        $address=$_POST['address'];
        $contact=$_POST['contact'];

        //query to save in db
        $sql = "INSERT INTO tbl_user SET 
        fname='$full_name',
        u_name = '$username',
        u_email = '$email',
        u_password = '$password',
        u_address = '$address',
        u_contact = '$contact'

        
        ";

        //execut eand save in db
        $res = mysqli_query($conn, $sql) or die(mysqli_error());
        

        //check data is inserted
        if( $res == TRUE)
        {
            //echo "inserted";
            //create session variable
            $_SESSION['add']="<div class='success'>User Added Successfully</div>";
            //redirect
            header("location:".SITEURL.'login.php');
        }
    }
        // else{
        //      //echo "failed";
        //     //create session variable
        //     $_SESSION['add']="Failed to add admin";
        //     //redirect
        //     header("location:".SITEURL.'admin/manage-admin.php');

        // }

?>
