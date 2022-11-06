 <?php session_start(); ?>
 <!-- ScrollUp Start Here -->
 <a href="#wrapper" data-type="section-switch" class="scrollup">
     <i class="fas fa-angle-double-up"></i>
 </a>
 <!-- ScrollUp End Here -->
 <!-- Preloader Start Here -->
 <div id="preloader"></div>
 <!-- Preloader End Here -->

 <div id="wrapper" class="wrapper">

     <header class="header">
         <div id="rt-sticky-placeholder"></div>
         <div id="header-menu" class="header-menu menu-layout2">
             <div class="container">
                 <div class="row d-flex align-items-center">
                     <div class="col-lg-2">
                         <div class="logo-area">
                             <a href="./" class="temp-logo">
                                 <img src="images/Rent2SellBD.png" alt="logo"
                                     style="max-width:200%; hight:auto; padding-bottom: 10px;">
                             </a>
                         </div>
                     </div>
                     <div class="col-lg-7 d-flex justify-content-end">
                         <nav id="dropdown" class="template-main-menu">
                             <ul>
                                 <li>
                                     <a href="./" class="">Home</a>
                                 </li>
                                 <li>
                                     <a href="javascript:void(0)" class="has-dropdown">Ads</a>
                                     <ul class="sub-menu">
                                         <li>
                                             <a href="all-ads.php">All Ads</a>
                                         </li>
                                         <li>
                                             <a href="ad/featured-ads.html">Featured Ads</a>
                                         </li>
                                         <li>
                                             <a href="ad/auction-ads.html">Auction Ads</a>
                                         </li>
                                     </ul>
                                 </li>

                                 <li>
                                     <a href="store/all.html">Stores</a>
                                 </li>


                                 <li>
                                     <a href="javascript:void(0)" class="has-dropdown">Pages</a>
                                     <ul class="sub-menu">
                                         <li>
                                             <a href="pages/blog.html">Blog</a>
                                         </li>
                                         <li>
                                             <a href="pages/about.html">About</a>
                                         </li>
                                         <li>
                                             <a href="pages/contact.html">Contact</a>
                                         </li>
                                     </ul>
                                 </li>



                                 <li>
                                     <a href="javascript:void(0)" class="has-dropdown"><i class="far fa-user"></i></a>
                                     <ul class="sub-menu">
                                         <li>
                                             <?php
                                            if (isset($_SESSION['username'])) {
                                                echo '<a href="user-profile.php">Profile</a>';
                                            } else {
                                                echo '<a href="login.php">Login</a>';
                                            }
?>
                                         </li>
                                         <li>
                                             <?php
    if (isset($_SESSION['username'])) {
        echo '<a href="logout.php">Logout</a>';
    } else {
        echo '<a href="usersingup.php">Register</a>';
    }
?>
                                         </li>
                                     </ul>
                                 </li>

                                 <li class="d-none d-lg-block">
                                     <a href="login.html" class="color-primary live-chat position-relative"
                                         data-toggle="tooltip" data-placement="top" title="Message">
                                         <i class="far fa-comment-alt" style="font-size: 18px"></i> </a>


                                 </li>
                                 <li class="d-none d-lg-block">
                                     <a href="login.html" class="color-primary position-relative" data-toggle="tooltip"
                                         data-placement="top" title="Cart">
                                         <i class="fa fa-shopping-cart" style="font-size: 18px"></i> </a>



                                 </li>
                                 <li class="d-lg-none">
                                     <a href="adspost.php" class="item-btn"><i class="fas fa-plus"></i> Post Your Ad</a>
                                 </li>
                             </ul>
                         </nav>
                     </div>
                     <div class="col-lg-3 d-flex justify-content-end">
                         <div class="header-action-layout1">
                             <ul>
                                 <li class="header-btn">
                                     <a href="adspost.php" class="item-btn"><i class="fas fa-plus"></i>Post Your Ad</a>
                                 </li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </header>