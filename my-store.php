<?php
error_reporting(0);
//start user session
session_start();
if (!(isset($_SESSION['username']))) {
    header("location: login.php?referer=my-store");
}
// if ($_SESSION['form_submit'] == true) {
//     header("location: my-store.php");
// }
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


        <?php
        require("function/functions.php");
include("function/connection.php");
include("function/function.php");
?>

        <?php
$db =$con;
$userid =$_SESSION['id'];
$store_details=mysqli_query($con, "select * from store where storeUserId = $userid") or die("eRROR");
$storerow=mysqli_fetch_array($store_details);

// $store_details = $db->query("SELECT * FROM store where storeUserId = '$userid' ");
// $storerow = mysqli_num_rows($store_details);
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
                                            <form id="create-store" action="" method="post"
                                                enctype="multipart/form-data" class="form-group">
                                                <input class="form-control"
                                                    value="<?php echo $_SESSION['id']; ?>"
                                                    type="hidden" name="uid" id="uid">
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
                                                                        <img id=store-banner-img <?php if ($storerow > 0) {
                                                                            echo "src=images/storeimages/".$storerow['StoreBanner']."";
                                                                        } else {
                                                                            echo 'src="tassets/images/default_store_banner.jpg"' ;
                                                                        } ?>
                                                                        alt="Store Banner">
                                                                    </div>
                                                                    <input type="file" name="banner" id="banner"
                                                                        class=" form-control-sm d-flex" required
                                                                        onchange='showPreview(event, "store-banner-img");'>
                                                                    <div class="alert alert-danger"> Recommended banner
                                                                        size to (1180x300)px
                                                                    </div>
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
                                                                        <img id=store-logo-img <?php if ($storerow > 0) {
                                                                            echo "src=images/storeimages/".$storerow['StoreLogo']."";
                                                                        } else {
                                                                            echo 'src="tassets/images/default_store_banner.jpg"' ;
                                                                        } ?>
                                                                        alt="Store Banner" width="100">
                                                                    </div>
                                                                    <input
                                                                        onchange='showPreview(event, "store-logo-img");'
                                                                        type="file" name="logo" id="logo"
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
                                                                        id="always_open" name="opening_hours"
                                                                        value="always-open" <?php if ($storerow > 0) {
                                                                            if ($storerow['OpeningHours'] == 'always-open') {
                                                                                echo checked;
                                                                            }
                                                                        } ?>
                                                                    onclick="document.getElementById('custome-schedule-time').style.display
                                                                    = 'none'">
                                                                    <label class="form-check-label" for="always_open">
                                                                        Always open
                                                                    </label>
                                                                </div>
                                                                <div class="form-check form-radio-btn">
                                                                    <input class="form-check-input" type="radio"
                                                                        id="custome_schedule" name="opening_hours"
                                                                        value="custome-schedule" <?php if ($storerow > 0) {
                                                                            if ($storerow['OpeningHours'] == 'custome-schedule') {
                                                                                echo checked;
                                                                            }
                                                                        } ?>
                                                                    onclick="document.getElementById('custome-schedule-time').style.display
                                                                    = 'block'">
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
                                                                        id="opening_hour_start" value=<?php if ($storerow > 0) {
                                                                            if ($storerow['OpeningHours'] == 'custome-schedule') {
                                                                                echo $storerow['openingHourStart'];
                                                                            }
                                                                        } else {
                                                                            echo "09:30";
                                                                        } ?>>
                                                                    <div class="col-1">To</div>
                                                                    <input type="time" class="form-control col-5"
                                                                        name="opening_hour_end" id="opening_hour_end"
                                                                        value="<?php if ($storerow > 0) {
                                                                            if ($storerow['OpeningHours'] == 'custome-schedule') {
                                                                                echo $storerow['openingHourEnd'];
                                                                            }
                                                                        } else {
                                                                            echo "21:00";
                                                                        } ?>">
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
                                                                    <?php if ($storerow <= 0) {
                                                                        echo "required";
                                                                    } ?>
                                                                id="name" required value="<?php if ($storerow > 0) {
                                                                    echo $storerow['storeName'];
                                                                } else {
                                                                    echo "";
                                                                } ?>">
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
                                                                    id="slogan" value="<?php if ($storerow > 0) {
                                                                        echo $storerow['Slogan'];
                                                                    } else {
                                                                        echo "";
                                                                    } ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- 
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
                                                    </div> -->

                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <label for=location class="control-label">Location
                                                                <span>*</span> </label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <div class="form-group">
                                                                <textarea name="location" id="location"
                                                                    class="form-control textarea " cols="30" rows="5"
                                                                    <?php if ($storerow <= 0) {
                                                                        echo "required";
                                                                    } ?>><?php if ($storerow > 0) {
                                                                        echo $storerow['Location'];
                                                                    } else {
                                                                        echo "";
                                                                    } ?></textarea>
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
                                                                    id="website" value="<?php if ($storerow > 0) {
                                                                        echo $storerow['Website'];
                                                                    } else {
                                                                        echo "";
                                                                    } ?>">
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
                                                                    id="mobile" <?php if ($storerow <= 0) {
                                                                        echo "required";
                                                                    } ?> value="<?php if ($storerow > 0) {
                                                                        echo $storerow['Mobile'];
                                                                    } else {
                                                                        echo "";
                                                                    } ?>">
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
                                                                    id="email" <?php if ($storerow <= 0) {
                                                                        echo "required";
                                                                    } ?> value="<?php if ($storerow > 0) {
                                                                        echo $storerow['Email'];
                                                                    } else {
                                                                        echo "";
                                                                    } ?>">
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
                                                                    required><?php if ($storerow > 0) {
                                                                        echo $storerow['Description'];
                                                                    } else {
                                                                        echo "";
                                                                    } ?></textarea>
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
                                                                    id="facebook" placeholder="Facebook" value="<?php if ($storerow > 0) {
                                                                        echo $storerow['facebook'];
                                                                    } else {
                                                                        echo "";
                                                                    } ?>">

                                                                <input type="url" class="form-control " name="twitter"
                                                                    id="twitter" placeholder="Twitter" value="<?php if ($storerow > 0) {
                                                                        echo $storerow['twitter'];
                                                                    } else {
                                                                        echo "";
                                                                    } ?>">

                                                                <input type="url" class="form-control " name="linkedin"
                                                                    id="linkedin" placeholder="Linkedin" value="<?php if ($storerow > 0) {
                                                                        echo $storerow['linkedin'];
                                                                    } else {
                                                                        echo "";
                                                                    } ?>">

                                                                <input type="url" class="form-control " name="youtube"
                                                                    id="youtube" placeholder="Youtube" value="<?php if ($storerow > 0) {
                                                                        echo $storerow['youtube'];
                                                                    } else {
                                                                        echo "";
                                                                    } ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="post-section post-contact <?php if ($storerow > 0) {
                                                        echo "d-none";
                                                    } else {
                                                        echo "d-block";
                                                    } ?>">
                                                        <div class=text-center>
                                                            <div class="form-group">
                                                                <input type="submit" value="Add Store"
                                                                    name="create-submit" class="submit-btn">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="post-section post-contact <?php if ($storerow > 0) {
                                                        echo "d-block";
                                                    } else {
                                                        echo "d-none";
                                                    } ?>">
                                                        <div class=text-center>
                                                            <div class="form-group">
                                                                <input type="submit" value="Update Store"
                                                                    name="update-submit" class="submit-btn">
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
            </p>
        </main>

        <script type="text/javascript">
            function showPreview(event, id) {
                if (event.target.files.length > 0) {
                    var src = URL.createObjectURL(event.target.files[0]);
                    var preview = document.getElementById(id);
                    preview.src = src;
                    preview.style.display = "block";
                }
            }
        </script>

        <?php
