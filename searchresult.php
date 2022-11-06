<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Search Result - Rent2SellBD</title>

        <!-- Favicon -->
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
        include("function/area.php");
    include("include/header.php");
    include("function/connection.php");
    include("function/function.php");
    include("include/search.php");
    ?>
    <div class="container">
        <?php
include("include/sidebar.php");
    ?>
        <div class="col-xl-9 col-lg-8">
            <div class="flex-heading-layout1">
                <div class="heading-layout2">
                    <h2 class="heading-title">Featured Ads</h2>
                </div>
                <div id="owl-nav1" class="smart-nav-layout1 mg-t-5">
                    <span class="rt-prev">
                        <i class="fas fa-angle-left"></i>
                    </span>
                    <span class="rt-next">
                        <i class="fas fa-angle-right"></i>
                    </span>
                </div>
            </div>
            <div class="rc-carousel" data-loop="true" data-items="10" data-margin="25" data-custom-nav="#owl-nav1"
                data-autoplay="true" data-autoplay-timeout="3000" data-smart-speed="1000" data-dots="false"
                data-nav="false" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="false"
                data-r-x-small-dots="false" data-r-x-medium="1" data-r-x-medium-nav="false" data-r-x-medium-dots="false"
                data-r-small="2" data-r-small-nav="false" data-r-small-dots="false" data-r-medium="2"
                data-r-medium-nav="false" data-r-medium-dots="false" data-r-large="3" data-r-large-nav="false"
                data-r-large-dots="false" data-r-extra-large="3" data-r-extra-large-nav="false"
                data-r-extra-large-dots="false">
                <?php
        include("pagination/function.php");
    $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
    $pro_id = 5;
    $limit = 5; //if you want to dispaly 10 records per page then you have to change here
    $startpoint = ($page * $limit) - $limit;
    $statement ="product where categoryid='".$pro_id."'"; //you have to pass your query over here
    // $res=mysqli_query($con, "select * from product where categoryid='".$pro_id."' LIMIT {$startpoint},{$limit}") or die("eRROR");
    $res=mysqli_query($con, "select * from product where hotitem='1'") or die("eRROR");

    while ($row=mysqli_fetch_array($res)) {
        echo "<div class='product-box-layout1'>
                    <div class=''>
                            <div class='item-img'>
                                <a href='itemDetails.php?details=".$row['id']."' class='item-trending'><img src='images/adsimages/".$row['image0']."' alt='Featured ad'></a>
                            </div>
                        </div>
                    <div class='item-content py-0'>
                        <div class='item-tag d-none d-md-block'><a href='all-ad3eca.html?category=4'>Electronics</a></div>
                            <div class='item-price'>
                                <span class='currency-symbol'>BDT </span>".$row['price']."
                            </div>
                    <h3 class='item-title mb-0' style='height:55px'><a href='itemDetails.php?details=".$row['id']."'>".$row['title']."</a></h3>
                    <h3 class='item-title mb-0'><span class='ml-0'>".$row['condition']."</span></h3>
                    <ul class='entry-meta'>
                    <li class='d-none d-md-block'><i class='far fa-clock'></i>1 year ago</li>
                    <li><div class='text-truncate'><i class='fas fa-map-marker-alt'></i> আজিমপুর</div></li>
                    </ul>
    
                    <div class='d-none d-md-block'>
                    </div>
    
                    </div>
                    </div>";
    }

    ?>

            </div>

            <div class="product-filter-heading">
                <div class="row align-items-center">
                    <?php
