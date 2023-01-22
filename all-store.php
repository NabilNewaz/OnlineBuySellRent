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
    <title>Stores - Rent2SellBD</title>
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
        include("include/header.php");
    ?>
    <?php
    require("function/functions.php");
    include("function/connection.php");
    include("function/function.php");
    ?>

    <main class="">
        <section class="store-wrap-layout1 bg-accent">
            <div class="container">
                <div class="row">

                    <?php
                        $res=mysqli_query($con, "select * from store") or die("eRROR");

    while ($row=mysqli_fetch_array($res)) {
        $storeid = $row['id'];
        $storename = $row['storeName'];
        $storelogo = $row['StoreLogo'];
        $addCount = mysqli_query($con, "select count(*) AS NumberOfProducts from Product where storeid = $storeid") or die("eRROR");
        $addNumberArr = mysqli_fetch_array($addCount);
        $addNumber = $addNumberArr['NumberOfProducts'];
        echo "
        <div class='col-xl-3 col-lg-4 col-md-6'>
        <div class='store-list-layout1'>
            <a href='store-view?storeid=".$storeid."'>
                <div class='item-logo'>
                    <img src='images/storeimages/".$storelogo."' alt='store'>
                </div>
                <div class='item-content'>
                    <h3 class='item-title'>".$storename."</h3>
                    <div class='ad-count'>".$addNumber." ad</div>
                </div>
            </a>
        </div>
    </div>
        ";
    }
    ?>
                    <div class="col-lg-12 <?php if (mysqli_num_rows($res) > 0) {
                        echo "d-none";
                    } else {
                        echo "d-block";
                    }?>">
                        <div class="tab-content">

                            <div class="" id="result-empty" data-bg-image="tassets/images/result_empty.png"
                                style="background-image: url('tassets/images/result_empty.png');">
                            </div>
                            <h3 class="text-center text-secondary bg-light py-3">Empty</h3>

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

    <script src="js/vendor/jquery-1.10.2.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')
    </script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script src="js/owl.carousel.min.js"></script>


</body>

</html>