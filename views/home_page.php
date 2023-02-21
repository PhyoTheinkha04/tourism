<?php
//    include_once "tourism/html-head.php";
include './html-head.php';

?>
<?php 
// Start session 
session_start(); 
 
// Get data from session 
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:''; 
 
// Get status from session 
if(!empty($sessData['status']['msg'])){ 
    $statusMsg = $sessData['status']['msg']; 
    $status = $sessData['status']['type']; 
    unset($_SESSION['sessData']['status']); 
} 
 
$postData = array(); 
if(!empty($sessData['postData'])){ 
    $postData = $sessData['postData']; 
    unset($_SESSION['postData']); 
} 
?>
<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
			your browser</a> to improve your experience and security.</p>
		<![endif]-->

<!-- main-menu Start -->

<body>

    <header class="top-area">
        <div class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="logo">
                            <a href="login2.php">
                                Tunar<span>Tour</span>
                            </a>
                        </div><!-- /.logo-->
                    </div><!-- /.col-->
                    <div class="col-sm-10">
                        <div class="main-menu">

                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target=".navbar-collapse">
                                    <i class="fa fa-bars"></i>
                                </button><!-- / button-->
                            </div><!-- /.navbar-header-->

                            <div class="collapse navbar-collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="smooth-menu"><a href="#home">home</a></li>
                                    <li class="smooth-menu"><a href="#gallery">Destination</a></li>
                                    <li class="smooth-menu"><a href="#blog">blog</a></li>

                                    <li class=""><a href="../login/login.php">login</a></li>
                                    <!--/.project-btn-->

                                </ul>

                            </div>
                            <div class="form-popup" id="myForm">
                                <form action="/action_page.php" class="form-container">
                                    <h1>Login</h1>

                                    <label for="email"><b>Email</b></label>
                                    <input type="text" placeholder="Enter Email" name="email" required>

                                    <label for="psw"><b>Password</b></label>
                                    <input type="password" placeholder="Enter Password" name="psw" required>

                                    <button type="submit" class="btn">Login</button>
                                    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                                </form>
                            </div>
                            <!-- partial -->

                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.main-menu-->
                </div><!-- /.col-->
            </div><!-- /.row -->
            <div class="home-border"></div><!-- /.home-border-->
        </div><!-- /.container-->
        </div><!-- /.header-area -->

    </header><!-- /.top-area-->
    <!-- main-menu End -->


    <!--about-us start -->
    <section id="home" class="about-us">
        <div class="container">
            <div class="about-us-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="single-about-us">
                            <div class="about-us-txt">
                                <h2>
                                    Explore the Beauty of the Beautiful World

                                </h2>
                                <div class="about-btn">
                                    <button class="about-view">
                                        explore now
                                    </button>
                                </div>
                                <!--/.about-btn-->
                            </div>
                            <!--/.about-us-txt-->
                        </div>
                        <!--/.single-about-us-->
                    </div>
                    <!--/.col-->
                    <div class="col-sm-0">
                        <div class="single-about-us">

                        </div>
                        <!--/.single-about-us-->
                    </div>
                    <!--/.col-->
                </div>
                <!--/.row-->
            </div>
            <!--/.about-us-content-->
        </div>
        <!--/.container-->

    </section>
    <!--/.about-us-->
    <!--about-us end -->

    <!--travel-box start-->

    <!--travel-box end-->

    <!--service start-->

    <!--/.service-->
    <!--service end-->

    <!--galley start-->
    <section id="gallery" class="gallery">
        <div class="container">
            <div class="gallery-details">
                <div class="gallary-header text-center">
                    <h2>
                        top destination
                    </h2>
                    <p>
                        the most popular countries
                    </p>
                </div>
                <!--/.gallery-header-->
                <div class="gallery-box">
                    <div class="gallery-content">
                        <div class="filtr-container">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="filtr-item">
                                        <img src="../assets/images/gallary/g1.jpg" alt="portfolio image" />
                                        <div class="item-title">
                                            <a href="#">
                                                china
                                            </a>
                                            <p><span>20 tours</span><span>15 places</span></p>
                                        </div><!-- /.item-title -->
                                    </div><!-- /.filtr-item -->
                                </div><!-- /.col -->

                                <div class="col-md-6">
                                    <div class="filtr-item">
                                        <img src="../assets/images/gallary/g2.jpg" alt="portfolio image" />
                                        <div class="item-title">
                                            <a href="#">
                                                venuzuala
                                            </a>
                                            <p><span>12 tours</span><span>9 places</span></p>
                                        </div> <!-- /.item-title-->
                                    </div><!-- /.filtr-item -->
                                </div><!-- /.col -->

                                <div class="col-md-4">
                                    <div class="filtr-item">
                                        <img src="../assets/images/gallary/g3.jpg" alt="portfolio image" />
                                        <div class="item-title">
                                            <a href="#">
                                                brazil
                                            </a>
                                            <p><span>25 tours</span><span>10 places</span></p>
                                        </div><!-- /.item-title -->
                                    </div><!-- /.filtr-item -->
                                </div><!-- /.col -->

                                <div class="col-md-4">
                                    <div class="filtr-item">
                                        <img src="../assets/images/gallary/g4.jpg" alt="portfolio image" />
                                        <div class="item-title">s
                                            <a href="#">
                                                australia
                                            </a>
                                            <p><span>18 tours</span><span>9 places</span></p>
                                        </div> <!-- /.item-title-->
                                    </div><!-- /.filtr-item -->
                                </div><!-- /.col -->

                                <div class="col-md-4">
                                    <div class="filtr-item">
                                        <img src="../assets/images/gallary/g5.jpg" alt="portfolio image" />
                                        <div class="item-title">
                                            <a href="#">
                                                netharland
                                            </a>
                                            <p><span>14 tours</span><span>12 places</span></p>
                                        </div> <!-- /.item-title-->
                                    </div><!-- /.filtr-item -->
                                </div><!-- /.col -->

                                <div class="col-md-8">
                                    <div class="filtr-item">
                                        <img src="../assets/images/gallary/g6.jpg" alt="portfolio image" />
                                        <div class="item-title">
                                            <a href="#">
                                                turkey
                                            </a>
                                            <p><span>14 tours</span><span>6 places</span></p>
                                        </div> <!-- /.item-title-->
                                    </div><!-- /.filtr-item -->
                                </div><!-- /.col -->

                            </div><!-- /.row -->

                        </div><!-- /.filtr-container-->
                    </div><!-- /.gallery-content -->
                </div>
                <!--/.galley-box-->
            </div>
            <!--/.gallery-details-->
        </div>
        <!--/.container-->

    </section>
    <!--/.gallery-->
    <!--gallery end-->






    <!-- testemonial Start -->
    <section class="testemonial">
        <div class="container">

            <div class="gallary-header text-center">
                <h2>
                    clients reviews
                </h2>
                <p>
                    Duis aute irure dolor in velit esse cillum dolore eu fugiat nulla.
                </p>

            </div>
            <!--/.gallery-header-->

            <div class="owl-carousel owl-theme" id="testemonial-carousel">

                <div class="home1-testm item">
                    <div class="home1-testm-single text-center">
                        <div class="home1-testm-img">
                            <img src="../assets/images/client/testimonial1.jpg" alt="img" />
                        </div>
                        <!--/.home1-testm-img-->
                        <div class="home1-testm-txt">
                            <span class="icon section-icon">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </span>
                            <p>
                                Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam.
                            </p>
                            <h3>
                                <a href="#">
                                    kevin watson
                                </a>
                            </h3>
                            <h4>london, england</h4>
                        </div>
                        <!--/.home1-testm-txt-->
                    </div>
                    <!--/.home1-testm-single-->

                </div>
                <!--/.item-->

                <div class="home1-testm item">
                    <div class="home1-testm-single text-center">
                        <div class="home1-testm-img">
                            <img src="../assets/images/client/testimonial2.jpg" alt="img" />
                        </div>
                        <!--/.home1-testm-img-->
                        <div class="home1-testm-txt">
                            <span class="icon section-icon">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </span>
                            <p>
                                Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam.
                            </p>
                            <h3>
                                <a href="#">
                                    kevin watson
                                </a>
                            </h3>
                            <h4>london, england</h4>
                        </div>
                        <!--/.home1-testm-txt-->
                    </div>
                    <!--/.home1-testm-single-->

                </div>
                <!--/.item-->

                <div class="home1-testm item">
                    <div class="home1-testm-single text-center">
                        <div class="home1-testm-img">
                            <img src="../assets/images/client/testimonial1.jpg" alt="img" />
                        </div>
                        <!--/.home1-testm-img-->
                        <div class="home1-testm-txt">
                            <span class="icon section-icon">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </span>
                            <p>
                                Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam.
                            </p>
                            <h3>
                                <a href="#">
                                    kevin watson
                                </a>
                            </h3>
                            <h4>london, england</h4>
                        </div>
                        <!--/.home1-testm-txt-->
                    </div>
                    <!--/.home1-testm-single-->

                </div>
                <!--/.item-->

                <div class="home1-testm item">
                    <div class="home1-testm-single text-center">
                        <div class="home1-testm-img">
                            <img src="../assets/images/client/testimonial1.jpg" alt="img" />
                        </div>
                        <!--/.home1-testm-img-->
                        <div class="home1-testm-txt">
                            <span class="icon section-icon">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </span>
                            <p>
                                Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam.
                            </p>
                            <h3>
                                <a href="#">
                                    kevin watson
                                </a>
                            </h3>
                            <h4>london, england</h4>
                        </div>
                        <!--/.home1-testm-txt-->
                    </div>
                    <!--/.home1-testm-single-->

                </div>
                <!--/.item-->

                <div class="home1-testm item">
                    <div class="home1-testm-single text-center">
                        <div class="home1-testm-img">
                            <img src="../assets/images/client/testimonial2.jpg" alt="img" />
                        </div>
                        <!--/.home1-testm-img-->
                        <div class="home1-testm-txt">
                            <span class="icon section-icon">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </span>
                            <p>
                                Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam.
                            </p>
                            <h3>
                                <a href="#">
                                    kevin watson
                                </a>
                            </h3>
                            <h4>london, england</h4>
                        </div>
                        <!--/.home1-testm-txt-->
                    </div>
                    <!--/.home1-testm-single-->

                </div>
                <!--/.item-->

                <div class="home1-testm item">
                    <div class="home1-testm-single text-center">
                        <div class="home1-testm-img">
                            <img src="../assets/images/client/testimonial1.jpg" alt="img" />
                        </div>
                        <!--/.home1-testm-img-->
                        <div class="home1-testm-txt">
                            <span class="icon section-icon">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </span>
                            <p>
                                Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam.
                            </p>
                            <h3>
                                <a href="#">
                                    kevin watson
                                </a>
                            </h3>
                            <h4>london, england</h4>
                        </div>
                        <!--/.home1-testm-txt-->
                    </div>
                    <!--/.home1-testm-single-->

                </div>
                <!--/.item-->

                <div class="home1-testm item">
                    <div class="home1-testm-single text-center">
                        <div class="home1-testm-img">
                            <img src="../assets/images/client/testimonial1.jpg" alt="img" />
                        </div>
                        <!--/.home1-testm-img-->
                        <div class="home1-testm-txt">
                            <span class="icon section-icon">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </span>
                            <p>
                                Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam.
                            </p>
                            <h3>
                                <a href="#">
                                    kevin watson
                                </a>
                            </h3>
                            <h4>london, england</h4>
                        </div>
                        <!--/.home1-testm-txt-->
                    </div>
                    <!--/.home1-testm-single-->

                </div>
                <!--/.item-->

                <div class="home1-testm item">
                    <div class="home1-testm-single text-center">
                        <div class="home1-testm-img">
                            <img src="../assets/images/client/testimonial2.jpg" alt="img" />
                        </div>
                        <!--/.home1-testm-img-->
                        <div class="home1-testm-txt">
                            <span class="icon section-icon">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </span>
                            <p>
                                Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam.
                            </p>
                            <h3>
                                <a href="#">
                                    kevin watson
                                </a>
                            </h3>
                            <h4>london, england</h4>
                        </div>
                        <!--/.home1-testm-txt-->
                    </div>
                    <!--/.home1-testm-single-->

                </div>
                <!--/.item-->

                <div class="home1-testm item">
                    <div class="home1-testm-single text-center">
                        <div class="home1-testm-img">
                            <img src="../assets/images/client/testimonial1.jpg" alt="img" />
                        </div>
                        <!--/.home1-testm-img-->
                        <div class="home1-testm-txt">
                            <span class="icon section-icon">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </span>
                            <p>
                                Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam.
                            </p>
                            <h3>
                                <a href="#">
                                    kevin watson
                                </a>
                            </h3>
                            <h4>london, england</h4>
                        </div>
                        <!--/.home1-testm-txt-->
                    </div>
                    <!--/.home1-testm-single-->

                </div>
                <!--/.item-->

            </div>
            <!--/.testemonial-carousel-->
        </div>
        <!--/.container-->

    </section>
    <!--/.testimonial-->
    <!-- testemonial End -->




    <!--blog start-->
    <section id="blog" class="blog">
        <div class="container">
            <div class="blog-details">
                <div class="gallary-header text-center">
                    <h2>
                        latest news
                    </h2>
                    <p>
                        Travel News from all over the world
                    </p>
                </div>
                <!--/.gallery-header-->
                <div class="blog-content">
                    <div class="row">

                        <div class="col-sm-4 col-md-4">
                            <div class="thumbnail">
                                <h2>trending news <span>15 november 2017</span></h2>
                                <div class="thumbnail-img">
                                    <img src="../assets/images/blog/b1.jpg" alt="blog-img">
                                    <div class="thumbnail-img-overlay"></div>
                                    <!--/.thumbnail-img-overlay-->

                                </div>
                                <!--/.thumbnail-img-->

                                <div class="caption">
                                    <div class="blog-txt">
                                        <h3>
                                            <a href="#">
                                                Discover on beautiful weather, Fantastic foods and historical place in
                                                Prag
                                            </a>
                                        </h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam
                                        </p>
                                        <a href="#">Read More</a>
                                    </div>
                                    <!--/.blog-txt-->
                                </div>
                                <!--/.caption-->
                            </div>
                            <!--/.thumbnail-->

                        </div>
                        <!--/.col-->

                        <div class="col-sm-4 col-md-4">
                            <div class="thumbnail">
                                <h2>trending news <span>15 november 2017</span></h2>
                                <div class="thumbnail-img">
                                    <img src="../assets/images/blog/b2.jpg" alt="blog-img">
                                    <div class="thumbnail-img-overlay"></div>
                                    <!--/.thumbnail-img-overlay-->

                                </div>
                                <!--/.thumbnail-img-->
                                <div class="caption">
                                    <div class="blog-txt">
                                        <h3>
                                            <a href="#">
                                                Discover on beautiful weather, Fantastic foods and historical place in
                                                india
                                            </a>
                                        </h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam
                                        </p>
                                        <a href="#">Read More</a>
                                    </div>
                                    <!--/.blog-txt-->
                                </div>
                                <!--/.caption-->
                            </div>
                            <!--/.thumbnail-->

                        </div>
                        <!--/.col-->

                        <div class="col-sm-4 col-md-4">
                            <div class="thumbnail">
                                <h2>trending news <span>15 november 2017</span></h2>
                                <div class="thumbnail-img">
                                    <img src="../assets/images/blog/b3.jpg" alt="blog-img">
                                    <div class="thumbnail-img-overlay"></div>
                                    <!--/.thumbnail-img-overlay-->

                                </div>
                                <!--/.thumbnail-img-->
                                <div class="caption">
                                    <div class="blog-txt">
                                        <h3><a href="#">10 Most Natural place to Discover</a></h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam
                                        </p>
                                        <a href="#">Read More</a>
                                    </div>
                                    <!--/.blog-txt-->
                                </div>
                                <!--/.caption-->
                            </div>
                            <!--/.thumbnail-->

                        </div>
                        <!--/.col-->

                    </div>
                    <!--/.row-->
                </div>
                <!--/.blog-content-->
            </div>
            <!--/.blog-details-->
        </div>
        <!--/.container-->

    </section>
    <!--/.blog-->
    <!--blog end-->


    <!--subscribe start-->
    <section id="subs" class="subscribe">
        <div class="container">
            <div class="subscribe-title text-center">
                <h2>
                    Join our team for your trip
                </h2>
                <p>
                    sign up now!
                </p>
            </div>

            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="custom-input-group">
                        <button class="appsLand-btn subscribe-btn"><a href="../login/login.php">login</a></button>
                        <div class="clearfix"></div>
                    </div>

                </div>
            </div>

        </div>

    </section>
    <!--subscribe end-->
    <!-- footer-copyright start -->

    <?php
//    include_once "tourism/html-head.php";
include './htmlfoot.php';

?>