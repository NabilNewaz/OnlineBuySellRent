<?php
error_reporting(0);
//start user session
session_start();
if (isset($_SESSION['username'])) {
    header("location:./");
}
// error_reporting(E_ALL ^ E_NOTICE);
// error_reporting(0);
/*?><?php
session_start();
require "function/connection.php";
if(isset($_POST['singin'])){
    $username = filter_var($_POST['user_name'], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST['user_pass'], FILTER_SANITIZE_STRING);
    //$password = sha1($password);
    $selectQuery = "select * from users where username = '$username' and password = '$password'";
    $result = $con->query($selectQuery);
    //$row = $result->fetch_array();
    //echo $row['firstname'];
    //echo '<br>';
    //echo $row['password'];

    $recordsFound = $result->num_rows;
    if($recordsFound == 1){
        $row = $result->fetch_array();
        $_SESSION['usersloggin'] = true;
        $_SESSION['usersname']=$row['username'];
        $_SESSION['usersid']=$row['id'];
        header("location: adspost.php");

        }
    else {
        $_SESSION['usersloggin'] = false;
        }


    }
?><?php */?>
<?php
//session_start();

if (isset($_POST['singin'])) {
    require "function/connection.php";

    $uname = $_POST['user_name'];
    $upass = $_POST['user_pass'];

    $select_query = "select * from users where (username = '$uname' or email = '$uname') and password = '$upass'";
    $result = $con->query($select_query);
    $row = $result->fetch_array();

    if (mysqli_num_rows($result)!=1) {
        $errorlogin =  true;
    } else {
        // session variable define for user.....
        $date = date("y-m-d h:i:s");
        $user_id = $row['id'];
        $con->query("UPDATE users SET lastlogindate = '$date' WHERE id = '$user_id'");
        session_start();
        $_SESSION=$row;
        // $_SESSION['id']=$row['id'];
        // $_SESSION['email']=$row['email'];
        // $_SESSION['name']=$row['name'];
        // $_SESSION['phone']=$row['phone'];
        $_SESSION['status']='success';

        if (isset($_GET['referer'])) {
            header('location:'.$_GET["referer"].'.php');
            exit();
        } else {
            header("location:./");
            exit();
        }
    }
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
    <title>Login - Rent2SellBD</title>
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
                        <div class="form-box login-form shadow p-3">
                            <h3 class="item-title text-center">Login</h3>
                            <div class="d-flex justify-content-between py-3">
                                <div class="pr-1 w-50">
                                    <a href="" class="btn btn-block btn-primary btn-block"><i
                                            class="fab fa-facebook"></i> Login with Facebook</a>
                                </div>
                                <div class="pl-1 w-50">
                                    <a href="" class="btn btn-block btn-danger btn-block"><i class="fab fa-google"></i>
                                        Login with Google</a>
                                </div>
                            </div>
                            <form method="POST" action="" name="signup">
                                <div class="form-group">
                                    <label for="email">User Name or Email :</label>
                                    <input type="text" name="user_name" id="user_name" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="passsword">Password</label>
                                    <input type="password" name="user_pass" id="user_pass" class="form-control"
                                        required>
                                </div>

                                <div class="form-group d-flex">
                                    <div class="post-section post-contact">
                                        <div class=text-center>
                                            <div class="form-group">
                                                <input type="submit" value="Login" name="singin" id="singin"
                                                    class="submit-btn">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-check form-check-box">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                        <label for="check-password">Remember Me</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <a class="forgot-password" href="password/reset.html">
                                        Forgot Your Password?
                                    </a>
                                </div>
                            </form>

                            <h3 class="text-center bg-light">OR</h3>
                            <div class="">
                                <a class="btn btn-block btn-info" href="usersingup.php">Sign Up</a>
                            </div>
                        </div>
                    </div>
                </div>
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
    <script src="js/sweetalert.all.js"></script>

    <?php
    if ($errorlogin == true) {
        if ((!isset($_SESSION['status']))) {
            echo '<script>
                Swal.fire({"title":"Wrong Credentials ","text":"","timer":6000,"width":true,"padding":"1.1rem","showConfirmButton":false,"showCloseButton":true,"customClass":{"container":null,"popup":null,"header":null,"title":null,"closeButton":null,"icon":null,"image":null,"content":null,"input":null,"actions":null,"confirmButton":null,"cancelButton":null,"footer":null},"toast":true,"icon":"error","position":"top-end"});
            </script>';
            // $errorlogin == flase;
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