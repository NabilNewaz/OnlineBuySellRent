<?php
error_reporting(0);
//start user session
session_start();
if (!(isset($_SESSION['username']))) {
    header("location: login.php?referer=user-profile");
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
    <?php
include "include/header.php";
?>

    <script>
        function setDownTimer(id, end_time) {
            // Set the date we're counting down to
            var countDownDate = new Date(end_time).getTime();

            // Update the count down every 1 second
            var x = setInterval(function() {
                var now = new Date().getTime();
                var distance = countDownDate - now;
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                document.getElementById(id).innerHTML = '<span class=" bg-primary rounded p-1">' + days +
                    'D</span>' + '<span class="text-secondary"> : </span>' +
                    '<span class=" bg-primary rounded p-1">' + hours + 'H</span>' +
                    '<span class="text-secondary"> : </span>' +
                    '<span class=" bg-primary rounded p-1">' + minutes + 'm</span>' +
                    '<span class="text-secondary"> : </span>' + '<span class=" bg-primary rounded p-1">' +
                    seconds + 's</span>';

                // If the count down is over, write some text
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById(id).innerHTML =
                        '<span class=" text-danger rounded p-1 font-weight-normal">AUCTION ENDED</span>'
                }
            }, 1000);
        }
    </script>

    <!-- ScrollUp Start Here -->
    <a href="#wrapper" data-type="section-switch" class="scrollup">
        <i class="fas fa-angle-double-up"></i>
    </a>
    <div id="wrapper" class="wrapper">
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
                                        <a class="nav-link active" href="user-profile.php">Dashboard</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="user-account-detail.php">Account details</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="my-store.php">Create Store</a>
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
                                        <a class="nav-link" href="my-order.php">My order</a>
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
                                <div class="" id="dashboard">
                                    <div class="myaccount-dashboard light-shadow-bg">
                                        <div class="light-box-content">
                                            <div class="media-box">
                                                <div class="item-img">
                                                    <div class=" my-avatar my-lg-avatar"
                                                        style='background-image: url("https://www.prothomei.com/images/1644318068BtqHn.jpg");'>
                                                    </div>
                                                </div>
                                                <div class="item-content">
                                                    <h3 class="item-title">
                                                        <?php echo $_SESSION['name'] ?>
                                                    </h3>
                                                    <div class="item-email"><span>Email : &nbsp;
                                                        </span><?php echo $_SESSION['email'] ?>
                                                    </div>
                                                    <div class="item-email"><span>Total credit : &nbsp;
                                                            &nbsp;
                                                            &nbsp;
                                                        </span>0 BDT</div>
                                                    <div class="item-email"><span>Your total Referrals : &nbsp;
                                                            &nbsp;
                                                            &nbsp;
                                                        </span>0</div>
                                                    <div class="item-email"><span>Your referral code : &nbsp;
                                                            &nbsp;
                                                            &nbsp;
                                                        </span><span class="border rounded px-2 py-1">7357528716</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="static-report">
                                                <h3 class="report-title">Membership Report</h3>
                                                <hr>
                                                <div class="report-list">
                                                    <div class="report-item text-bold">
                                                        <label>Package Name</label>
                                                        <div class="item-value">Start Up</div>
                                                    </div>
                                                </div>
                                                <div class="report-list">
                                                    <div class="report-item">
                                                        <label>Status</label>
                                                        <div class="item-value text-warning">Pending</div>
                                                    </div>
                                                </div>
                                                <div class="report-list">
                                                    <div class="report-item">
                                                        <label>Validity Until</label>
                                                        <div class="item-value"> Jun 22, 2022 01:47 AM</div>
                                                    </div>
                                                </div>
                                                <div class="report-list">
                                                    <div class="report-item">
                                                        <label>Remaining Ads</label>
                                                        <div class="item-value">50</div>
                                                    </div>
                                                </div>
                                                <div class="report-list">
                                                    <div class="report-item">
                                                        <label>Posted Ads</label>
                                                        <div class="item-value">0</div>
                                                    </div>
                                                </div>
                                                <div class="report-list">
                                                    <a href="javascript:void(0)" class="btn btn-primary"
                                                        id="renew_membership_btn"
                                                        data-action="https://www.prothomei.com/subscribe/renew/6"
                                                        data-toggle="modal" data-target="#renew_membership">Renew</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="renew_membership" tabindex="-1" role="dialog"
                                    aria-labelledby="renew_membership-lavel" aria-hidden="true">
                                    <div class="modal-dialog shadow-lg border-0" role="document">
                                        <div class="modal-content border-0">
                                            <div class="modal-header border-0 rounded-0 py-2 bg-facebook">
                                                <div class="post-ad-title align-self-center">
                                                    <h3 class="item-title m-0 text-white">Renew Membership </h3>
                                                </div>
                                                <button type="button" class="close m-0 p-2" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" method="post" id="renew_membership_modal_form">
                                                    <input type="hidden" name="_token"
                                                        value="mHZMfW7TCWrylLuZVOSXmgtNJaEMW3SiSQPNW3OL"> <input
                                                        type="hidden" name="_method" value="POST">
                                                    <div class="p-2">
                                                        <div class="form-group">
                                                            <label for="duration">Select Membership Duration</label>
                                                            <select name="duration" id="duration"
                                                                class=" form-control form-control-lg dropdown border">
                                                                <option value="1" selected>1 Month</option>
                                                                <option value="3">3 Months</option>
                                                                <option value="6">6 Months</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer border-0">
                                                        <button type="button" class="btn btn-sm btn-secondary"
                                                            data-dismiss="modal">Cancel</button>
                                                        <button type="submit"
                                                            class="btn btn-sm btn-info">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <script>
                                    document.querySelectorAll('#renew_membership_btn').forEach(item => {
                                        item.addEventListener('click', event => {
                                            var action_route = item.getAttribute('data-action');
                                            document.getElementById("renew_membership_modal_form")
                                                .action = action_route;
                                        })
                                    })
                                </script>

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
                        <div class='mr-5 mt-1 d-flex align-items-center'>
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