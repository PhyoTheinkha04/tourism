<?php
//    include_once "tourism/html-head.php";
include './html-head2.php';
?>

<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
			your browser</a> to improve your experience and security.</p>
		<![endif]-->

<!-- main-menu Start -->

<body>
    <!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
			your browser</a> to improve your experience and security.</p>
		<![endif]-->

    <!-- main-menu Start -->
    <header class="top-area">
        <div class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="logo">
                            <a href="index.html">
                                tour<span>Nest</span>
                            </a>
                        </div><!-- /.logo-->
                    </div><!-- /.col-->
                    <div class="col-sm-10">
                        <div class="main-menu">

                          

                            <div class="regisFrm">

                               
                            </div>
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
                                    <li class="smooth-menu"><a href="#pack">Packages </a></li>
                                    <li class="smooth-menu"><a href="#spo">Special Offers</a></li>
                                    <li class="smooth-menu"><a href="#blog">News</a></li>
                                    <li class="smooth-menu"><a href="#subs">subscription</a></li> 
                                    <li>
                                        <a href="user.Account.php?logoutSubmit=1" class="logout">Logout</a>
                                    </li>
                                    
                                    <!--/.project-btn-->
                                </ul>
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
                                <h2>Welcome <?php echo $userData['username']; ?>!</h2>
                                <h2>
                                    Explore the Beauty of the Beautiful World
                                </h2>
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

    <!-- travel-box start-->
    <!--/.travel-box-->
    <!--travel-box end -->

    <!--service start-->


    <!--galley start-->
    <section id="gallery" class="gallery">
        <div class="container">
            <div class="gallery-details">
                <div class="gallary-header text-center">
                    <h2>
                        top destination
                    </h2>
                    <p>
                        Where do you wanna go? How much you wanna explore?
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
                                   
                                        </div><!-- /.item-title -->
                                    </div><!-- /.filtr-item -->
                                </div><!-- /.col -->

                                <div class="col-md-4">
                                    <div class="filtr-item">
                                        <img src="../assets/images/gallary/g4.jpg" alt="portfolio image" />
                                        <div class="item-title">
                                            <a href="#">
                                                australia
                                            </a>
                                          
                                        </div> <!-- /.item-title-->
                                    </div><!-- /.filtr-item -->
                                </div><!-- /.col -->

                                <div class="col-md-4">
                                    <div class="filtr-item">
                                        <img src="../assets/images/gallary/g5.jpg" alt="portfolio image" />
                                        <div class="item-title">
                                            <a href="#">
                                                netharlands
                                            </a>
                                     
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


    <!--discount-offer start-->
    <section class="discount-offer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="dicount-offer-content text-center">
                        <h2>Join with us within 22 feb, 2024 and get upto 40% Discount</h2>
                        <div class="campaign-timer">
                            <div id="timer">
                                <div class="time time-after" id="days">
                                    <span></span>
                                </div>
                                <!--/.time-->
                                <div class="time time-after" id="hours">

                                </div>
                                <!--/.time-->
                                <div class="time time-after" id="minutes">

                                </div>
                                <!--/.time-->
                                <div class="time" id="seconds">

                                </div>
                                <!--/.time-->
                            </div>
                            <!--/.timer-->
                        </div>
                        <!--/.campaign-timer-->
                        <div class="about-btn">
                            <button class="about-view discount-offer-btn">
                                join now
                            </button>
                        </div>
                        <!--/.about-btn-->


                    </div><!-- /.dicount-offer-content-->
                </div><!-- /.col-->
            </div><!-- /.row-->
        </div><!-- /.container-->

    </section><!-- /.discount-offer-->
    <!--discount-offer end-->

    <!--packages start-->
    <section id="pack" class="packages">
        <div class="container">
            <div class="gallary-header text-center">
                <h2>
                    special packages
                </h2>
                <p>
                    Duis aute irure dolor in velit esse cillum dolore eu fugiat nulla.
                </p>
            </div>
            <!--/.gallery-header-->
            <div class="packages-content">
                <div class="row">

                    <div class="col-md-4 col-sm-6">
                        <div class="single-package-item">
                            <img src="../assets/images/packages/p1.jpg" alt="package-place">
                            <div class="single-package-item-txt">
                                <h3>italy <span class="pull-right">$499</span></h3>
                                <div class="packages-para">
                                    <p>
                                        <span>
                                            <i class="fa fa-angle-right"></i> 3 Days 2 nights
                                        </span>
                                        <i class="fa fa-angle-right"></i> 5 star accomodation
                                    </p>
                                    <p>
                                        <span>
                                            <i class="fa fa-angle-right"></i> transportation
                                        </span>
                                        <i class="fa fa-angle-right"></i> food facilities
                                    </p>
                                </div>
                                <!--/.packages-para-->
                                <div class="packages-review">
                                    <p>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <span>254 reviews</span>
                                    </p>
                                </div>
                                <!--/.packages-review-->
                                <div class="about-btn">
                                    <button class="about-view packages-btn">
                                        book now
                                    </button>
                                </div>
                                <!--/.about-btn-->
                            </div>
                            <!--/.single-package-item-txt-->
                        </div>
                        <!--/.single-package-item-->

                    </div>
                    <!--/.col-->

                    <div class="col-md-4 col-sm-6">
                        <div class="single-package-item">
                            <img src="../assets/images/packages/p2.jpg" alt="package-place">
                            <div class="single-package-item-txt">
                                <h3>england <span class="pull-right">$1499</span></h3>
                                <div class="packages-para">
                                    <p>
                                        <span>
                                            <i class="fa fa-angle-right"></i> 6 Days 7 nights
                                        </span>
                                        <i class="fa fa-angle-right"></i> 5 star accomodation
                                    </p>
                                    <p>
                                        <span>
                                            <i class="fa fa-angle-right"></i> transportation
                                        </span>
                                        <i class="fa fa-angle-right"></i> Free food
                                    </p>
                                </div>
                                <!--/.packages-para-->
                                <div class="packages-review">
                                    <p>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <span>344 reviews</span>
                                    </p>
                                </div>
                                <!--/.packages-review-->
                                <div class="about-btn">
                                    <button class="about-view packages-btn">
                                        book now
                                    </button>
                                </div>
                                <!--/.about-btn-->
                            </div>
                            <!--/.single-package-item-txt-->
                        </div>
                        <!--/.single-package-item-->

                    </div>
                    <!--/.col-->

                    <div class="col-md-4 col-sm-6">
                        <div class="single-package-item">
                            <img src="../assets/images/packages/p3.jpg" alt="package-place">
                            <div class="single-package-item-txt">
                                <h3>france <span class="pull-right">$1199</span></h3>
                                <div class="packages-para">
                                    <p>
                                        <span>
                                            <i class="fa fa-angle-right"></i> 5 Days 6 nights
                                        </span>
                                        <i class="fa fa-angle-right"></i> 5 star accomodation
                                    </p>
                                    <p>
                                        <span>
                                            <i class="fa fa-angle-right"></i> transportation
                                        </span>
                                        <i class="fa fa-angle-right"></i> food facilities
                                    </p>
                                </div>
                                <!--/.packages-para-->
                                <div class="packages-review">
                                    <p>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <span>544 reviews</span>
                                    </p>
                                </div>
                                <!--/.packages-review-->
                                <div class="about-btn">
                                    <button class="about-view packages-btn">
                                        book now
                                    </button>
                                </div>
                                <!--/.about-btn-->
                            </div>
                            <!--/.single-package-item-txt-->
                        </div>
                        <!--/.single-package-item-->

                    </div>
                    <!--/.col-->

                    <div class="col-md-4 col-sm-6">
                        <div class="single-package-item">
                            <img src="../assets/images/packages/p4.jpg" alt="package-place">
                            <div class="single-package-item-txt">
                                <h3>india <span class="pull-right">$799</span></h3>
                                <div class="packages-para">
                                    <p>
                                        <span>
                                            <i class="fa fa-angle-right"></i> 4 Days 5 nights
                                        </span>
                                        <i class="fa fa-angle-right"></i> 5 star accomodation
                                    </p>
                                    <p>
                                        <span>
                                            <i class="fa fa-angle-right"></i> transportation
                                        </span>
                                        <i class="fa fa-angle-right"></i> food facilities
                                    </p>
                                </div>
                                <!--/.packages-para-->
                                <div class="packages-review">
                                    <p>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <span>625 reviews</span>
                                    </p>
                                </div>
                                <!--/.packages-review-->
                                <div class="about-btn">
                                    <button class="about-view packages-btn">
                                        book now
                                    </button>
                                </div>
                                <!--/.about-btn-->
                            </div>
                            <!--/.single-package-item-txt-->
                        </div>
                        <!--/.single-package-item-->

                    </div>
                    <!--/.col-->

                    <div class="col-md-4 col-sm-6">
                        <div class="single-package-item">
                            <img src="../assets/images/packages/p5.jpg" alt="package-place">
                            <div class="single-package-item-txt">
                                <h3>spain <span class="pull-right">$999</span></h3>
                                <div class="packages-para">
                                    <p>
                                        <span>
                                            <i class="fa fa-angle-right"></i> 4 Days 4 nights
                                        </span>
                                        <i class="fa fa-angle-right"></i> 5 star accomodation
                                    </p>
                                    <p>
                                        <span>
                                            <i class="fa fa-angle-right"></i> transportation
                                        </span>
                                        <i class="fa fa-angle-right"></i> food facilities
                                    </p>
                                </div>
                                <!--/.packages-para-->
                                <div class="packages-review">
                                    <p>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <span>379 reviews</span>
                                    </p>
                                </div>
                                <!--/.packages-review-->
                                <div class="about-btn">
                                    <button class="about-view packages-btn">
                                        book now
                                    </button>
                                </div>
                                <!--/.about-btn-->
                            </div>
                            <!--/.single-package-item-txt-->
                        </div>
                        <!--/.single-package-item-->

                    </div>
                    <!--/.col-->

                    <div class="col-md-4 col-sm-6">
                        <div class="single-package-item">
                            <img src="../assets/images/packages/p6.jpg" alt="package-place">
                            <div class="single-package-item-txt">
                                <h3>thailand <span class="pull-right">$799</span></h3>
                                <div class="packages-para">
                                    <p>
                                        <span>
                                            <i class="fa fa-angle-right"></i> 5 Days 6 nights
                                        </span>
                                        <i class="fa fa-angle-right"></i> 5 star accomodation
                                    </p>
                                    <p>
                                        <span>
                                            <i class="fa fa-angle-right"></i> transportation
                                        </span>
                                        <i class="fa fa-angle-right"></i> food facilities
                                    </p>
                                </div>
                                <!--/.packages-para-->
                                <div class="packages-review">
                                    <p>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <span>447 reviews</span>
                                    </p>
                                </div>
                                <!--/.packages-review-->
                                <div class="about-btn">
                                    <button class="about-view packages-btn">
                                        book now
                                    </button>
                                </div>
                                <!--/.about-btn-->
                            </div>
                            <!--/.single-package-item-txt-->
                        </div>
                        <!--/.single-package-item-->

                    </div>
                    <!--/.col-->

                </div>
                <!--/.row-->
            </div>
            <!--/.packages-content-->
        </div>
        <!--/.container-->

    </section>
    <!--/.packages-->
    <!--packages end-->

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


    <!--special-offer start-->
    <section id="spo" class="special-offer">
        <div class="container">
            <div class="special-offer-content">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="single-special-offer">
                            <div class="single-special-offer-txt">
                                <h2>thiland</h2>
                                <div class="packages-review special-offer-review">
                                    <p>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <span>2544 review</span>
                                    </p>
                                </div>
                                <!--/.packages-review-->
                                <div class="packages-para special-offer-para">
                                    <p>
                                        <span>
                                            <i class="fa fa-angle-right"></i> 5 Days 6 nights
                                        </span>
                                        <span>
                                            <i class="fa fa-angle-right"></i> 2 person
                                        </span>
                                        <span>
                                            <i class="fa fa-angle-right"></i> 5 star accomodation
                                        </span>
                                    </p>
                                    <p>
                                        <span>
                                            <i class="fa fa-angle-right"></i> transportation
                                        </span>
                                        <span>
                                            <i class="fa fa-angle-right"></i> food facilities
                                        </span>
                                    </p>
                                    <p class="offer-para">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem ut
                                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exercitation una <br> ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </p>
                                </div>
                                <!--/.packages-para-->
                                <div class="offer-btn-group">
                                    <div class="about-btn">
                                        <button class="about-view packages-btn offfer-btn">
                                            make tour
                                        </button>
                                    </div>
                                    <!--/.about-btn-->
                                    <div class="about-btn">
                                        <button class="about-view packages-btn">
                                            book now
                                        </button>
                                    </div>
                                    <!--/.about-btn-->
                                </div>
                                <!--/.offer-btn-group-->
                            </div>
                            <!--/.single-special-offer-txt-->
                        </div>
                        <!--/.single-special-offer-->
                    </div>
                    <!--/.col-->
                    <div class="col-sm-4">
                        <div class="single-special-offer">
                            <div class="single-special-offer-bg">
                                <img src="../assets/images/offer/offer-shape.png" alt="offer-shape">
                            </div>
                            <!--/.single-special-offer-bg-->
                            <div class="single-special-shape-txt">
                                <h3>special offer</h3>
                                <h4><span>40%</span><br>off</h4>
                                <p><span>$999</span><br>reguler $ 1450</p>
                            </div>
                            <!--/.single-special-shape-txt-->
                        </div>
                        <!--/.single-special-offer-->
                    </div>
                    <!--/.col-->
                </div>
                <!--/.row-->
            </div>
            <!--/.special-offer-content-->
        </div>
        <!--/.container-->

    </section>
    <!--/.special-offer end-->
    <!--special-offer end-->

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
                                        <a href="../views/blog.php">Read More</a>
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
                        <button class="appsLand-btn subscribe-btn"><a href="../login/login.php"
                                style="color: white;">login</a></button>
                        <div class="clearfix"></div>
                    </div>

                </div>
            </div>

        </div>

    </section>
    <!--subscribe end-->

    <?php
//    include_once "tourism/html-head.php";
include './htmlfoot2.php';

?>