if (isset($_GET["keyword"])) {
    $searchkeyword = $_GET['keyword'];
    $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
    $limit = 9; //if you want to dispaly 10 records per page then you have to change here
    $startpoint = ($page * $limit) - $limit;

    if (isset($_GET['adtype'])) {
        $adtype = $_GET['adtype'];
        $sql = "SELECT * FROM product WHERE title LIKE '%$searchkeyword%' and adtype = '$adtype' LIMIT {$startpoint},{$limit}";
        $sqlfortotal = "SELECT * FROM product WHERE title LIKE '%$searchkeyword%' and adtype = '$adtype'";
        $statement ="product WHERE title LIKE '%$searchkeyword%' and adtype = '$adtype'"; //you have to pass your query over here
    } else {
        $adtype = ' ';
        $sql = "SELECT * FROM product WHERE title LIKE '%$searchkeyword%' LIMIT {$startpoint},{$limit}";
        $sqlfortotal = "SELECT * FROM product WHERE title LIKE '%$searchkeyword%'";
        $statement ="product WHERE title LIKE '%$searchkeyword%'"; //you have to pass your query over here
    }
    // $res=mysqli_query($con, "select * from product LIMIT {$startpoint},{$limit}") or die("eRROR");

    $result = mysqli_query($con, $sql) or die("eRROR");
    // $result = $con->query($sele);

    $totalcount=mysqli_num_rows(mysqli_query($con, $sqlfortotal));
    ?>
                    <div class="col-md-6">
                        <h2 class="item-title">
                            Showing
                            <?php echo ($totalcount == 0) ? $startpoint : $startpoint+1 ?>
                            to
                            <?php echo ($totalcount > $limit) ? ($page >=2) ? (($page-1)*$limit) + ($totalcount - (($page-1)*$limit)) : ($page*$limit) : $totalcount  ?>
                            of
                            <?php echo $totalcount ?>
                            results
                        </h2>
                    </div>

                    <div class="col-md-6 d-flex justify-content-md-end justify-content-center">
                        <div class="product-sorting">
                            <div class="ordering-controller">
                                <button class="ordering-btn dropdown-toggle" type="button" data-toggle="dropdown"
                                    aria-expanded="false">
                                    Sort By
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="">A to Z (title)</a>
                                    <a class="dropdown-item" href="">Z to A (title)</a>
                                    <a class="dropdown-item" href="">Data Added (oldest)</a>
                                    <a class="dropdown-item" href="">Data Added (newest)</a>
                                    <a class="dropdown-item" href="">Most Viewed</a>
                                    <a class="dropdown-item" href="">Less Viewed</a>
                                    <a class="dropdown-item" href="">Price (low to high)</a>
                                    <a class="dropdown-item" href="">Price (high to low)</a>
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
        if ($make = $result->num_rows > 0) {
            while ($row =$result->fetch_array(MYSQLI_ASSOC)) {
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
									
									
									<div class='item-tag d-none d-md-block'><a href='all-ad7a81.html?category=1'>Business &amp; Industry</a></div>
									<div class='item-price font-only-sm-1'>
										<span class='currency-symbol'>BDT </span>".$row['price']."<small> </small>
									</div>
									<h3 class='item-title mb-0 font-only-sm-1'><a href='itemDetails.php?details=".$row['id']."'>".$row['title']."</a></h3>
								
									<ul class='entry-meta'>
										<li class='d-none d-md-block'><i class='far fa-clock'></i>6 months ago</li>
										<li><div class='text-truncate'><i class='fas fa-map-marker-alt'></i> Dhaka</div></li>
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
        } else {
            echo "<div class='col-md-12 madd text-center'>";
            echo "<div class='' id='result-empty'
            data-bg-image='tassets/images/result_empty.png'
            style='background-image: url('tassets/images/result_empty.png');'></div>
            <h3 class='text-center text-secondary bg-light py-3'>No Match Found!</h3>
            </div>";
            echo "</div>";
        }
}

    ?>

                </div>
            </div>
            <?php if ($make = $result->num_rows > 0) {
                echo pagination($con, $statement, $limit, $page, $url='searchresult.php?keyword='.$searchkeyword.'&');
                echo "</div></br></br>";
            }
    ?>
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
</body>

</html>