include("include/footer.php");
?>
        <script src="js/sweetalert.all.js"></script>
        <?php
        if ($_SESSION['store_form_submit'] == 'true') {
            echo '<script>
            Swal.fire({"title":"Store Added Successfully","text":"","timer":5000,"width":true,"padding":"1.1rem","showConfirmButton":false,"showCloseButton":true,"customClass":{"container":null,"popup":null,"header":null,"title":null,"closeButton":null,"icon":null,"image":null,"content":null,"input":null,"actions":null,"confirmButton":null,"cancelButton":null,"footer":null},"toast":true,"icon":"success","position":"top-end"});
         </script>';
            $_SESSION['store_form_submit']='fasle';
        }

        if ($_SESSION['store_update_form_submit'] == 'true') {
            echo '<script>
            Swal.fire({"title":"Store Updated Successfully","text":"","timer":5000,"width":true,"padding":"1.1rem","showConfirmButton":false,"showCloseButton":true,"customClass":{"container":null,"popup":null,"header":null,"title":null,"closeButton":null,"icon":null,"image":null,"content":null,"input":null,"actions":null,"confirmButton":null,"cancelButton":null,"footer":null},"toast":true,"icon":"success","position":"top-end"});
         </script>';
            $_SESSION['store_update_form_submit']='fasle';
        }
