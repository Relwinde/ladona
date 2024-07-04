<!doctype html>
<html class="no-js" lang="zxx" style="--theme-color: #a032a3;">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Acceuil</title>
    <meta name="author" content="Relwindé">
    <meta name="description" content="Experte de la cosmétique, de la perte de poids et de la prise de forme. La qualité GARANTIE !">
    <meta name="keywords" content="dona - cosmétique - spa">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/icon.jpg">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/icon.jpg">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/icon.jpg">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/icon.jpg">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/icon.jpg">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/icon.jpg">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/icon.jpg">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/icon.jpg">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/icon.jpg">
    <link rel="icon" type="image/jpg" sizes="192x192" href="assets/img/icon.jpg">
    <link rel="icon" type="image/jpg" sizes="32x32" href="assets/img/icon.jpg">
    <link rel="icon" type="image/jpg" sizes="96x96" href="assets/img/icon.jpg">
    <link rel="icon" type="image/jpg" sizes="16x16" href="assets/img/icon.jpg">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/icon.jpg">
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
    {{-- <button class="th-btn style3 preloaderCls">Cancel Preloader </button> --}}
    <div class="preloader-inner">
        <img src="assets/img/logo-rect-white.png" alt="Rasm">
        <span class="loader"></span>
    </div>
</div>
@include('partials.header')

    {{ $slot }}

@include('partials.footer')

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