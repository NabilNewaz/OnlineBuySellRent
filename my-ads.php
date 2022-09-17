<?php
error_reporting(0);
//start user session
session_start();
if (!(isset($_SESSION['username']))) {
    header("location: login.php?referer=my-ads");
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile - Rent2SellBD</title>
    <link rel="shortcut icon" type="image/x-icon" href="passets/img/favicon.png">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="tassets/dependencies/bootstrap/css/bootstrap.min.css">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="tassets/dependencies/fontawesome/css/all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="tassets/dependencies/flaticon/flaticon.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="tassets/dependencies/owl.carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="tassets/dependencies/owl.carousel/css/owl.theme.default.min.css">
    <!-- Animated Headlines CSS -->
    <link rel="stylesheet" href="tassets/dependencies/jquery-animated-headlines/css/jquery.animatedheadline.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="tassets/dependencies/magnific-popup/css/magnific-popup.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="tassets/dependencies/animate.css/css/animate.min.css">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="tassets/dependencies/meanmenu/css/meanmenu.min.css">
    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="tassets/css/app.css">

    <!-- my Stylesheet -->

    <link rel="stylesheet" href="assets/main/app.css">
    <link rel="stylesheet" href="assets/main/common.css">

    <!-- Google Web Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:300,300i,400,400i,600,600i,700,700i,800,800i&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap"
        rel="stylesheet">

</head>

<body class="sticky-header bg-accent" id="app">
    <!-- ScrollUp Start Here -->
    <a href="#wrapper" data-type="section-switch" class="scrollup">
        <i class="fas fa-angle-double-up"></i>
    </a>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper">
        <?php
include "include/header.php";
?>
        <main class="">
            <section class="py-3 bg-accent">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 sidebar-break-sm sidebar-widget-area mt-0" id="sticky-sidebar">
                            <div
                                class="widget-bottom-margin widget-account-menu widget-light-bg sticky-top sticky-top-5">
                                <h3 class="widget-border-title">Menu</h3>
                                <ul class="nav nav-tabs flex-column" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link" href="user-profile.php">Dashboard</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="user-account-detail.php">Account details</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="my-store.php">Create Store</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="my-ads.php">My ads</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="favourite-ads.php">Favourites</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="my-coupon.php">My coupon code</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="my-order.php">My
                                            order</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="change-password.php">Change Password</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="logout.php">
                                            Logout
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="tab-content">


                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="product-filter-heading">
                                                <div class="row align-items-center">

                                                    <div class="col-md-6">
                                                        <h2 class="item-title">
                                                            Showing
                                                            <span class="font-medium"></span>
                                                            to
                                                            <span class="font-medium"></span>
                                                            of
                                                            <span class="font-medium">0</span>
                                                            results
                                                        </h2>
                                                    </div>

                                                    <div
                                                        class="col-md-6 d-flex justify-content-md-end justify-content-center">
                                                        <div class="product-sorting">
                                                            <div class="ordering-controller">
                                                                <button class="ordering-btn dropdown-toggle"
                                                                    type="button" data-toggle="dropdown"
                                                                    aria-expanded="false">
                                                                    Sort By
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item"
                                                                        href="https://www.prothomei.com/user/profile/my-ads?title=asc">A
                                                                        to Z (title)</a>
                                                                    <a class="dropdown-item"
                                                                        href="https://www.prothomei.com/user/profile/my-ads?title=desc">Z
                                                                        to A (title)</a>
                                                                    <a class="dropdown-item"
                                                                        href="https://www.prothomei.com/user/profile/my-ads?date=asc">Data
                                                                        Added (oldest)</a>
                                                                    <a class="dropdown-item"
                                                                        href="https://www.prothomei.com/user/profile/my-ads?date=desc">Data
                                                                        Added (newest)</a>
                                                                    <a class="dropdown-item"
                                                                        href="https://www.prothomei.com/user/profile/my-ads?view=desc">Most
                                                                        Viewed</a>
                                                                    <a class="dropdown-item"
                                                                        href="https://www.prothomei.com/user/profile/my-ads?view=asc">Less
                                                                        Viewed</a>
                                                                    <a class="dropdown-item"
                                                                        href="https://www.prothomei.com/user/profile/my-ads?price=asc">Price
                                                                        (low to high)</a>
                                                                    <a class="dropdown-item"
                                                                        href="https://www.prothomei.com/user/profile/my-ads?price=desc">Price
                                                                        (high to low)</a>
                                                                </div>
                                                            </div>
                                                            <div class="layout-switcher">
                                                                <ul>
                                                                    <li>
                                                                        <a href="#" data-type="product-box-list"
                                                                            class="product-view-trigger">
                                                                            <i class="fas fa-th-list"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li class="active">
                                                                        <a class="product-view-trigger" href="#"
                                                                            data-type="product-box-grid">
                                                                            <i class="fas fa-th-large"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="" id="result-empty"
                                                data-bg-image="tassets/images/result_empty.png"
                                                style="background-image: url('tassets/images/result_empty.png');"></div>
                                            <h3 class="text-center text-secondary bg-light py-3">Empty</h3>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <?php
    include("include/footer.php");
?>



    <!-- Jquery Js -->
    <script src="tassets/dependencies/jquery/js/jquery.min.js"></script>
    <!-- Popper Js -->
    <script src="tassets/dependencies/popper.js/js/popper.min.js"></script>
    <!-- Bootstrap Js -->
    <script src="tassets/dependencies/bootstrap/js/bootstrap.min.js"></script>
    <!-- Waypoints Js -->
    <script src="tassets/dependencies/waypoints/js/jquery.waypoints.min.js"></script>
    <!-- Counterup Js -->
    <script src="tassets/dependencies/jquery.counterup/js/jquery.counterup.min.js"></script>
    <!-- Owl Carousel Js -->
    <script src="tassets/dependencies/owl.carousel/js/owl.carousel.min.js"></script>
    <!-- ImagesLoaded Js -->
    <script src="tassets/dependencies/imagesloaded/js/imagesloaded.pkgd.min.js"></script>
    <!-- Isotope Js -->
    <script src="tassets/dependencies/isotope-layout/js/isotope.pkgd.min.js"></script>
    <!-- Animated Headline Js -->
    <script src="tassets/dependencies/jquery-animated-headlines/js/jquery.animatedheadline.min.js"></script>
    <!-- Magnific Popup Js -->
    <script src="tassets/dependencies/magnific-popup/js/jquery.magnific-popup.min.js"></script>
    <!-- ElevateZoom Js -->
    <script src="tassets/dependencies/elevatezoom/js/jquery.elevateZoom-2.2.3.min.js"></script>
    <!-- Bootstrap Validate Js -->
    <script src="tassets/dependencies/bootstrap-validator/js/validator.min.js"></script>
    <!-- Meanmenu Js -->
    <script src="tassets/dependencies/meanmenu/js/jquery.meanmenu.min.js"></script>
    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtmXSwv4YmAKtcZyyad9W7D4AC08z0Rb4"></script>
    <!-- Site Scripts -->
    <script src="tassets/js/app.js"></script>
    <script src="js/sweetalert.all.js"></script>

    <?php
    if (session_status() == PHP_SESSION_ACTIVE) {
        if ((isset($_SESSION['status']))) {
            echo '<script>
                Swal.fire({"title":"Login Successful","text":"","timer":5000,"width":true,"padding":"1.1rem","showConfirmButton":false,"showCloseButton":true,"customClass":{"container":null,"popup":null,"header":null,"title":null,"closeButton":null,"icon":null,"image":null,"content":null,"input":null,"actions":null,"confirmButton":null,"cancelButton":null,"footer":null},"toast":true,"icon":"success","position":"top-end"});
            </script>';
            $_SESSION['status']=null;
        }
    }
?>

    <script>
        function readURL(input) {
            for (var i = 0; i < input.files.length && i < 5; i++)
                if (input.files && input.files[i]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        var elm = '<img class="m-2 shadow-sm border hover" src="' + e.target.result +
                            '" alt="your image" style="height:100px" />';
                        $(elm).appendTo($('#imgLivePreview'));
                    }
                    reader.readAsDataURL(input.files[i]);
                }
        }
        $("#mulImgInput").change(function() {
            readURL(this);
        });
    </script>


    <script>
        if ($.fn.meanmenu) {
            $('nav#dropdown').meanmenu({
                siteLogo: `<div class='mobile-menu-nav-back d-flex justify-content-between'>
                        <div class=''>
                            <a class='logo-mobile' href='index.html'><img src='images/Rent2SellBDmobile.png' style="max-width:100%; hight:auto;  padding-bottom: 6px;" alt='logo' class='img-fluid'/></a>
                        </div>
                        <div class='mr-5 d-flex'>
                            <a href='/ad/all-ad'' class="btn btn-sm btn-light font-weight-bold">Ads</a>

                            <div class="dropdown">
                                <a href="javascript:void(0)" style='color:#2a2a2a' class='dropdown-toggle text-black mx-1' id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-user"></i></a>
                                <div class="dropdown-menu mt-3" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="/login">Login</a>
                                    <a class="dropdown-item" href="/register">Register</a>
                                </div>
                            </div>

                            <a href="" class="btn px-1 position-relative" data-toggle="tooltip" data-placement="top" title="Message">
                                <i class="far fa-comment-alt"></i>
                            </a>

                            <a href="" class="btn px-1 position-relative" data-toggle="tooltip" data-placement="top" title="Cart">
                                <i class="fa fa-shopping-cart"></i>
                            </a>
                        </div>
                    </div>`
            });
        }
    </script>



    <script>
        $('#imageModal').on('show.bs.modal', function(event) {
            var imgSrc = $('.modal_image_able_panel .active .modal_able_image').attr('src');
            $('.modal_able_image_src').attr('src', imgSrc);
        })
    </script>
</body>

</html>