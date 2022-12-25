<?php
    $storeid = $_GET['storeid'];
    if (empty($storeid)) {
        header("location: all-store.php");
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
    <title>Store Details - Rent2SellBD</title>
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

    <?php
    $storedetails=mysqli_fetch_array(mysqli_query($con, "select * from store where id=$storeid"));
    ?>
    <!--=====================================-->
    <!--=          Store Banner Start       =-->
    <!--=====================================-->
    <section class="store-banner-wrap-layout1 bg-accent d-none d-md-block">
        <div class="container">
            <div class="store-banner-box" data-bg-image=<?php echo "images/storeimages/".$storedetails['StoreBanner'].""?>>
                <div class="banner-content">
                    <div class="store-logo">
                        <img
                            src=<?php echo "images/storeimages/".$storedetails['StoreLogo'].""?>
                        alt="<?php echo "".$storedetails['storeName'].""?>">
                    </div>
                    <div class="store-content">
                        <h2 class="item-title">
                            <?php echo "".$storedetails['storeName'].""?>
                        </h2>
                        <div class="store-tagline">
                            <?php echo "".$storedetails['Slogan'].""?>
                        </div>
                        <ul class="item-meta">
                            <li><i
                                    class="fas fa-map-marker-alt"></i><?php echo "".$storedetails['Location'].""?>
                            </li>
                            <li><i class="fas fa-user"></i>Member since -
                                <?php $yrdata= strtotime($storedetails['storeAddedTime']);
    echo date('F, d Y', $yrdata);?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="store-banner-wrap-layout1 d-block d-md-none">
        <div class="container">
            <img class=""
                src=<?php echo "images/storeimages/".$storedetails['StoreBanner'].""?>
            alt="" class="">
            <div class="" style="">
                <div class="banner-content d-flex">
                    <div class="store-logo py-2">
                        <img class="bg-light" width="120px"
                            src=<?php echo "images/storeimages/".$storedetails['StoreLogo'].""?>
                        alt="<?php echo "".$storedetails['storeName'].""?>">
                    </div>
                    <div class="store-content p-2">
                        <h4 class="item-title font-weight-bold mb-0" style="">
                            <?php echo "".$storedetails['storeName'].""?>
                        </h4>
                        <div class="d-flex flex-column">
                            <small class="item-title d-flex">
                                <span><i class="fas fa-user fa-sm" style="color: #f85c70"></i></span>
                                <span class="pl-2">Member since - <?php $yrdata= strtotime($storedetails['storeAddedTime']);
    echo date('F, d Y', $yrdata);?></span>
                            </small>
                            <small class="item-title d-flex">
                                <span><i class="fas fa-map-marker-alt fa-sm" style="color: #f85c70"></i></span>
                                <span
                                    class="pl-2"><?php echo "".$storedetails['Location'].""?></span>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=====================================-->
    <!--=          Product Start         =-->
    <!--=====================================-->
    <section class="store-wrap-layout2 bg-accent">
        <div class="container">
            <div class="row">

                <?php
          $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
    $limit = 9; //if you want to dispaly 10 records per page then you have to change here
    $startpoint = ($page * $limit) - $limit;
    $statement ="product"; //you have to pass your query over here
    $res=mysqli_query($con, "select * from product where storeid=$storeid and publishtype='store'") or die("eRROR");
    $totalcount=mysqli_num_rows(mysqli_query($con, "select * from store where id=$storeid"));
    ?>

                <div class="col-xl-9 col-lg-8">
                    <div class="product-filter-heading">
                        <div class="row align-items-center">

                            <div class="col-md-6">
                                <h2 class="item-title">
                                    Showing
                                    <?php echo $startpoint+1 ?> to
                                    <?php echo ($totalcount > $limit) ? ($page >=2) ? (($page-1)*$limit) + ($totalcount - (($page-1)*$limit)) : ($page*$limit) : $totalcount  ?>
                                    of
                                    <?php echo $totalcount ?>
                                    results
                                </h2>
                            </div>

                            <div class="col-md-6 d-flex justify-content-md-end justify-content-center">
                                <div class="product-sorting">
                                    <div class="ordering-controller">
                                        <button class="ordering-btn dropdown-toggle" type="button"
                                            data-toggle="dropdown" aria-expanded="false">
                                            Sort By
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item"
                                                <?php echo "href='store-view?storeid=$storeid&title=asc'"?>>A
                                                to Z
                                                (title)</a>
                                            <a class="dropdown-item"
                                                <?php echo "href='store-view?storeid=$storeid&title=desc'"?>>Z
                                                to A
                                                (title)</a>
                                            <a class="dropdown-item"
                                                <?php echo "href='store-view?storeid=$storeid&date=asc'"?>>Data
                                                Added
                                                (oldest)</a>
                                            <a class="dropdown-item"
                                                <?php echo "href='store-view?storeid=$storeid&date=desc'"?>>Data
                                                Added (newest)</a>
                                            <a class="dropdown-item"
                                                <?php echo "href='store-view?storeid=$storeid&view=desc'"?>>Most
                                                Viewed</a>
                                            <a class="dropdown-item"
                                                <?php echo "href='store-view?storeid=$storeid&view=asc'"?>>Less
                                                Viewed</a>
                                            <a class="dropdown-item"
                                                <?php echo "href='store-view?storeid=$storeid&price=asc'"?>>Price
                                                (low to high)</a>
                                            <a class="dropdown-item"
                                                <?php echo "href='store-view?storeid=$storeid&price=desc'"?>>Price
                                                (high to low)</a>
                                        </div>
                                    </div>
                                    <div class="layout-switcher">
                                        <ul>
                                            <li>
                                                <a href="#" data-type="product-box-list" class="product-view-trigger">
                                                    <i class="fas fa-th-list"></i>
                                                </a>
                                            </li>
                                            <li class="active">
                                                <a class="product-view-trigger" href="#" data-type="product-box-grid">
                                                    <i class="fas fa-th-large"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div id="product-view" class="product-box-grid">
                        <div class="row">

                            <?php

while ($row=mysqli_fetch_array($res)) {
    $catagoryid = $row['categoryid'];
    $subareaid = $row['subareaid'];
    $catagory=mysqli_query($con, "select categoryname from category where id = $catagoryid") or die("eRROR");
    $catagoryrow=mysqli_fetch_array($catagory);

    $subarea=mysqli_query($con, "select subareaname from subarea where id = $subareaid") or die("eRROR");
    $subarearow=mysqli_fetch_array($subarea);

    $datetime1 = date_create($row['adddate']);
    $datetime2 = date_create(date("y-m-d h:i:s"));
    $interval = date_diff($datetime1, $datetime2);
    echo "<div class='col-xl-4  col-6 px-only-sm-1'>
            <div class='product-grid-view'>
            <div class='grid-view-layout2'>
                <div class='product-box-layout1 pb-2'>
                    <div class=''>
                        <div class='item-img'>
                        <a href='itemDetails.php?details=".$row['id']."' class=''><img src='images/adsimages/".$row['image0']."' alt='Product'></a>
                    </div>
                </div>
                <div class='item-content py-0 px-1 px-sm-3'>
                    <div class='item-tag d-none d-md-block'><a href='catWiseItems?id=".$row['categoryid']."'>".$catagoryrow['categoryname']."</a></div>
                    <div class='item-price font-only-sm-1'>
                        <span class='currency-symbol'>BDT </span>".$row['price']."<small> </small>
                    </div>
                    <h3 class='item-title mb-0 font-only-sm-1'><a href='itemDetails.php?details=".$row['id']."'>".$row['title']."</a></h3>
                
                    <ul class='entry-meta'>
                        <li class='d-none d-md-block'><i class='far fa-clock'></i>".$interval->format('%m')." months ago</li>
                        <li><div class='text-truncate'><i class='fas fa-map-marker-alt'></i>". ucfirst($subarearow['subareaname'])."</div></li>
                    </ul>

                    <div class='d-none d-md-block'>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class='product-list-view'>
    <div class='list-view-layout2'>
        <div class='product-box-layout3'>
            <div class='mr-3 '>
                <div class='item-img mr-0'>
                    <a href='itemDetails.php?details=".$row['id']."' class=''> <img src='images/adsimages/".$row['image0']."' alt='Product' style='object-position: top;'></a>
                </div>
            </div>

            <div class='product-info'>
                <div class='item-content'>

                    <h3 class='item-title mb-0 font-only-sm-1'><a href='itemDetails.php?details=".$row['id']."'>".$row['title']."</a></h3>
                    
                    <div class='d-md-none'>
                        <div class='item-price mb-0'>
                            <span class='currency-symbol'>BDT </span>".$row['price']."<small> </small>
                        </div>
                    </div>

                    <ul class='entry-meta d-flex flex-column'>
                        <li class='my-0 d-none d-md-block'><i class='far fa-clock'></i>6 months ago</li>
                        <li class='my-0'><div class='text-truncate'><i class='fas fa-map-marker-alt'></i> Dhaka</div></li>
                    </ul>

                    <div class='d-none d-md-block'>
                    </div>

                    
                </div>
                <div class='item-right'>
                    <div class='right-meta'>
                        <div class='d-none d-md-block'>
                            <span><i class='fas fa-shopping-cart'></i>Sell</span>
                            <span><i class='far fa-eye'></i>17</span>
                        </div>
                    </div>
                    <div class='d-none d-md-block'>
                        <div class='item-price mb-0'>
                            <span class='currency-symbol'>BDT </span>".$row['price']."<br><small> </small>
                        </div>
                    </div>
                    <div class='item-btn'>
                        <a href='itemDetails.php?details=".$row['id']."'>Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>";
}
    ?>

                        </div>
                    </div>


                </div>

                <div class="col-xl-3 col-lg-4 sidebar-break-md sidebar-widget-area">
                    <div class="widget-lg widget-store-detail widget-light-bg">
                        <h3 class="widget-border-title">Details</h3>
                        <div class="store-content">
                            <p><?php echo $storedetails['Description'] ?>
                            </p>
                        </div>
                    </div>
                    <div class="widget-lg widget-author-info widget-store-info widget-light-bg">
                        <h3 class="widget-border-title">Store Information</h3>
                        <div class="author-content">
                            <div class="store-website">
                                <a target="_blank"
                                    href="<?php echo $storedetails['Website'] ?>"><i
                                        class="fas fa-globe-asia"></i>Visit Website</a>
                            </div>
                            <div class="store-opening-hour">
                                <span class="item-title"><i class="far fa-clock"></i>Opening Hours</span>
                                <?php if ($storedetails['OpeningHours'] == "always-open") {
                                    echo "<span class='pl-3'>Always Open</span>";
                                } else {
                                    echo " <ul class='pl-3'>
                                    <li>
                                        <span>".date('h:i A', strtotime($storedetails['openingHourStart']))."</span>
                                        to
                                        <span class='pl-2'>".date('h:i A', strtotime($storedetails['openingHourEnd']))."</span>
                                    </li>
                                </ul>";
                                } ?>
                            </div>
                            <div class="phone-number classima-phone-reveal not-revealed"
                                data-phone="<?php echo $storedetails['Mobile'] ?>">
                                <div class="number"><i class="fas fa-phone"></i><span>01XXX-XXXXXX</span></div>
                                <div class="item-text">Click to reveal phone number</div>
                            </div>
                            <div class="author-mail">
                                <a href="#" class="mail-btn" data-toggle="modal" data-target="#author-mail">
                                    <i class="fas fa-envelope"></i>Email
                                </a>
                                <a href="live-chat/2569" class="mail-btn mt-2">
                                    <i class="fas fa-comment"></i>Live chat
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=====================================-->
    <!--=       Modal Start           	 	=-->
    <!--=====================================-->
    <!-- Author Mail Box -->
    <div class="modal fade author-mail-box" id="author-mail" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="contact2/mail-to-store-seller/16" method="POST">
                        <input type="hidden" name="_token" value="Dsojvlt9Tq0RzsCJEaQ64DZBTrGL5Z4foS5SijHE"> <input
                            type="hidden" name="_method" value="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name*" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email*"
                                required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject*"
                                required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control textarea" placeholder="Message*" name="message"
                                id="form-message" cols="10" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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