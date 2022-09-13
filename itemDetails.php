<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ads Details - Rent2SellBD</title>

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
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,300i,400,400i,600,600i,700,700i,800,800i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet">



</head>

<body class="sticky-header bg-accent" id="app">
    <?php 
	    include ("function/connection.php");
		include ("include/header.php");
		include ("function/function.php");
	?>

<?php 
if(isset($_GET["details"])) {
			$details = $_GET["details"];
			$select = "select * from product where id='".$details."'";
			$see_product=$con->query($select);
			
			while($row=$see_product->fetch_array()){
?>
   <section class="single-product-wrap-layout1 section-padding-equal-70 bg-accent">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-9 col-lg-8">
                        <div class="single-product-box-layout1">
                           <div class="product-info light-shadow-bg">
                              <div class="product-content light-box-content">
                                 <div class="item-img-gallery">
                                    <div class="tab-content modal_image_able_panel">
                                       <div class="tab-pane fade text-center bg-light  show active" id="gallery1" role="tabpanel">
                                       <?php echo "<img class='modal_able_image'  src='images/".$row['image']."' type='button' alt='product' data-toggle='modal' data-target='#imageModal' style='max-height: 400px;'>" 	?>
                                       </div>
                                       <div class="tab-pane fade text-center bg-light " id="gallery2" role="tabpanel">
                                       <?php echo " <img class='modal_able_image' src='images/".$row['image']."' type='button' alt='product' data-toggle='modal' data-target='#imageModal' style='max-height: 400px;'> " ?>
                                       </div>
                                       <div class="tab-pane fade text-center bg-light " id="gallery3" role="tabpanel">
                                       <?php echo " <img class='modal_able_image' src='images/".$row['image']."' type='button' alt='product' data-toggle='modal' data-target='#imageModal' style='max-height: 400px;'> " ?>
                                       </div>
                                       <div class="tab-pane fade text-center bg-light " id="gallery4" role="tabpanel">
                                       <?php echo " <img class='modal_able_image' src='images/".$row['image']."' type='button' alt='product' data-toggle='modal' data-target='#imageModal' style='max-height: 400px;'> " ?>
                                       </div>
                                       <div class="tab-pane fade text-center bg-light " id="gallery5" role="tabpanel">
                                       <?php echo " <img class='modal_able_image' src='images/".$row['image']."' type='button' alt='product' data-toggle='modal' data-target='#imageModal' style='max-height: 400px;'> " ?>
                                       </div>
                                    </div>
                                    <ul class="nav nav-tabs" role="tablist">
                                       <li class="nav-item">
                                          <a class="nav-link active" data-toggle="tab" href="#gallery1" role="tab" aria-selected="true">
                                          <?php echo " <img class='img-thumbnail' src='images/".$row['image']."' alt='thumbnail' style='height: 60px;'>" ?>
                                          </a>
                                       </li>
                                       <li class="nav-item">
                                          <a class="nav-link " data-toggle="tab" href="#gallery2" role="tab" aria-selected="false">
                                          <?php echo " <img class='img-thumbnail' src='images/".$row['image']."' alt='thumbnail' style='height: 60px;'>" ?>
                                          </a>
                                       </li>
                                       <li class="nav-item">
                                          <a class="nav-link " data-toggle="tab" href="#gallery3" role="tab" aria-selected="false">
                                          <?php echo " <img class='img-thumbnail' src='images/".$row['image']."' alt='thumbnail' style='height: 60px;'>" ?>
                                          </a>
                                       </li>
                                       <li class="nav-item">
                                          <a class="nav-link " data-toggle="tab" href="#gallery4" role="tab" aria-selected="false">
                                          <?php echo " <img class='img-thumbnail' src='images/".$row['image']."' alt='thumbnail' style='height: 60px;'>" ?>
                                          </a>
                                       </li>
                                       <li class="nav-item">
                                          <a class="nav-link " data-toggle="tab" href="#gallery5" role="tab" aria-selected="false">
                                          <?php echo " <img class='img-thumbnail' src='images/".$row['image']."' alt='thumbnail' style='height: 60px;'>" ?>
                                          </a>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="single-entry-meta">
                                    <ul>
                                       <li>Rating  0 <i class="far fa-star text-warning"></i></li>
                                       <li><i class="far fa-clock"></i>May 16, 2022 07:02 PM</li>
                                       <li><i class="fas fa-map-marker-alt"></i>Uttar badda, gupipara,Dhaka 1212</li>
                                       <li><i class="far fa-eye"></i>5 views</li>
                                    </ul>
                                 </div>
                                 <div class="">
                                    <div class="widget-lg widget-price mb-3">
                                       <div class="item-price mb-0">
                                       <?php
                                          echo "<span class='currncy-symbol'>BDT </span>".$row['price']."
                                       </div>
                                    </div>
                                    <h4>".$row['title']."</h4>" ?>
                                    <div class="d-lg-none">
                                    </div>
                                    <div class="border-top py-2">
                                    <?php 
                                    
                                    $uid = $row['user_id'];
                                    $usql = "SELECT * FROM users WHERE id = '$uid'";
                                    $userinfo = $con->query($usql);
                                    while($urec = $userinfo->fetch_array()){
                                    
                                    echo "
                                       <div class='pl-1 text-dark'>Ad posted by
                                          <span class='font-weight-bold'>".ucfirst($urec['name'])."</span>
                                       </div>";

                                    };
                                    echo "  
                                    </div>
                                    <div class='border-bottom border-top mb-3'>
                                       <dl class='row justify-content-start mt-2' style='font-size: 15px;color: black'>
                                          <dt class='col-5 col-md-4 col-xl-3'>Price </dt>
                                          <dd class='col-7 col-md-8 col-xl-9'>BDT ".$row['price']."</dd>
                                          <dt class='col-5 col-md-4 col-xl-3'>Product Condition </dt>
                                          <dd class='col-7 col-md-8 col-xl-9'>".$row['condition']."</dd>
                                          <dt class='col-5 col-md-4 col-xl-3'>Price Type </dt>
                                          <dd class='col-7 col-md-8 col-xl-9'>Negotiable</dd>
                                          <dt class='col-5 col-md-4 col-xl-3'>Size </dt>
                                          <dd class='col-7 col-md-8 col-xl-9'>Full adult</dd>
                                          <dt class='col-5 col-md-4 col-xl-3'>Authenticity </dt>
                                          <dd class='col-7 col-md-8 col-xl-9'>Original</dd>
                                          <dt class='col-5 col-md-4 col-xl-3'>Ad Type </dt>
                                          <dd class='col-7 col-md-8 col-xl-9'>".$row['adtype']."</dd>
                                       </dl>" ?>
                                    </div>
                                 </div>
                                 <div class="item-details">
                                    <ul class="nav nav-tabs float-left" role="tablist">
                                       <li class="nav-item">
                                          <a class="nav-link active" data-toggle="tab" href="#details" role="tab" aria-selected="true">Details</a>
                                       </li>
                                       <li class="nav-item">
                                          <a class="nav-link" data-toggle="tab" href="#features" role="tab" aria-selected="false">Features</a>
                                       </li>
                                    </ul>
                                    <br>
                                    <div class="tab-content">
                                       <div class="tab-pane fade show active" id="details" role="tabpanel">
                                        <?php echo "
                                          <p class='text-break'>
                                          ".$row['description']."<br>
                                          </p>" ?>
                                       </div>
                                       <div class="tab-pane fade" id="features" role="tabpanel">
                                          <div class="item-features">
                                             <div class="row">
                                                <div class="col-md-6">
                                                   <ul class="features-list">
                                                   </ul>
                                                </div>
                                                <div class="col-md-6">
                                                   <ul class="features-list">
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="item-action-area">
                                    <ul>
                                       <li class="inline-item"><a href="javascript:void(0)" class=" btn btn-warning text-white"  data-toggle="modal" data-target="#promote-this-ad"> <i class="fa fa-arrow-circle-up text-white" aria-hidden="true"></i> Promote this ad</a></li>
                                       <li class="inline-item"><a href="../../login.html"><i class="fas fa-heart"></i>Add to Favourites</a></li>
                                       <li class="inline-item"><a href="../../pages/contact.html"><i class="fas fa-exclamation-triangle"></i>Report Abuse</a></li>
                                      <!-- <li class="item-social">
                                          <span class="share-title">
                                          <i class="fas fa-share-alt"></i>
                                          Share:
                                          </span>
                                          <div class="fb-share-button" data-href="" data-layout="button" data-size="large"><a target="_blank" href="" class="fb-xfbml-parse-ignore">Share</a></div>
                                       </li>-->
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <!-- Modal -->
                           <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-xl bg-light">
                                 <div class="modal-content bg-dark border-0 rounded-0">
                                    <div class="modal-header border-0">
                                       <button type="button" class="close text-white p-2" data-dismiss="modal" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                       </button>
                                    </div>
                                    <div class="modal-body bg-secondary p-1 py-lg-3 px-lg-5">
                                       <div class="text-center">
                                          <img class="img-fluid modal_able_image_src" src="#">
                                       </div>
                                    </div>
                                    <div class="modal-footer p-2 border-0">
                                       <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-4 sidebar-break-md sidebar-widget-area pb-4 pb-lg-5">
                        <div class="row">
                           <div class="col-12 order-2 order-lg-1">
                              <div class="widget-lg widget-author-info widget-store-info widget-light-bg">
                                 <h3 class="widget-border-title">Advertiser Information</h3>
                                 <div class="author-content">
                                    <div class="author-name">
                                    </div>
                                    <div class="author-meta">
                                       <ul>
                                          <li><i class="fas fa-map-marker-alt"></i>Uttar badda, gupipara,Dhaka 1212</li>
                                       </ul>
                                    </div>
                                    <?php 
                                    if(isset($_GET["details"])) {
                                        $details = $_GET["details"];
                                        $select = "select * from product where id='".$details."'";
                                        $see_product=$con->query($select);
                                        while($row=$see_product->fetch_array()){
                                             echo "<p style='display:none'>".$row['user_id']."</P>";
                                            $uid = $row['user_id'];
                                                 $usql = "SELECT * FROM users WHERE id = '$uid'";
                                                 $userinfo = $con->query($usql);
                                                 while($urec = $userinfo->fetch_array()){
                                    echo"
                                    <div class='phone-number classima-phone-reveal not-revealed d-none d-lg-block' data-phone='".$urec['phone']."'>";
                                    ?>
                                       <div class="number"><i class="fas fa-phone"></i><span>01XXXXXXXXX</span></div>
                                       <div class="item-text">Click to reveal phone number</div>
                                    </div>
                                    <div class="author-mail d-none d-lg-block">
                                    <?php echo "
                                       <a href='mailto:".$urec['email']."' class='mail-btn' data-target='#author-mail'>"; 
                                     ?>
                                       <i class="fas fa-envelope"></i>Email
                                       </a>
                                       <?php echo "
                                       <a href='https://wa.me/88".$urec['phone']."' target='_blank' >
                                          <button type='submit' class='mail-btn mt-2 border-0 outline-none w-100 text-left'>
                                          <i class='fas fa-comment'></i>Live chat
                                          </button></a>";
                                                    };
                                                }
                                            }
                                          ?>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 order-1 order-lg-2">
                              <div class="widget-lg widget-safty-tip widget-light-bg order-1 order-lg-2">
                                 <h3 class="widget-border-title">Safety Tips for Buyers</h3>
                                 <div class="safty-tip-content">
                                    <ul>
                                       <li>Meet seller at a public place</li>
                                       <li>Check The item before you buy</li>
                                       <li>Pay only after collecting The item</li>
                                    </ul>
                                 </div>
                              </div>
                              <div class="widget widget-banner">
                                 <a href="#">
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="">
                     <div class="single-product-box-layout1 pb-4 pb-lg-5">
                        <div class="item-review light-shadow-bg">
                           <h3 class="widget-border-title">Leave a Review</h3>
                           <div class="light-box-content">
                              <form action="https://prothomei.com/review" method="POST">
                                 <input type="hidden" name="ad_id" value="2100">
                                 <input type="hidden" name="_token" value="nEBiN5oCfaAJF6vKPkbvt7SZDx2rbPy6cpnlGVfZ">                <input type="hidden" name="_method" value="POST">                
                                 <div class="item-text">Your email address will not be published. Required fields are marked *</div>
                                 <div class="form-group">
                                    <label>Your Name *</label>
                                    <input class="form-control" type="text" name="name" id="name" required>
                                 </div>
                                 <div class="form-group">
                                    <label>Your Email *</label>
                                    <input type="email" class="form-control" name="email" required value="">
                                 </div>
                                 <div class="form-group">
                                    <label>Review Title *</label>
                                    <input type="text" class="form-control" name="title" required value="">
                                 </div>
                                 <h5>Your Rating *</h5>
                                 <div class="rating">
                                    <label>
                                    <input type="radio" name="rating" value="1" />
                                    <span class="icon">★</span>
                                    </label>
                                    <label>
                                    <input type="radio" name="rating" value="2" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    </label>
                                    <label>
                                    <input type="radio" name="rating" value="3" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    </label>
                                    <label>
                                    <input type="radio" name="rating" value="4" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    </label>
                                    <label>
                                    <input type="radio" name="rating" value="5" />
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    <span class="icon">★</span>
                                    </label>
                                 </div>
                                 <div class="form-group">
                                    <label>Your Review *</label>
                                    <textarea class="form-control"  name="comment" id="comment" required cols="30" rows="3" required></textarea>
                                 </div>
                                 <div class="form-group">
                                    <button type="submit" value="Post Comment" name="submit" class="item-btn outline-none">SUBMIT</button>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <style>
                        .rating {
                        display: inline-block;
                        position: relative;
                        height: 30px;
                        line-height: 30px;
                        font-size: 30px;
                        }
                        .rating label {
                        position: absolute;
                        top: 0;
                        left: 0;
                        height: 100%;
                        cursor: pointer;
                        }
                        .rating label:last-child {
                        position: static;
                        }
                        .rating label:nth-child(1) {
                        z-index: 5;
                        }
                        .rating label:nth-child(2) {
                        z-index: 4;
                        }
                        .rating label:nth-child(3) {
                        z-index: 3;
                        }
                        .rating label:nth-child(4) {
                        z-index: 2;
                        }
                        .rating label:nth-child(5) {
                        z-index: 1;
                        }
                        .rating label input {
                        position: absolute;
                        top: 0;
                        left: 0;
                        opacity: 0;
                        }
                        .rating label .icon {
                        float: left;
                        color: transparent;
                        }
                        .rating label:last-child .icon {
                        color: rgb(119, 119, 119);
                        }
                        .rating:not(:hover) label input:checked ~ .icon,
                        .rating:hover label:hover input ~ .icon {
                        color: rgb(255, 153, 0);
                        }
                        .rating label input:focus:not(:checked) ~ .icon:last-child {
                        color: #000;
                        text-shadow: 0 0 5px #09f;
                        }
                     </style>
                     <div class="item-related-product light-shadow-bg pb-4 pb-lg-5">
                        <div class="flex-heading-layout2">
                           <h3 class="widget-border-title">Related Ads</h3>
                           <div id="owl-nav1" class="smart-nav-layout1">
                              <span class="rt-prev">
                              <i class="fas fa-angle-left"></i>
                              </span>
                              <span class="rt-next">
                              <i class="fas fa-angle-right"></i>
                              </span>
                           </div>
                        </div>
                        <div class="light-box-content">
                           <div class="rc-carousel" data-loop="true" data-items="7" data-margin="30" data-custom-nav="#owl-nav1" data-autoplay="true" data-autoplay-timeout="3000" data-smart-speed="1000" data-dots="false" data-nav="false" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="false" data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="false" data-r-x-medium-dots="false" data-r-small="2" data-r-small-nav="false" data-r-small-dots="false" data-r-medium="3" data-r-medium-nav="false" data-r-medium-dots="false" data-r-large="4" data-r-large-nav="false" data-r-large-dots="false" data-r-extra-large="4" data-r-extra-large-nav="false" data-r-extra-large-dots="false">
                              <?php
                                include("pagination/function.php");
                                    $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
                                    $limit = 10; //if you want to dispaly 10 records per page then you have to change here
                                    $pro= 5;
                                    $startpoint = ($page * $limit) - $limit;
                                    $statement ="product where categoryid='".$pro."'"; //you have to pass your query over here
                                    $res=mysqli_query($con,"select * from product where categoryid='".$pro."' LIMIT {$startpoint},{$limit}") or die("eRROR");
                                    
                                        while($row=mysqli_fetch_array($res)){
                                            echo "<div class='product-box-layout1 box-shadwo-light mg-1'>
                                            <div class=''>
                                                    <div class='item-img'>
                                                        <a href='itemDetails.php?details=".$row['id']."' class='item-trending'><img src='images/".$row['image']."' alt='Featured ad'></a>
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
                                    }
                                ?> 
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>



               
    <?php 						 
    };?>


    <?php
	 if(isset($_POST['submit'])){
	   $db =$con;
	   $name =$_POST['name'];
	   $comment =$_POST['comment'];
	   $insertdata = "INSERT INTO `buynsell`.`comment` (`id`, `name`, `comment`) VALUES ('', '$name', '$comment')";
       $result = $db->query($insertdata);
	   if($result){echo "Your Cmment Added!!";}
	   else echo "Error!!!";
	   $db->close();  
	   }
		include ("include/footer.php");
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
            for(var i = 0; i < input.files.length && i < 5; i++)
            if (input.files && input.files[i]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    var elm = '<img class="m-2 shadow-sm border hover" src="'+ e.target.result +'" alt="your image" style="height:100px" />';
                    $(elm).appendTo($('#imgLivePreview'));
                }
                reader.readAsDataURL(input.files[i]);
            }
        }
        $("#mulImgInput").change(function(){
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
        $('#imageModal').on('show.bs.modal', function (event) {
            var imgSrc = $('.modal_image_able_panel .active .modal_able_image').attr('src');
            $('.modal_able_image_src').attr('src', imgSrc);
        })
    </script>
</body>

</html>
