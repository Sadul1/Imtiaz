<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Imtiaz Designers</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/caef0b341f.js" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="https://devitems.com/html/raptas-preview/raptas/img/favicon.png" />
    <!-- Place favicon.ico in the root directory -->
    <!-- all css here -->
    <!-- Bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Animate css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- jQuery-ui.min css -->
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <!-- Owl carousel css -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- Font-awesome css -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Material design iconic css -->
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <!-- Nivo Slider css -->
    <link rel="stylesheet" href="css/nivo-slider.css" />
    <!--Slider css -->
    <link rel="stylesheet" href="css/slider.css" />
    <!-- Default css -->
    <link rel="stylesheet" href="css/default.css">
    <!-- Mean menu css -->
    <link rel="stylesheet" href="css/meanmenu.css">
    <!-- Main style css -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr css -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <div class="hp3-full-wrapper">
        <div class="header-area home3-header-area">
            <!-- <div class="header-topbar-area-top topbar-area-top2 topbar3">
                <div class="container">
                    <div class="row">
                    </div>
                </div>
            </div> -->

            <!--header main menu start-->

            <div id="sticky-header" class="main-menu-wrapper sticky-style2 hp3-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div class="header-logo home2-header-logo header-logo-def">
                                <a href="index.html"><img src="images/logo_1.png" alt="domino" />
                                </a>
                            </div>
                        </div>
                        <!-- NavBar -->
                        @include('include.navbar')
                        
                        <!-- Mobile Nav -->
                        @include('include.navMob')
                    </div>
                </div>
            </div>
            <!--header main menu end-->
        </div>

        <!--slider area are start-->
        <div class="slider-container slider2-container hp3-slider">
            <!-- Slider Image -->
            <div id="home3-slider" class="nivoSlider slider-image">
                <img src="images/slider/slider5.jpg" alt="main slider" title="#htmlcaption5" />
                <img src="images/slider/slider6.jpg" alt="main slider" title="#htmlcaption6" />
                <img src="images/slider/slider7.jpg" alt="main slider" title="#htmlcaption7" />
            </div>

            <!-- Slider2 Caption 2 -->
            <div id="htmlcaption5" class="nivo-html-caption">
                <div class="slider-progress"></div>
                <div class="container">
                    <div class="slider4-cap-wrapper4 cap-wrapper">
                        <div class="captext-pos1">
                            <div class="slider3-btext wow fadeInDown" data-wow-duration=".9s" data-wow-delay="0.8s">
                                <h2>Domino trend.</h2>
                            </div>
                            <div class="slider3-stext wow fadeInDown" data-wow-duration=".9s" data-wow-delay="0.8s">
                                <h4>lookbook ecomerce theme</h4>
                            </div>
                            <div class="slider3-btn1 wow fadeInDown" data-wow-duration=".9s" data-wow-delay="0.8s">
                                <a class="btn-trans" href="shop.html">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider2 Caption 1 -->
            <div id="htmlcaption7" class="nivo-html-caption">
                <div class="slider-progress"></div>
                <div class="container">
                    <div class="slider2-cap-wrapper2 cap-wrapper">
                        <div class="captext-pos2 slider-capstyle3">
                            <div class="slider3-toptext wow fadeInRight" data-wow-duration=".5s" data-wow-delay="0.8s">
                                <h4>Fashion lookbook 2016</h4>
                            </div>
                            <div class="slider3-btext2 wow fadeInRight" data-wow-duration=".9s" data-wow-delay="0.8s">
                                <h2>Imtiaz Designers</h2>
                            </div>
                            <div class="slider3-btext2 wow fadeInRight" data-wow-duration=".5s" data-wow-delay="0.8s">
                                <h2> Trend 2020.</h2>
                            </div>
                            <div class="slider3-btn slider3-btn2 wow fadeInRight" data-wow-duration=".9s" data-wow-delay="0.8s">
                                <a class="btn-nontrans" href="shop.html">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider3 Caption 1 -->
            <div id="htmlcaption6" class="nivo-html-caption">
                <div class="slider-progress"></div>
                <div class="container">
                    <div class="slider2-cap-wrapper2 cap-wrapper">
                        <div class="captext-pos2 slider-capstyle3">
                            <div class="slider3-toptext wow fadeInRight" data-wow-duration=".5s" data-wow-delay="0.8s">
                                <h4>Fashion lookbook 2016</h4>
                            </div>
                            <div class="slider3-btext2 wow fadeInRight" data-wow-duration=".9s" data-wow-delay="0.8s">
                                <h2>Hipster Fashion</h2>
                            </div>
                            <div class="slider3-btext2 wow fadeInRight" data-wow-duration=".5s" data-wow-delay="0.8s">
                                <h2> Trend 2016.</h2>
                            </div>
                            <div class="slider3-btn slider3-btn2 wow fadeInRight" data-wow-duration=".9s" data-wow-delay="0.8s">
                                <a class="btn-nontrans" href="shop.html">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--slider area are end-->

        <!--Banner3 top area start-->
        <div class="banner3-top hp3-banner-area hp3ba">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="banner-content">
                            <!-- <div class="banner-sstitle">
                                <h5>See more about us!</h5>
                            </div> -->
                            <div class="banner-stitle">
                                <h3>Welcome To</h3>
                            </div>
                            <div class="banner-btitle">
                                <h2><span class="text-color">Imtiaz</span> Designers</h2>
                            </div>
                            <div class="banner-text btext">
                                <p>When it comes to a wedding, grooms are usually left in the dark. But the look of the groom on the wedding day is just as important as the way the bride looks . Many will look at you on that day and you'll be photographed hundreds of times and the wedding photos are something you'll be proud of for the rest of your life. Hence good wedding day grooming is essential for any man. When thinking about men's wedding dresses Imtiaz Designers are always on top with decades of experience. </p>
                            </div>
                            <div class="banner-button">
                                <a class="banner-bbtn" href="index.html">Continue Reading</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="banner-image text-right">
                            <img src="images/banner/hosni.jpg" alt="Hosni Imtiaz" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Banner3 top area end-->

        <!--Product banner area start-->

        <div class="product-banner-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="product-banner-left">
                            <div class="pbanner-image hvreff-defm20 posr">
                                <img src="images/discount/cms7.jpg" alt="" />
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="product-banner-right">
                            <div class="img-banner">
                                <div class="pbanner-image hvreff-defm10 posr">
                                    <img src="images/discount/cms8.jpg" alt="" />
                                </div>
                            </div>
                            <div class="img-banner">
                                <div class="pbanner-image hvreff-defm10 posr">
                                    <img src="images/discount/cms9.jpg" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Product banner area end-->

        <!--Banner3 top area start-->
        <div class="banner3-middle">
            <div class="banner-full-wrapper hp3-bannerbag-md">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-4 col-xs-12">
                            <div class="banner-content">
                                <div class="banner-sstitle">
                                    <h5>Supper deal only today!</h5>
                                </div>
                                <div class="banner-stitle">
                                    <h3>Mega sale off</h3>
                                </div>
                                <div class="banner-btitle">
                                    <h2>Up to <span class="text-color">70%</span></h2>
                                </div>
                                <div class="banner-text btext">
                                    <p>Lorem ipsum dolor sit amet, consec tetuer adipis elit, aliquam eget nibh etlibura. Aenean commodo ligula eget dolor Aenean massa. Portals seize data-driven, tag expedite.</p>
                                </div>
                                <div class="banner-button">
                                    <a class="btn-back2" href="shop.html">Shopping Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-8 col-xs-12">
                            <div class="banner-image text-right">
                                <img src="images/banner/h3b5.png" alt="Domino" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Banner3 top area end-->
        <!--Brand slider area css start-->

        <div class="brand-area hp3-brand-area">
            <div class="container">
                <div class="row">
                    <div class="brand-slider-wrapper">
                        <div class="active-brand-owl def-owl">
                            <div class="col-md-2">
                                <div class="brand-image">
                                    <img src="images/brand/mb1.jpg" alt="Domino" />
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="brand-image">
                                    <img src="images/brand/mb2.jpg" alt="Domino" />
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="brand-image">
                                    <img src="images/brand/mb3.jpg" alt="Domino" />
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="brand-image">
                                    <img src="images/brand/mb4.jpg" alt="Domino" />
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="brand-image">
                                    <img src="images/brand/mb5.jpg" alt="Domino" />
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="brand-image">
                                    <img src="images/brand/mb6.jpg" alt="Domino" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Brand slider area css end-->

        <!-- Google map area start-->

        <div class="hp3-map-area map-area">
            <div id="googleMap2999"></div>
        </div>

        <!-- Google map area end-->

        <!-- Main footer area start-->

        <div class="main-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="footer-content-wrapper">
                            <div class="footer-content">
                                <div id="f-about" class="footer-title def-funderline ftitle-about posr">
                                    <h5 class="active-about">About us</h5>
                                </div>
                                <div class="footer-text">
                                    <p>Lorem ipsum dolor sit amet, consec tetuer adipis elit, aliquam eget nibh etlibura. Aenean commodo ligula eget dolor Aenean massa. Portals seize data-driven, tag expedite</p>
                                    <div class="footer-readmore"><a href="about.html">Read more</a>
                                    </div>
                                </div>

                                <ul class="footer-social-icon">
                                    <li><a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                    </li>
                                    <li><a href="#"><i class="zmdi zmdi-twitter"></i></a>
                                    </li>
                                    <li><a href="#"><i class="zmdi zmdi-rss"></i></a>
                                    </li>
                                    <li><a href="#"><i class="zmdi zmdi-youtube"></i></a>
                                    </li>
                                    <li><a href="#"><i class="zmdi zmdi-google-plus"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-12">
                        <div class="footer-list-wrapper">
                            <div id="f-info" class="footer-title def-funderline ftitle-info posr">
                                <h5 class="active">Information</h5>
                            </div>
                            <ul class="footer-list-text jscroll-info">
                                <li><a href="shop.html" title="New products">New products</a>
                                </li>
                                <li><a href="single-product.html" title="Best sellers">Best sellers</a>
                                </li>
                                <li><a href="shop.html" title="Our stores">Our stores</a>
                                </li>
                                <li><a href="contact.html" title="Contact us">Contact us</a>
                                </li>
                                <li><a href="index2.html" title="Sitemap">Sitemap</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-12">
                        <div class="footer-list-wrapper">
                            <div id="f-myac" class="footer-title def-funderline ftitle-myA posr">
                                <h5 class="active">My account</h5>
                            </div>
                            <ul class="footer-list-text jscroll-myac">
                                <li><a href="my-account.html" title="My orders">My orders </a>
                                </li>
                                <li><a href="my-account.html" title="My credit slips">My credit slips </a>
                                </li>
                                <li><a href="index2.html" title="My addresses">My addresses</a>
                                </li>
                                <li><a href="shop.html" title="Specials">Specials</a>
                                </li>
                                <li><a href="my-account.html" title="My personal info">My personal info</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-12">
                        <div class="footer-list-wrapper">
                            <div id="f-cussve" class="footer-title def-funderline def-funderline2 ftitle-cus posr">
                                <h5 class="active">Customer Service</h5>
                            </div>
                            <ul class="footer-list-text jscroll-cussrve">
                                <li><a href="contact.html" title="Contact us">Contact us</a>
                                </li>
                                <li><a href="index2.html" title="Discount">Discount</a>
                                </li>
                                <li><a href="index2.html" title="Site map">Site map</a>
                                </li>
                                <li><a href="about.html" title="About us">About us</a>
                                </li>
                                <li><a href="contact.html" title="Custom service">Custom service</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main footer area end-->

        <!--Footer bottom area start-->

        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-6 col-xs-12 footer-bottom-left">
                        <div class="footer-bottom-text">
                            <p>Copyright <i class="fa fa-copyright"></i> <a href="https://hastech.company/" target="_blank">Hastech.</a> All Rights Reserved</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 footer-bottom-right">
                        <div class="footer-bottom-image">
                            <a href="#"><img src="images/payment/p.png" alt="domino" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="to-top posr">
            <a href="#"><i class="zmdi zmdi-arrow-merge"></i></a>
        </div>
    </div>
    <!--Footer bottom area end-->

    <!-- QUICKVIEW PRODUCT -->
    <div id="quickview-wrapper">
        <!-- Modal -->
        <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-product">
                            <div class="product-images">
                                <!--modal tab start-->
                                <div class="portfolio-thumbnil-area-2">
                                    <div class="tab-content active-portfolio-area-2">
                                        <div role="tabpanel" class="tab-pane active" id="view1">
                                            <div class="product-img">
                                                <a href="#"><img src="images/product/p1.jpg" alt="Single portfolio" />
                                                </a>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="view2">
                                            <div class="product-img">
                                                <a href="#"><img src="images/product/p5.jpg" alt="Single portfolio" />
                                                </a>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="view3">
                                            <div class="product-img">
                                                <a href="#"><img src="images/product/p10.jpg" alt="Single portfolio" />
                                                </a>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="view4">
                                            <div class="product-img">
                                                <a href="#"><img src="images/product/p4.jpg" alt="Single portfolio" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-more-views-2">
                                        <div class="thumbnail-carousel-modal-2" data-tabs="tabs">
                                            <a href="#view1" aria-controls="view1" data-toggle="tab"><img src="images/product/p1.jpg" alt="" />
                                            </a>
                                            <a href="#view2" aria-controls="view2" data-toggle="tab"><img src="images/product/p5.jpg" alt="" />
                                            </a>
                                            <a href="#view3" aria-controls="view3" data-toggle="tab"><img src="images/product/p10.jpg" alt="" />
                                            </a>
                                            <a href="#view4" aria-controls="view4" data-toggle="tab"><img src="images/product/p4.jpg" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--modal tab end-->
                            <!-- .product-images -->
                            <div class="product-info">
                                <h1>Aenean eu tristique</h1>
                                <div class="price-box-3">
                                    <div class="s-price-box"> <span class="new-price">$160.00</span> <span class="old-price">$190.00</span> </div>
                                </div> <a href="shop.html" class="see-all">See all features</a>
                                <div class="quick-add-to-cart">
                                    <form method="post" class="cart">
                                        <div class="numbers-row">
                                            <input type="number" id="french-hens" value="3"> </div>
                                        <button class="single_add_to_cart_button cart-stylei" type="submit"><i class="fa fa-shopping-cart"></i> Add to cart</button>
                                    </form>
                                </div>
                                <div class="quick-desc"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero.Nam fringilla tristique auctor. </div>
                                <div class="social-sharing-modal">
                                    <div class="widget widget_socialsharing_widget">
                                        <h3 class="widget-title-modal">Share this product</h3>
                                        <ul class="social-icons-modal">
                                            <li><a target="_blank" title="Facebook" href="#" class="facebook m-single-icon"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li><a target="_blank" title="Twitter" href="#" class="twitter m-single-icon"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li><a target="_blank" title="Pinterest" href="#" class="pinterest m-single-icon"><i class="fa fa-pinterest"></i></a>
                                            </li>
                                            <li><a target="_blank" title="Google +" href="#" class="gplus m-single-icon"><i class="fa fa-google-plus"></i></a>
                                            </li>
                                            <li><a target="_blank" title="LinkedIn" href="#" class="linkedin m-single-icon"><i class="fa fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- .product-info -->
                        </div>
                        <!-- .modal-product -->
                    </div>
                    <!-- .modal-body -->
                </div>
                <!-- .modal-content -->
            </div>
            <!-- .modal-dialog -->
        </div>
        <!-- END Modal -->
    </div>
    <!-- END QUICKVIEW PRODUCT -->

    <!-- all js here -->
    <!-- jquery latest version -->
    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- owl.carousel js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- meanmenu js -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- jquery-ui js -->
    <script src="js/jquery-ui.min.js"></script>
    <!-- wow js -->
    <script src="js/wow.min.js"></script>
    <!-- plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Nivo slider pack js -->
    <script src="js/slider/jquery.nivo.slider.pack.js"></script>
    <!-- nivo active js -->
    <script src="js/slider/nivo-active.js"></script>
    <!-- fancybox js -->
    <script src="js/jquery.fancybox.js"></script>
    <!-- counter up js -->
    <script src="js/jquery.counterup.min.js"></script>
    <!-- Treeview js -->
    <script src="js/jquery.treeview.js"></script>
    <!-- main js -->
    <script src="js/main.js"></script>
</body>

</html>