<?php
include 'Templates/indexheader.php';
include 'config/constants.php';
include 'Templates/login-check.php';
?>
<nav class="fixed-top navbar navbar-expand-lg navbar-dark bg-light">
    <a class="navbar-brand col-lg-2" href="index.php">
        <img src="assets/logopng.png" width="100%" height="100%" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php"> Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="buildpc.php">Build Pc</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
        </ul>

    </div>
    <li>
        <a href="<?php echo SITEURL; ?>logout.php" style="margin-right: 5px;"><i class="fa fa-user"
                aria-hidden="true">&nbsp;Logout</i></a>
    </li>

</nav>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="assets/AMD2.JPG" alt="First slide">
            <div class="carousel-caption">
                <p>THE FASTEST <br> IN <br>THE GAME1</p>

            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="assets/NVIDIA.jpg" alt="Second slide">
            <div class="carousel-caption">
                <p>GEFORCE® <br> RTX 30 SERIES <br> NOW AVAILABLE</p>

            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="assets/GAMEPC.jpg" alt="Third slide">
            <div class="carousel-caption">
                <p>BUSINESS DESKTOPS, <br> GAMING, <br> WORKSTATIONS.</p>

            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<section id="products" class="bg-dark pc">
    <div class="container-fluid py-3 ">
        <div class="row text-center justify-content-sm-center">
            <div class="col-12 col-md-2 col-xxl py-0">
                <a href="budget.php"><img class="img-fluid" src="assets/gaming-desktops.jpg" alt=""></a>
                <a href="budget.php" class="btn btn-flat btn-lg d-block m-auto px-4 waves-effect">BUDGET GAMING</a>
                <P>Enjoy all your favourite latest games without breaking the bank.</P>
            </div>
            <div class="col-10 col-md-2 col-xxl py-0">
                <a href="enthusiast.php"><img class="img-fluid" src="assets/gaming-laptops.jpg" alt=""></a>
                <a href="enthusiast.php" class="btn btn-flat btn-lg d-block m-auto px-4 waves-effect">ENTHUSIAST
                    GAMING</a>
                <p>Series that smashes 1080p and can handle 1440p with a few tweaks.</p>
            </div>
            <div class="col-10 col-md-2 col-xxl py-0">
                <a href="extreme.php"><img class="img-fluid" src="assets/workstation-desktops.jpg" alt=""></a>
                <a href="extreme.php" class="btn btn-flat btn-lg d-block m-auto px-4 waves-effect">EXTREME GAMING</a>
                <p>Extreme grade with high-end 4k and VR gaming experience.</p>
            </div>
            <div class="col-10 col-md-2 col-xxl py-0">
                <a href="streaming.php"><img class="img-fluid" src="assets/workstation-laptops.jpg" alt=""></a>
                <a href="streaming.php" class="btn btn-flat btn-lg d-block m-auto px-4 waves-effect">STREAMING</a>
                <p>Top of the line Streaming ready gaming system.</p>
            </div>

        </div>
    </div>
</section>
<!-- content -->
<section>
    <div class="container-fluid contentrow">
        <div class="row">
            <div class="col-md-4 contentBackground">
                <p>BUILD BY EXPERTS</p>
            </div>
        </div>
    </div>
</section>
<div class="container-fluid content">
    <div class="row">
        <div class="col-sm-6 lft">
            <p>We totally love building Gaming PC's here at SYMBiOTE PC, and our skilled team of technicians is
                enthusiastic to help you create your very own dream PC.
                <br><br>
                SYMBiOTE PC makes it all very easy, you can come and use our Online Custom PC Building Tool to create
                your perfect configuration - and then have us build it for you! You won’t need to be a hardware guru to
                design a system, we only provide customization which is compatible with each other. The configurator
                tool works by providing a range of fully functional base models from which you can customize your
                machine, customizing the chassis, graphics or adding digital storage depending as per your requirements.
                You’ll be happily swapping out components to get the perfect PC build with no worries.
                <br><br><br>
                If you can dream it, we can build it!
            </p>
        </div>
        <div class="col-sm-6 rt">
            <img class="img-fluid" src="assets/rtimg.png" alt="">
        </div>
    </div>
</div>

<?php
include 'Templates/jsscript.php';
?>
<?php
include 'Templates/footer.php';
?>