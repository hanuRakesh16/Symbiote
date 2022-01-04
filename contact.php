<?php
session_start();
include 'Templates/contactheader.php';
include 'config/constants.php';
include 'Templates/login-check.php';
?>
<?php
include 'sendemail.php';
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

            <li class="nav-item active">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
        </ul>
<!--        <div class="dropdown dropleft" style="width:200px">-->
<!--            <button class="btn dropdown dropleft" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background:transparent;">-->
<!--                <a href="login.php" style="margin-right: 10px;"><i class="fa fa-user" aria-hidden="true">&nbsp; Login</i></a>-->
<!--            </button>-->
<!--            <div class="dropdown-menu" style="width:300px;">-->
<!--                <form class="px-3 py-3">-->
<!--                    <div class="form-group">-->
<!--                        <label for="exampleDropdownFormEmail1" class="text-dark">Email address</label>-->
<!--                        <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="Email">-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <label for="exampleDropdownFormPassword1" class="text-dark">Password</label>-->
<!--                        <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">-->
<!--                    </div>-->
<!--                    <div class="form-check">-->
<!--                        <input type="checkbox" class="form-check-input" id="dropdownCheck">-->
<!--                        <label class="form-check-label text-dark" for="dropdownCheck">-->
<!--                            Remember me-->
<!--                        </label>-->
<!--                    </div>-->
<!--                    <button type="submit" class="btn btn-primary">Sign in</button>-->
<!--                </form>-->
<!--                <div class="dropdown-divider"></div>-->
<!--                <a class="dropdown-item" href="login.php">New around here? Sign up</a>-->
<!--                <a class="dropdown-item" href="#">Forgot password?</a>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <li>-->
<!---->
<!--            <a href="cart.php" class="btn"><i class="fa fa-shopping-cart" aria-hidden="true">  Cart</i></a>-->
<!---->
<!--        </li>-->

    </div>
</nav>

<!-- content -->

<div class="abt">
    <section class="bounce">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-4 contact-info">
                            <h2 class="lt-heading">CONTACT INFO</h2>
                            <ul>
                                <li class="info">
                                    <span class="contact-icons"><i class="fa fa-mobile" aria-hidden="true"></i></span>
                                    <h5>CALL US :</h5>
                                    <span> <a href="tel:+919788954570">+91 9788954570</a><br>
                              <a href="tel:+916383346336">+91 6383346336</a></span>
                                </li>
                                <li class="info">
                                    <span class="contact-icons"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                    <h5>MAIL US :</h5>
                                    <span>  <a href="mailto:symbioteincorp@gmail.com">symbioteincorp@gmail.com</a></span>
                                </li>
                                <li class="info">
                                    <span class="contact-icons"><i class="fa fa-whatsapp" aria-hidden="true"></i></span>
                                    <h5>WHATSAPP</h5>
                                    <span><a href="https://api.WhatsApp.com/send?phone=+916383346336" target="blank">Chat with us</a></span>
                                </li>
                                <li class="info">
                                    <span class="contact-icons"><i class="fa fa-whatsapp" aria-hidden="true"></i></span>
                                    <h5>ADDRESS</h5>
                                    <span> 44, Sai Gowtham nivas, Muthusamy Colony, Selvapuram, Coimbatore - 641 026.</span>
                                </li>
                            </ul>
                        </div>
                        <?php echo $alert; ?>
                        <div class="col-md-8 contact-form">
                            <h2 class="rt-heading">CONTACT FORM</h2>
                            <div class="cap">
                                <p>Help us to know you better.</p>
                            </div>
                            <form class="contact" action="" method="post">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" class="text-box form-control"   placeholder="Enter your name" required>
                                </div>
                                <div class="form-group">
                                    <label >Email address</label>
                                    <input type="email" name="email" class="text-box form-control" placeholder="Enter your email" required>
                                </div>
                                <div class="form-group">
                                    <label>Contacting For</label>
                                    <select name="reason" class="form-control" required>
                                        <option value="">Select</option>
                                        <option value="buy">Buy a new PC</option>
                                        <option value="upgrade">Uprading existing PC </option>
                                        <option value="feedback">Suggestion & Feedback</option>
                                        <option value="others">Others</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea  name="message" class="text-box form-control" rows="5" placeholder="Type your message here..." required></textarea>
                                </div>
                                <input type="submit" name="submit" value="Submit" class="btn send-btn btn-primary mb-2 btn-danger">SUBMIT</input>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>
</div>
<script type="text/javascript">
    if(window.history.replaceState){
        window.history.replaceState(null, null, window.location.href);
    }
</script>
<?php
include 'Templates/jsscript.php';
?>