?>
        <?php
   if (isset($_POST['create-submit'])) {
       $db =$con;
       $userid =$_POST['uid'];
       $check_store = $db->query("SELECT storeUserId FROM store where storeUserId = '$userid' ");
       if (mysqli_num_rows($check_store) > 0) {
           echo '<script>
           Swal.fire({"title":"Store Already Added","text":"","timer":5000,"width":true,"padding":"1.1rem","showConfirmButton":false,"showCloseButton":true,"customClass":{"container":null,"popup":null,"header":null,"title":null,"closeButton":null,"icon":null,"image":null,"content":null,"input":null,"actions":null,"confirmButton":null,"cancelButton":null,"footer":null},"toast":true,"icon":"error","position":"top-end"});
        </script>';
       } else {
        //    $_SESSION['form_submit']='true';
           $banner = $_FILES['banner']['name'];
           move_uploaded_file(
               $_FILES['banner']['tmp_name'],
               "images/storeimages/".$_FILES['banner']['name']
           );
           $logo = $_FILES['logo']['name'];
           move_uploaded_file(
               $_FILES['logo']['tmp_name'],
               "images/storeimages/".$_FILES['logo']['name']
           );
           $openinghours =$_POST['opening_hours'];
           $openinghourstart =$_POST['opening_hour_start'];
           $openinghourend =$_POST['opening_hour_end'];
           $storename =$_POST['name'];
           $slogan =$_POST['slogan'];
           $location =$_POST['location'];
           $website =$_POST['website'];
           $mobile =$_POST['mobile'];
           $email = $_POST['email'];
           $description=$_POST['description'];
           $facebook =$_POST['facebook'];
           $twitter =$_POST['twitter'];
           $linkedin =$_POST['linkedin'];
           $youtube =$_POST['youtube'];

     //    (`id`, `user_id`, `title`, `description`, `price`, `image`, `areaid`, `subareaid`, `categoryid`, `subcategoryid`, `adtype`, `condition`, `expiredate`)
           $upadate = "UPDATE users SET storeid = $userid WHERE id = $userid";
           $db->query($upadate);
           $insertdata = "INSERT INTO `buynsell`.`store` VALUES ('', '$userid', '$banner', '$logo', '$openinghours', '$openinghourstart', '$openinghourend', '$storename','$slogan','$location','$website','$mobile','$email', '$description', '$facebook', '$twitter', '$linkedin', '$youtube')";
           $result = $db->query($insertdata);
           if ($result) {
               $_SESSION['store_form_submit']='true';
               echo '<script>
         Swal.fire({"title":"Store Updated Successfully","text":"","timer":5000,"width":true,"padding":"1.1rem","showConfirmButton":false,"showCloseButton":true,"customClass":{"container":null,"popup":null,"header":null,"title":null,"closeButton":null,"icon":null,"image":null,"content":null,"input":null,"actions":null,"confirmButton":null,"cancelButton":null,"footer":null},"toast":true,"icon":"success","position":"top-end"});
         window.location = "my-store.php";
      </script>';
           } else {
               echo '<script>
         Swal.fire({"title":"Store Not Added","text":"","timer":5000,"width":true,"padding":"1.1rem","showConfirmButton":false,"showCloseButton":true,"customClass":{"container":null,"popup":null,"header":null,"title":null,"closeButton":null,"icon":null,"image":null,"content":null,"input":null,"actions":null,"confirmButton":null,"cancelButton":null,"footer":null},"toast":true,"icon":"error","position":"top-end"});
      </script>';
           }
           $db->close();
       }
   }

