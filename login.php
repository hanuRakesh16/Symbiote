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
    <link type="text/css" rel="stylesheet" href="css/login.css">
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <div class="bg-img">
      <div class="content">
        <header>Login Form</header>
        <?php
        if (isset($_SESSION['login']))
        {
            echo $_SESSION['login'];
            unset ($_SESSION['login']);
        }
        if(isset($_SESSION['no-login-msg']))
        {
            echo $_SESSION['no-login-msg'];
            unset ($_SESSION['no-login-msg']);
        }
    ?>
        <form action="" method="POST">
          <div class="field">
            <span class="fa fa-user"></span>
            <input type="text" name="username" required placeholder="Email or Phone">
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
            <input type="submit" name="submit" value="LOGIN">
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
Don't have account?
          <a href="signup.php">Signup Now</a>
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
//process the value ans save
if (isset($_POST['submit'])) {
    //echo "Button clicked";
  //getting login info
  $username = $_POST['username'];
  $password = md5($_POST['password']);

  //sql query
  $sql = "SELECT * FROM tbl_user where u_name ='$username' AND u_password='$password'";

  $res= mysqli_query($conn, $sql);

  $count = mysqli_num_rows($res);
  if($count == 1)
  {
      //not avail user
      $_SESSION['login'] = "<div class='success text-center'>Login succesfull</div>";
      $_SESSION['uid'] = mysqli_insert_id($conn);
      $_SESSION['user'] =$username; //checking whether the user is logged in or not
      header("location:".SITEURL);
  }
  else{
      $_SESSION['login'] = "<div class='password text-center text-danger'>Username or Password did not match</div>";
      header("location:".SITEURL.'login.php');
 }


}

?>
