<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Rasm - Nail Salon & Spa Beauty Care - Home Two</title>
    <meta name="author" content="Angfuzsoft">
    <meta name="description" content="Rasm - Nail Salon & Spa Beauty Care">
    <meta name="keywords" content="Rasm - Nail Salon & Spa Beauty Care">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <!-- odometer -->
    <link rel="stylesheet" href="assets/css/odometer-theme-default.css">
    <!-- flipster -->
    <link rel="stylesheet" href="assets/css/jquery.flipster.min.css">
    <!-- datetimepicker -->
    <link rel="stylesheet" href="assets/css/jquery.datetimepicker.min.css">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>


    <!--[if lte IE 9]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->



    <!--********************************
   		Code Start From Here 
	******************************** -->

<!--==============================
     Preloader
==============================-->
<div class="preloader ">
    <button class="th-btn style3 preloaderCls">Cancel Preloader </button>
    <div class="preloader-inner">
        <img src="assets/img/logo.svg" alt="Rasm">
        <span class="loader"></span>
    </div>
</div>

@include('partials.header')

@include('partials.home.about')

@include('partials.home.services')
    
@include('partials.home.choose')
    
@include('partials.home.prices')

@include('partials.home.appointment')
    
<!--==============================
Product Area
==============================-->
    <section class="overflow-hidden space" id="shop-sec">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title style2">Our Products</span>
                <img src="assets/img/theme-img/title_shape_1.svg" alt="">
                <h2 class="sec-title">Our Latest Nail Products</h2>
            </div>
            <div class="row th-carousel" id="productCarousel" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1" data-arrows="true">

                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="th-product product-grid">
                        <div class="product-img">
                            <img src="assets/img/product/product_1_1.jpg" alt="Product Image">
                            <div class="product-action style1">
                                <a href="cart.html"><span class="action-text">Add To cart</span><span class="icon"><i class="fa-regular fa-cart-shopping"></i></span></a>
                                <a href="wishlist.html"><span class="action-text">wishlist</span><span class="icon"><i class="fal fa-heart"></i></span></a>

                                <a class="popup-content" href="#QuickView"><span class="action-text">Compare</span><span class="icon"><i class="fa-regular fa-eye"></i></span></a>
                            </div>
                        </div>
                        <div class="product-grid_wrapper">
                            <div class="product-content">
                                <h3 class="box-title"><a class="text-inherit" href="shop-details.html">OPI Nail Polish</a>
                                </h3>
                                <div class="product-category"><a href="shop.html">Popular</a></div>
                            </div>
                            <div class="product-grid_content">
                                <span class="price">$99</span>
                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                    <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span>
                                        customer rating</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="th-product product-grid">
                        <div class="product-img">
                            <img src="assets/img/product/product_1_2.jpg" alt="Product Image">
                            <div class="product-action style1">
                                <a href="cart.html"><span class="action-text">Add To cart</span><span class="icon"><i class="fa-regular fa-cart-shopping"></i></span></a>
                                <a href="wishlist.html"><span class="action-text">wishlist</span><span class="icon"><i class="fal fa-heart"></i></span></a>

                                <a class="popup-content" href="#QuickView"><span class="action-text">Compare</span><span class="icon"><i class="fa-regular fa-eye"></i></span></a>
                            </div>
                        </div>
                        <div class="product-grid_wrapper">
                            <div class="product-content">
                                <h3 class="box-title"><a class="text-inherit" href="shop-details.html">Sunscreen Lotion</a>
                                </h3>
                                <div class="product-category"><a href="shop.html">Brand</a></div>
                            </div>
                            <div class="product-grid_content">
                                <span class="price">$98</span>
                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                    <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span>
                                        customer rating</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="th-product product-grid">
                        <div class="product-img">
                            <img src="assets/img/product/product_1_3.jpg" alt="Product Image">
                            <div class="product-action style1">
                                <a href="cart.html"><span class="action-text">Add To cart</span><span class="icon"><i class="fa-regular fa-cart-shopping"></i></span></a>
                                <a href="wishlist.html"><span class="action-text">wishlist</span><span class="icon"><i class="fal fa-heart"></i></span></a>

                                <a class="popup-content" href="#QuickView"><span class="action-text">Compare</span><span class="icon"><i class="fa-regular fa-eye"></i></span></a>
                            </div>
                        </div>
                        <div class="product-grid_wrapper">
                            <div class="product-content">
                                <h3 class="box-title"><a class="text-inherit" href="shop-details.html">Wholesale Liquid</a>
                                </h3>
                                <div class="product-category"><a href="shop.html">Classic</a></div>
                            </div>
                            <div class="product-grid_content">
                                <span class="price">$96</span>
                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                    <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span>
                                        customer rating</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="th-product product-grid">
                        <div class="product-img">
                            <img src="assets/img/product/product_1_4.jpg" alt="Product Image">
                            <div class="product-action style1">
                                <a href="cart.html"><span class="action-text">Add To cart</span><span class="icon"><i class="fa-regular fa-cart-shopping"></i></span></a>
                                <a href="wishlist.html"><span class="action-text">wishlist</span><span class="icon"><i class="fal fa-heart"></i></span></a>

                                <a class="popup-content" href="#QuickView"><span class="action-text">Compare</span><span class="icon"><i class="fa-regular fa-eye"></i></span></a>
                            </div>
                        </div>
                        <div class="product-grid_wrapper">
                            <div class="product-content">
                                <h3 class="box-title"><a class="text-inherit" href="shop-details.html">Hair Dryers</a>
                                </h3>
                                <div class="product-category"><a href="shop.html">Cosmetic</a></div>
                            </div>
                            <div class="product-grid_content">
                                <span class="price">$85<del>$98</del></span>
                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                    <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span>
                                        customer rating</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="shape-mockup jump d-none d-xl-block" data-top="0%" data-left="0%"><img src="assets/img/shape/leaves_3.png" alt="shape"></div>
        <div class="shape-mockup jump d-none d-xl-block" data-top="5%" data-right="0%"><img src="assets/img/shape/flower_1_6.png" alt="shape"></div>
    </section>

