<?php
error_reporting(0);
//start user session
session_start();
if (!(isset($_SESSION['username']))) {
    header("location: login.php?referer=my-store");
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
                                        <a class="nav-link active" href="my-store.php">Create Store</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="my-ads.php">My ads</a>
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

                                <div class="" id="store">
                                    <div class="light-shadow-bg post-ad-box-layout1 myaccount-store-settings">
                                        <div class="light-box-content">
                                            <form action="/user/profile/store/update" method="POST"
                                                enctype="multipart/form-data">
                                                <input type="hidden" name="_token"
                                                    value="VIQvDKnj7ZyiIHY7DnPTwvKN0f8HDYiWZ0eL1hUw"> <input
                                                    type="hidden" name="_method" value="PUT">
                                                <div class="post-section store-banner">
                                                    <div class="post-ad-title">
                                                        <i class="far fa-image"></i>
                                                        <h3 class="item-title">Store Images</h3>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <label class="control-label">
                                                                Store Banner
                                                            </label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <div class="form-group">
                                                                <div class="store-banner-wrapper">
                                                                    <div class="banenr-img">
                                                                        <img src="tassets/images/default_store_banner.jpg"
                                                                            alt="Store Banner">
                                                                    </div>
                                                                    <input type="file" name="banner" id="banner"
                                                                        class=" form-control-sm d-flex" required>
                                                                    <div class="alert alert-danger"> Recommended banner
                                                                        size to (1180x300)px </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <label class="control-label">
                                                                Store Logo
                                                            </label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <div class="form-group">
                                                                <div class="store-banner-wrapper">
                                                                    <div class="banenr-img">
                                                                        <img src="/images/default_store_logo.png"
                                                                            alt="Store Banner" width="100">
                                                                    </div>
                                                                    <input type="file" name="logo" id="logo"
                                                                        class="form-control-sm d-flex" required>
                                                                    <div class="alert alert-danger">Recommended logo
                                                                        size to (180x140)px </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="post-section store-schedule">
                                                    <div class="post-ad-title">
                                                        <i class="far fa-calendar"></i>
                                                        <h3 class="item-title">Store Schedule</h3>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <label class="control-label">
                                                                Opening Hours
                                                            </label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <div class="form-group">
                                                                <div class="form-check form-radio-btn">
                                                                    <input class="form-check-input" type="radio"
                                                                        id="always_open" name="always_open"
                                                                        value="always-open"
                                                                        onclick="document.getElementById('custome-schedule-time').style.display = 'none'">
                                                                    <label class="form-check-label" for="always_open">
                                                                        Always open
                                                                    </label>
                                                                </div>
                                                                <div class="form-check form-radio-btn">
                                                                    <input class="form-check-input" type="radio"
                                                                        id="custome_schedule" name="always_open"
                                                                        value="custome-schedule"
                                                                        onclick="document.getElementById('custome-schedule-time').style.display = 'block'">
                                                                    <label class="form-check-label"
                                                                        for="custome_schedule">
                                                                        Custom schedule
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div id="custome-schedule-time" class="form-group"
                                                                style="display: none">
                                                                <div class="row justify-content-center">
                                                                    <input type="time" class="form-control col-5"
                                                                        name="opening_hour_start"
                                                                        id="opening_hour_start" value="09:30">
                                                                    <div class="col-1">To</div>
                                                                    <input type="time" class="form-control col-5"
                                                                        name="opening_hour_end" id="opening_hour_end"
                                                                        value="21:00">
                                                                </div>
                                                            </div>
                                                            <script>
                                                                if (document.getElementById('custome_schedule')
                                                                    .checked) {
                                                                    document.getElementById('custome-schedule-time')
                                                                        .style.display = 'block'
                                                                }
                                                            </script>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="post-section store-information">
                                                    <div class="post-ad-title">
                                                        <i class="fas fa-folder-open"></i>
                                                        <h3 class="item-title">Store Information</h3>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <label for="name" class="control-label">Store Name
                                                                <span>*</span> </label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control " name="name"
                                                                    id="name" required value="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <label for="slogan" class="control-label">Slogan </label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control " name="slogan"
                                                                    id="slogan" value="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <label for="country" class="control-label">Country
                                                                <span>*</span> </label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <div class="form-group">
                                                                <select class="form-control select-box " name="country"
                                                                    id="country" required>
                                                                    <option disabled>Select Country</option>
                                                                    <option value="Bangladesh">Bangladesh</option>
                                                                    <option value="India">India</option>
                                                                    <option value="Nepal">Nepal</option>
                                                                    <option value="US">US</option>
                                                                    <option value="China">China</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <label for=location class="control-label">Location
                                                                <span>*</span> </label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <div class="form-group">
                                                                <textarea name=location id=location
                                                                    class="form-control textarea " cols="30" rows="5"
                                                                    required></textarea>




                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <label for="website" class="control-label">Website </label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <div class="form-group">
                                                                <input type="url" class="form-control " name="website"
                                                                    id="website" value="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <label for="mobile" class="control-label">Mobile
                                                                <span>*</span> </label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <div class="form-group">
                                                                <input type="tel" class="form-control " name="mobile"
                                                                    id="mobile" required value="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <label for="email" class="control-label">Email
                                                                <span>*</span> </label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <div class="form-group">
                                                                <input type="email" class="form-control " name="email"
                                                                    id="email" required value="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <label for=description class="control-label">Description
                                                                <span>*</span> </label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <div class="form-group">
                                                                <textarea name=description id=description
                                                                    class="form-control textarea " cols="30" rows="5"
                                                                    required></textarea>




                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <label class="control-label">
                                                                Socials
                                                            </label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <div class="form-group store-social">
                                                                <input type="url" class="form-control " name="facebook"
                                                                    id="facebook" placeholder="Facebook" value="">

                                                                <input type="url" class="form-control " name="twitter"
                                                                    id="twitter" placeholder="Twitter" value="">

                                                                <input type="url" class="form-control " name="linkedin"
                                                                    id="linkedin" placeholder="Linkedin" value="">

                                                                <input type="url" class="form-control " name="youtube"
                                                                    id="youtube" placeholder="Youtube" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="post-section post-contact">
                                                        <div class=text-center>
                                                            <div class="form-group">
                                                                <input type="submit" class="submit-btn"
                                                                    value="Create Store">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

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