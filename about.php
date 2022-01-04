<?php
session_start();
include 'Templates/aboutheader.php';
include 'config/constants.php';
include 'Templates/login-check.php';
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
            <li class="nav-item ">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="about.php">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="buildpc.php">Build Pc</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
        </ul>
<!--        <div class="dropdown dropleft" style="width:200px">-->
<!--            <button class="btn dropdown dropleft" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background:transparent;">-->
<!--                <a href="login.html" style="margin-right: 10px;"><i class="fa fa-user" aria-hidden="true">&nbsp; Login</i></a>-->
<!--            </button>-->
<!--            <div class="dropdown-menu" style="width:300px;">-->
<!--                <form class="px-3 py-3">-->
<!--                    <div class="form-group">-->
<!--                        <label for="exampleDropdownFormEmail1">Email address</label>-->
<!--                        <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="Email">-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <label for="exampleDropdownFormPassword1">Password</label>-->
<!--                        <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">-->
<!--                    </div>-->
<!--                    <div class="form-check">-->
<!--                        <input type="checkbox" class="form-check-input" id="dropdownCheck">-->
<!--                        <label class="form-check-label" for="dropdownCheck">-->
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
<!--        <li>-->
<!---->
<!--            <a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true">   Cart</i></a>-->
<!---->
<!--        </li>-->
<!---->
<!--    </div>-->
</nav>
<!-- content -->
<div class="container-fluid">
    <div class="row left-to-right">
        <div class="col-md-6 lt-part">
            <div class="abt-icon">
                <img src="assets/SYMBIOTE.png" alt="" height="50%" width="50%">
            </div>
            <h1>WELCOME TO SYMBiOTE PC</h1>
            <p>Our team at SYMBiOTE-PC is driven through our passion for advanced computing and technology. We hold the highest standards when it comes to building PCs. Our team consists of professionals who would love to hear what you need. We make sure that we offer the best solution to customers keeping their budget in consideration. We learn about what you do, we listen to what you need and we tell you if there is anything that you don’t need.</p>
        </div>
        <div class="col-md-6 rt-part">
            <img src="assets/teamwork.jpg" alt="team" class="img-fluid team">
        </div>
    </div>
    <div class="row right-to-left">
        <div class="col-md-6 lt-part2">
            <img src="assets/whitepc.png" alt="">
        </div>
        <div class="col-md-6 rt-part2">
            <h1>OUR MOTTO <br>
                BUILDING YOUR DREAM PC.</h1>
            <p>Our team at SYMBiOTE-PC is driven through our passion for advanced computing and technology. We hold the highest standards when it comes to building PCs. Our team consists of professionals who would love to hear what you need. We make sure that we offer the best solution to customers keeping their budget in consideration. We learn about what you do, we listen to what you need and we tell you if there is anything that you don’t need.</p>
        </div>
    </div>
</div>
<section class="py-5 abt">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 abt-hd">
                <h1>BUILD BY EXPERTS + LIFE TIME SUPPORT</h1>
            </div>
            <div class="col-sm-6">
                <div class="box">
                    <span class="sym"><img src="assets/pc-design.svg" alt=""></span>
                    <span class="txt"><h4>CRAFTMANSHIP</h4>
              <p>Our assembly is handled by professionals that religiously follow the belief that a clean build is a good build. These individuals handle only one PC at a time. They make sure that each PC is a fine tuned machine.</p>
              </span>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="box">
                    <span class="sym"><img src="assets/performance.svg" alt=""></span>
                    <span class="txt"><h4>PERFORMANCE</h4>
              <p>Each PC is a fine tuned computing machine. What we promise with each machine is performance. We guarantee that each machine will match your expectations.</p>
              </span>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="box">
                    <span class="sym"><img src="assets/testing.svg" alt=""></span>
                    <span class="txt"><h4>TESTING</h4>
              <p>Our work is of precision and deliverance. Before we dispatch any product, we take it through its paces to make sure that we deliver what we have promised. We take the product through various benchmark tests to make sure that your PC will not cause any limitations or bottlenecks while you are using it.</p>
              </span>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="box">
                    <span class="sym"><img src="assets/support-headset.svg" alt=""></span>
                    <span class="txt"><h4>SUPPORT</h4>
              <p>As service providers, we seek to make sure that you have everything you need. We are here to make sure that you are never denied anything when it comes to your computing needs. This is why we are here to provide a one stop shop for all you need.</p>
              </span>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-0">
    <div class="container-fluid abt-last">
        <div class="row ">
            <div class="col-md-6 design" data-mdb-animation-on-scroll="repeat">
                <h1>DESIGNED TO BE UNIQUE</h1>
                <p>Not everyone lives the same way. However we all have our differences in our way of life. Here at Ant-PC we have embraced the power of diversity and we work hard to encourage it. Which is why our custom solutions are designed to your specification. With billions of possible hardware combinations available to your disposal; we can build PCs that are specifically made to your criteria. We make sure that what you want can be a one of a kind solution. We can make sure that what we build for you is truly unique.</p>
            </div>
            <div class="col-md-6 design">
                <span><img src="assets/towerpc.png" alt=""></span>
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