<!--==============================
Brand Area  
==============================-->
    <div class="brand-sec1 " data-pos-for=".newsletter-sec" data-sec-pos="bottom-half">
        <div class="container th-container">
            <div class="brand-content bg-smoke">
                <div class="row th-carousel" id="brandSlide1" data-slide-show="6" data-lg-slide-show="4" data-md-slide-show="3" data-sm-slide-show="3" data-xs-slide-show="1">
                    <div class="col-auto">
                        <div class="brand-box wow fadeInLeft">
                            <a href="">
                                <img class="original" src="assets/img/brand/brand_1_1.png" alt="Brand Logo">
                                <img class="gray" src="assets/img/brand/brand_1_1.png" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="brand-box wow fadeInLeft">
                            <a href="">
                                <img class="original" src="assets/img/brand/brand_1_2.png" alt="Brand Logo">
                                <img class="gray" src="assets/img/brand/brand_1_2.png" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="brand-box wow fadeInLeft">
                            <a href="">
                                <img class="original" src="assets/img/brand/brand_1_3.png" alt="Brand Logo">
                                <img class="gray" src="assets/img/brand/brand_1_3.png" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="brand-box wow fadeInLeft">
                            <a href="">
                                <img class="original" src="assets/img/brand/brand_1_4.png" alt="Brand Logo">
                                <img class="gray" src="assets/img/brand/brand_1_4.png" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="brand-box wow fadeInLeft">
                            <a href="">
                                <img class="original" src="assets/img/brand/brand_1_5.png" alt="Brand Logo">
                                <img class="gray" src="assets/img/brand/brand_1_5.png" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="brand-box wow fadeInLeft">
                            <a href="">
                                <img class="original" src="assets/img/brand/brand_1_6.png" alt="Brand Logo">
                                <img class="gray" src="assets/img/brand/brand_1_6.png" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="brand-box wow fadeInLeft">
                            <a href="">
                                <img class="original" src="assets/img/brand/brand_1_7.png" alt="Brand Logo">
                                <img class="gray" src="assets/img/brand/brand_1_7.png" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="brand-box wow fadeInLeft">
                            <a href="">
                                <img class="original" src="assets/img/brand/brand_1_8.png" alt="Brand Logo">
                                <img class="gray" src="assets/img/brand/brand_1_8.png" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="newsletter-sec space" data-bg-src="assets/img/bg/newsletter_bg_1.jpg">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-12">
                    <div class="newsletter-wrapper  wow fadeInUp">
                        <div class="newsletter-content">
                            <div class="title-area text-center mb-30">
                                <span class="sub-title style2 text-white">Subscribes Newsletter</span>
                                <img src="assets/img/theme-img/title_shape_2.svg" alt="">
                                <h2 class="sec-title text-white">Sign Up To Get Updates & News About Us</h2>
                            </div>
                            <form class="newsletter-form">
                                <input class="form-control " type="email" placeholder="Email Address" required="">
                                <div class="icon"> <i class="fa-regular fa-envelope"></i></div>
                                <button type="submit" class="th-btn style4">Subscribe Now<i class="fa-solid fa-right-long ms-2"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@include('partials.home.testimonial')
    
@include('partials.home.gallery')
    
@include('partials.home.blog')
    
@include('partials.home.gallery')
    
@include('partials.footer')

    <!--********************************
			Code End  Here 
	******************************** -->


    <!--==============================
    All Js File
============================== -->
    <!-- Jquery -->
    <script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
    <!-- Slick Slider -->
    <script src="assets/js/slick.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Magnific Popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Range Slider -->
    <script src="assets/js/jquery-ui.min.js"></script>
    <!-- imagesloaded  -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- Isotope Filter -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- flipster Filter -->
    <script src="assets/js/jquery.flipster.min.js"></script>
    <!-- odometer -->
    <script src="assets/js/odometer.js"></script>
    <!-- appear -->
    <script src="assets/js/appear-2.js"></script>
    <!-- Nice Select -->
    <script src="assets/js/nice-select.min.js"></script>
    <!-- datetimepicker -->
    <script src="assets/js/jquery.datetimepicker.min.js"></script>

    <!-- tilt -->
    <script src="assets/js/tilt.min.js"></script>
    <!-- wow -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Main Js File -->
    <script src="assets/js/main.js"></script>

</body>

</html>