?>

        <?php
   if (isset($_POST['update-submit'])) {
       $db =$con;
       $userid =$_POST['uid'];
       $banner = $_FILES['banner']['name'];
       move_uploaded_file(
           $_FILES['banner']['tmp_name'],
           "images/storeimages/".$_FILES['banner']['name']
       );
       $logo = $_FILES['logo']['name'];
       move_uploaded_file(
           $_FILES['logo']['tmp_name'],
           "images/storeimages/".$_FILES['logo']['name']
       );
       $openinghours =$_POST['opening_hours'];
       $openinghourstart =$_POST['opening_hour_start'];
       $openinghourend =$_POST['opening_hour_end'];
       $storename =$_POST['name'];
       $slogan =$_POST['slogan'];
       $location =$_POST['location'];
       $website =$_POST['website'];
       $mobile =$_POST['mobile'];
       $email = $_POST['email'];
       $description=$_POST['description'];
       $facebook =$_POST['facebook'];
       $twitter =$_POST['twitter'];
       $linkedin =$_POST['linkedin'];
       $youtube =$_POST['youtube'];

     //    (`id`, `user_id`, `title`, `description`, `price`, `image`, `areaid`, `subareaid`, `categoryid`, `subcategoryid`, `adtype`, `condition`, `expiredate`)
       $upadate = "UPDATE users SET storeid = $userid WHERE id = $userid";
       $db->query($upadate);
       $updatetdata = "UPDATE store SET StoreBanner = '$banner', StoreLogo = '$logo', OpeningHours = '$openinghours', openingHourStart = '$openinghourstart', openingHourEnd= '$openinghourend', storeName = '$storename', Slogan = '$slogan', Location = '$location', Website = '$website', Mobile = '$mobile', Email = '$email', Description = '$description', facebook = '$facebook', twitter = '$twitter', linkedin = '$linkedin', youtube = '$youtube' WHERE storeUserId = $userid";
       $result = $db->query($updatetdata);
       if ($result) {
           $_SESSION['store_update_form_submit']='true';
           echo '<script>
         Swal.fire({"title":"Store Added Successfully","text":"","timer":5000,"width":true,"padding":"1.1rem","showConfirmButton":false,"showCloseButton":true,"customClass":{"container":null,"popup":null,"header":null,"title":null,"closeButton":null,"icon":null,"image":null,"content":null,"input":null,"actions":null,"confirmButton":null,"cancelButton":null,"footer":null},"toast":true,"icon":"success","position":"top-end"});
         window.location = "my-store.php";
      </script>';
       } else {
           echo '<script>
         Swal.fire({"title":"Store Not Added","text":"","timer":5000,"width":true,"padding":"1.1rem","showConfirmButton":false,"showCloseButton":true,"customClass":{"container":null,"popup":null,"header":null,"title":null,"closeButton":null,"icon":null,"image":null,"content":null,"input":null,"actions":null,"confirmButton":null,"cancelButton":null,"footer":null},"toast":true,"icon":"error","position":"top-end"});
      </script>';
       }
       $db->close();
   }

?>


        <script src="js/jquery.min.js "></script>
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