<?php
error_reporting(0);
require "function/connection.php";
?>

<?php
session_start();
if (isset($_SESSION['username'])) {
    header("location:./");
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
    <title>Signup - Rent2SellBD</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

<body class="sticky-header" id="app">
    <?php
        include("include/header.php");
?>


    <div class="container py-5">
        <div class="myaccount-login-form">
            <div class="light-box-content">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="form-box registration-form shadow p-3">
                            <h3 class="item-title text-center">Register</h3>
                            <div class="d-flex justify-content-between py-3">
                                <div class="pr-1 w-50">
                                    <a href="" class="btn btn-block btn-primary btn-block"><i
                                            class="fab fa-facebook"></i> Signup with Facebook</a>
                                </div>
                                <div class="pl-1 w-50">
                                    <a href="" class="btn btn-block btn-danger btn-block"><i class="fab fa-google"></i>
                                        Signup with Google</a>
                                </div>
                            </div>
                            <form method="POST" action="" name="signup" id="signup" class="form-group">
                                <div class="form-group">
                                    <label for="name">Full Name</label>
                                    <input type="text" name="uname" id="uname" class="form-control"
                                        placeholder="Enter Your Full Name" required>
                                </div>

                                <div class="form-group">
                                    <label for="name">User Name</label>
                                    <input type="text" name="user_name" id="user_name" class="form-control"
                                        placeholder="Enter Your User Name" required>
                                </div>

                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" name="user_email" id="user_email" class="form-control"
                                        placeholder="Enter Your Email Address" required>
                                </div>

                                <div class="form-group">
                                    <label for="nid">NID Number</label>
                                    <input type="text" name="user_nid" id="user_nid" class="form-control"
                                        placeholder="Enter Your Email Address" required>
                                </div>

                                <div class="form-group">
                                    <label for="dob">Date Of Birth</label>
                                    <input type="date" name="user_dob" id="user_dob" class="form-control" placeholder=""
                                        required>
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="user_pass" id="user_pass" class="form-control"
                                        placeholder="Enter Your Password" required>
                                </div>

                                <div class="form-group">
                                    <label for="password-confirm">Phone Number</label>
                                    <input type="text" name="uphone" id="uphn" class="form-control"
                                        placeholder="Enter Your Phone Number" required>
                                </div>

                                <div class="form-group">
                                    <label for="referral-code">Referral Code <small class="text-info">(If you have
                                            any)</small></label>
                                    <input id="referral-code" type="text" class="form-control " name="referral_code"
                                        value="">
                                </div>

                                <div class="form-group">
                                    <label class="control-label">User Type</label>
                                    <div class="form-check form-radio-btn">
                                        <input class="form-check-input" type="radio" name="user_type" id="user_type"
                                            value="Individual" required>
                                        <label style="padding-top: 10px; padding-right:30px;"
                                            class="form-check-label">Individual</label>
                                        <span>
                                            <input class="form-check-input" type="radio" name="user_type" id="user_type"
                                                value="Business" required>
                                            <label style="padding-top: 10px;" class="form-check-label">Business or
                                                Enterprize</label></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-check form-radio-btn">
                                        <input class="form-check-input" type="checkbox" id="agree" value="agreed"
                                            name="agree">
                                        <label style="padding-top: 10px; padding-right:30px;" class="form-check-label">I
                                            agree to the Terms and Conditions of <a href="#">Rent2SellBD.com</a></label>
                                    </div>
                                </div>

                                <div class="post-section post-contact">
                                    <div class="form-group">
                                        <input type="submit" value="Register" id="sub" name="sub" class="submit-btn">
                                        <input style="background-color:#007bff;" type="reset" value="Refresh"
                                            name="refresh" id="refresh" class="submit-btn">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/sweetalert.all.js"></script>


    <?php
    include("include/footer.php");
?>

    <?php
require "function/connection.php";
if (isset($_POST['sub'])) {
    $db =$con;
    $fullname = $_POST['uname'];
    $username = $_POST['user_name'];
    $useremail = $_POST['user_email'];
    $usernid = $_POST['user_nid'];
    $userdob = $_POST['user_dob'];
    $Upass = $_POST['user_pass'];
    $uphone = $_POST['uphone'];
    $Usertype = $_POST['user_type'];
    $currentDate = date("Y-m-d h:i:s");
    $useragreement = $_POST['agree'];

    $check_email = $db->query("SELECT email FROM users where email = '$useremail' ");
    $check_username = $db->query("SELECT username FROM users where username = '$username' ");
    $check_nid = $db->query("SELECT nid FROM users where nid = '$usernid' ");

    if (mysqli_num_rows($check_email) > 0 || mysqli_num_rows($check_username) > 0 || mysqli_num_rows($check_nid) > 0) {
        if (mysqli_num_rows($check_email) > 0 && mysqli_num_rows($check_username) > 0 && mysqli_num_rows($check_nid) > 0) {
            echo '<script>
                     Swal.fire({"title":"User Already Exists","text":"","timer":5000,"width":true,"padding":"1.1rem","showConfirmButton":false,"showCloseButton":true,"customClass":{"container":null,"popup":null,"header":null,"title":null,"closeButton":null,"icon":null,"image":null,"content":null,"input":null,"actions":null,"confirmButton":null,"cancelButton":null,"footer":null},"toast":true,"icon":"warning","position":"top-end"});
                  </script>';
        } elseif (mysqli_num_rows($check_username) > 0) {
            echo '<script>
                     Swal.fire({"title":"UserName Already Used","text":"","timer":5000,"width":true,"padding":"1.1rem","showConfirmButton":false,"showCloseButton":true,"customClass":{"container":null,"popup":null,"header":null,"title":null,"closeButton":null,"icon":null,"image":null,"content":null,"input":null,"actions":null,"confirmButton":null,"cancelButton":null,"footer":null},"toast":true,"icon":"warning","position":"top-end"});
                  </script>';
        } elseif (mysqli_num_rows($check_nid) > 0) {
            echo '<script>
                     Swal.fire({"title":"NID Already Used","text":"","timer":5000,"width":true,"padding":"1.1rem","showConfirmButton":false,"showCloseButton":true,"customClass":{"container":null,"popup":null,"header":null,"title":null,"closeButton":null,"icon":null,"image":null,"content":null,"input":null,"actions":null,"confirmButton":null,"cancelButton":null,"footer":null},"toast":true,"icon":"warning","position":"top-end"});
                  </script>';
        } elseif (mysqli_num_rows($check_email) > 0) {
            echo '<script>
                     Swal.fire({"title":"Email Already Exists","text":"","timer":5000,"width":true,"padding":"1.1rem","showConfirmButton":false,"showCloseButton":true,"customClass":{"container":null,"popup":null,"header":null,"title":null,"closeButton":null,"icon":null,"image":null,"content":null,"input":null,"actions":null,"confirmButton":null,"cancelButton":null,"footer":null},"toast":true,"icon":"warning","position":"top-end"});
                  </script>';
        }
    } else {
        if ($fullname=="" || $username=="" || $useremail=="" || $Upass=="" || $uphone=="" || $Usertype=="" || $useragreement=="") {
            header("location: usersingup.php");
            exit;
        }
        $insertQuery = "INSERT INTO `buynsell`.`users` VALUES ('','$fullname','$username','$useremail','$Upass','$uphone', '$Usertype','$currentDate', '', '','$useragreement','$usernid','$userdob')";
        $result = $db->query($insertQuery);
        if ($result) {
            $select_query = "select * from users where (username = '$username' or email = '$useremail') and password = '$Upass'";
            $result = $db->query($select_query);
            $row = $result->fetch_array();
            session_start();
            $_SESSION['username']=$row['username'];
            $_SESSION['id']=$row['id'];
            $_SESSION['email']=$row['email'];
            $_SESSION['name']=$row['name'];
            $_SESSION['phone']=$row['phone'];
            $_SESSION['status']='success_signup';
            $URL="./login.php";
            echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
            echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
        } else {
            echo '<script>
                     Swal.fire({"title":"Registered Unsuccessful","text":"","timer":5000,"width":true,"padding":"1.1rem","showConfirmButton":false,"showCloseButton":true,"customClass":{"container":null,"popup":null,"header":null,"title":null,"closeButton":null,"icon":null,"image":null,"content":null,"input":null,"actions":null,"confirmButton":null,"cancelButton":null,"footer":null},"toast":true,"icon":"warning","position":"top-end"});
                  </script>';
        }
        $result->free();
    }
    $db->close();
}
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