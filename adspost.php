<?php
error_reporting(0);
require "function/connection.php";
$catagories = $con->query("SELECT * FROM category");
$area = $con->query("SELECT * FROM area");
//start user session
session_start();
$sessionid = $_SESSION['id'];
$isStore = $con->query("SELECT * FROM users where id = $sessionid");
$rowstore = mysqli_fetch_array($isStore);
if (!(isset($_SESSION['username']))) {
    header("location: login.php?referer=adspost");
}
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Post Ad - Rent2SellBD</title>

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


    <style>
        .imageupload {
            margin: 20px 0;
        }
    </style>


</head>

<body class="sticky-header" id="app">
    <?php
        require("function/functions.php");
include("function/connection.php");
include("function/area.php");
include("function/function.php");
?>

    <?php
   include("include/header.php");
?>

    <?php
    include("include/search.php");

?>
    <div class="container">
        </br>
        <?php
    include("include/sidebar.php");
?>

        <br>
        <div class="col-xl-9 col-lg-8">
            <div class="flex-heading-layout1">
                <div class="heading-layout2">
                    <h2 class="heading-title">Post Your Ad</h2>
                </div>
            </div>

            <div style="padding: 1.875rem; margin-bottom: 50px;" class="post-ad-box-layout1 bg-accent">
                <div class="post-ad-form light-box-content">
                    <form id="adpost" action="" method="post" enctype="multipart/form-data" class="form-group">
                        <!--Hidden input for user id-->
                        <input class="form-control"
                            value="<?php echo $_SESSION['id']; ?>"
                            type="hidden" name="uid" id="uid">
                        <div class="post-section post-category">
                            <div class="post-ad-title">
                                <i class="fas fa-tags"></i>
                                <h3 class="item-title">Select Category</h3>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <label class="control-label">Category <span>*</span>
                                    </label>
                                </div>
                                <div class="col-sm-9">
                                    <div class="form-group">
                                        <select class="form-control" name="category" id="category"
                                            onchange="subCat(this.value);" class="form-control select-box " required>
                                            <option disabled selected>Select Category</option>
                                            <?php
                                                 while ($row = mysqli_fetch_array($catagories)) { ?>
                                            <option
                                                value="<?php echo $row["id"];?>">
                                                <?php echo $row["categoryname"];?>
                                            </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <label class="control-label">Sub Category <span>*</span>
                                    </label>
                                </div>
                                <div class="col-sm-9">
                                    <div class="form-group">
                                        <select class="form-control select-box" name="subcategory" id="subcategory"
                                            required>
                                            <script>
                                                function subCat(id) {
                                                    $.ajax({
                                                        url: `getSubcat.php?id=${id}`,
                                                        type: "POST",
                                                        data: {
                                                            catId: id
                                                        },
                                                        success: function(result) {
                                                            $('#subcategory').html(result);
                                                        }
                                                    });
                                                };
                                            </script>
                                            <option disabled selected>Select Sub Category</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-3">
                                    <label class="control-label">Types Of Ads <span>*</span>
                                    </label>
                                </div>
                                <div class="col-sm-9">
                                    <div class="form-group">
                                        <select class="form-control" type="radio" name="type" id="type"
                                            class="form-control select-box " required>
                                            <option disabled selected>Select Types</option>
                                            <option value="buy">Buy</option>
                                            <option value="sell">Sell</option>
                                            <option value="rental">Rental</option>
                                            <option value="exchange">Exchange</option>
                                            <option value="services">Services</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-section post-information">
                            <div class="post-ad-title">
                                <i class="fas fa-folder-open"></i>
                                <h3 class="item-title">Product Information</h3>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <label for="title" class="control-label">Title <span>*</span> </label>
                                </div>
                                <div class="col-sm-9">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="title" id="title" required
                                            value="">
                                    </div>
                                </div>
                            </div>
                            <div id="except_book_and_magazin1">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label for="size" class="control-label">Size </label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <input type="text" class="form-control " name="size" id="size" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label for="color" class="control-label">Color </label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <input type="text" class="form-control " name="color" id="color" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label for="pricetype" class="control-label">Price Type <span>*</span> </label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <select class="form-control select-box " name="pricetype" id="pricetype"
                                                required>
                                                <option disabled>Select Price Type</option>
                                                <option value="Fixed">Fixed</option>
                                                <option value="Negotiable">Negotiable</option>
                                                <option value="On Call">On Call</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label for="price" class="control-label">Price <span>*</span> </label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="price" id="price" required
                                                min="0" step="1" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label for="discount" class="control-label">Discount [0 to 99]% </label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <input type="number" class="form-control " name="discount" id="discount"
                                                min="0" max="99" step="1" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label class="control-label">Condition</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <div class="form-check form-radio-btn">
                                                <input class="form-check-input" type="radio" value="New"
                                                    name="condition" id="condition" value="new">
                                                <label class="form-check-label" for="condition1">New</label>
                                            </div>
                                            <div class="form-check form-radio-btn">
                                                <input class="form-check-input" type="radio" value="Used"
                                                    name="condition" id="condition">
                                                <label class="form-check-label" for="condition2">Used</label>
                                            </div>
                                            <div class="form-check form-radio-btn" id="car_and_vehicle_reconditioned"
                                                style="display: none">
                                                <input class="form-check-input" type="radio" name="condition"
                                                    id="condition" value="reconditioned">
                                                <label class="form-check-label" for="condition3">Reconditioned</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="except_book_and_magazin2">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label for="brand" class="control-label">Brand </label>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="form-group">
                                                <input type="text" class="form-control " name="brand" id="brand"
                                                    value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label class="control-label">Authenticity</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <div class="form-check form-radio-btn">
                                                <input class="form-check-input" type="radio" id="authenticity1"
                                                    name="authenticity" value="original">
                                                <label class="form-check-label" for="exampleRadios3">Original</label>
                                            </div>
                                            <div class="form-check form-radio-btn">
                                                <input class="form-check-input" type="radio" id="authenticity2"
                                                    name="authenticity" value="copy">
                                                <label class="form-check-label" for="authenticity2">Copy</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <label for=description class="control-label">Description <span>*</span> </label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <textarea name="description" id="description" class="form-control textarea "
                                                cols="30" rows="5" required></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post-section post-features">
                                <div class="post-ad-title">
                                    <i class="fas fa-list-ul"></i>
                                    <h3 class="item-title">Features</h3>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label for=features class="control-label">Features List </label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <textarea name="features" id="features" class="form-control textarea "
                                                cols="30" rows="5"></textarea>
                                            <div class="help-text">
                                                <span>Write a feature in each line eg.</span>
                                                <span>Feature 1</span>
                                                <span>Feature 2</span>
                                                <span>....</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="post-section post-img">
                                <div class="post-ad-title">
                                    <i class="far fa-image"></i>
                                    <h3 class="item-title">Images</h3>
                                </div>
                                <div class="form-group">
                                    <div class="img-gallery">
                                        <div class="row justify-content-center gutters-3">
                                            <div class="col-5 col-md-3 col-lg-2 py-3">
                                                <div class="form-input">
                                                    <label for="image_0" class="bg-light text-center m-0">
                                                        <div
                                                            class="preview d-flex justify-content-center align-items-center">
                                                            <img id="image_preview_0">
                                                        </div>
                                                        <div class="title flex text-muted">
                                                            <div><i class="fas fa-image fa-2x"></i></div>
                                                            <div class="small"> Add a image</div>
                                                        </div>
                                                    </label>
                                                    <input type="file" name="image_0" id="image_0" accept="image/*"
                                                        onchange='showPreview(event, "image_preview_0");'>
                                                </div>
                                            </div>
                                            <div class="col-5 col-md-3 col-lg-2 py-3">
                                                <div class="form-input">
                                                    <label for="image_1" class="bg-light text-center m-0">
                                                        <div
                                                            class="preview d-flex justify-content-center align-items-center">
                                                            <img id="image_preview_1">
                                                        </div>
                                                        <div class="title flex text-muted">
                                                            <div><i class="fas fa-image fa-2x"></i></div>
                                                            <div class="small"> Add a image</div>
                                                        </div>
                                                    </label>
                                                    <input type="file" name="image_1" id="image_1" accept="image/*"
                                                        onchange='showPreview(event, "image_preview_1");'>
                                                </div>
                                            </div>
                                            <div class="col-5 col-md-3 col-lg-2 py-3">
                                                <div class="form-input">
                                                    <label for="image_2" class="bg-light text-center m-0">
                                                        <div
                                                            class="preview d-flex justify-content-center align-items-center">
                                                            <img id="image_preview_2">
                                                        </div>
                                                        <div class="title flex text-muted">
                                                            <div><i class="fas fa-image fa-2x"></i></div>
                                                            <div class="small"> Add a image</div>
                                                        </div>
                                                    </label>
                                                    <input type="file" name="image_2" id="image_2" accept="image/*"
                                                        onchange='showPreview(event, "image_preview_2");'>
                                                </div>
                                            </div>
                                            <div class="col-5 col-md-3 col-lg-2 py-3">
                                                <div class="form-input">
                                                    <label for="image_3" class="bg-light text-center m-0">
                                                        <div
                                                            class="preview d-flex justify-content-center align-items-center">
                                                            <img id="image_preview_3">
                                                        </div>
                                                        <div class="title flex text-muted">
                                                            <div><i class="fas fa-image fa-2x"></i></div>
                                                            <div class="small"> Add a image</div>
                                                        </div>
                                                    </label>
                                                    <input type="file" name="image_3" id="image_3" accept="image/*"
                                                        onchange='showPreview(event, "image_preview_3");'>
                                                </div>
                                            </div>
                                            <div class="col-5 col-md-3 col-lg-2 py-3">
                                                <div class="form-input">
                                                    <label for="image_4" class="bg-light text-center m-0">
                                                        <div
                                                            class="preview d-flex justify-content-center align-items-center">
                                                            <img id="image_preview_4">
                                                        </div>
                                                        <div class="title flex text-muted">
                                                            <div><i class="fas fa-image fa-2x"></i></div>
                                                            <div class="small"> Add a image</div>
                                                        </div>
                                                    </label>
                                                    <input type="file" name="image_4" id="image_4" accept="image/*"
                                                        onchange='showPreview(event, "image_preview_4");'>
                                                </div>
                                            </div>
                                        </div>
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
                                    </div>
                                </div>
                            </div>

                            <div class="post-section post-contact">
                                <div class="post-ad-title">
                                    <i class="fas fa-user"></i>
                                    <h3 class="item-title">Contact Details</h3>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label for="country" class="control-label">Location <span>*</span> </label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <select onchange="subArea(this.value);" class="form-control select-box "
                                                name="area" id="area" required>
                                                <option disabled selected>Select Division</option>
                                                <?php
                                                 while ($row = mysqli_fetch_array($area)) { ?>
                                                <option
                                                    value="<?php echo $row["id"];?>">
                                                    <?php echo $row["areaname"];?>
                                                </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label for="city" class="control-label">Subarea</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <select class="form-control select-box" name="subarea" id="subarea"
                                                required>
                                                <script>
                                                    function subArea(id) {
                                                        $.ajax({
                                                            url: `getSubarea.php?id=${id}`,
                                                            type: "POST",
                                                            data: {
                                                                subId: id
                                                            },
                                                            success: function(result) {
                                                                $('#subarea').html(result);
                                                            }
                                                        });
                                                    };
                                                </script>
                                                <option disabled selected>Select Sub Area</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <label for=location class="control-label">Location <span>*</span> </label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <textarea name="location" id="location" class="form-control textarea "
                                                cols="30" rows="5" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label for="phone" class="control-label">Phone <span>*</span> </label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <input type="tel" class="form-control " name="phone" id="phone" required
                                                value="<?php echo $_SESSION['phone']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label for="email" class="control-label">Email <span>*</span> </label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <input type="email" class="form-control " name="email" id="email" required
                                                value="<?php echo $_SESSION['email']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label for="whatsapp" class="control-label">Whatsapp Number </label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <input type="tel" class="form-control " name="whatsapp" id="whatsapp"
                                                value="<?php echo $_SESSION['phone']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label for="zipcode" class="control-label">Zip Code
                                        </label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <input type="text" class="form-control " name="zipcode" id="zipcode"
                                                maxlength="4" minlength="4" value="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row <?php if ($rowstore['storeid'] == null) {
                                    echo 'd-none';
                                } else {
                                    echo '';
                                } ?>">
                                    <div class="col-sm-3">
                                        <label class="control-label">Publish Ads As <span>*</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <select class="form-control" type="radio" name="publishtype"
                                                id="publishtype" class="form-control select-box " required>
                                                <option disabled <?php if ($rowstore['storeid'] == null) {
                                                    echo '';
                                                } else {
                                                    echo 'selected';
                                                } ?> selected>Select Types</option>
                                                <option <?php if ($rowstore['storeid'] == null) {
                                                    echo 'selected';
                                                } else {
                                                    echo '';
                                                } ?> value="individual">Individual</option>
                                                <option value="store">Store</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input class="form-control"
                                value="<?php echo $rowstore['storeid']; ?>"
                                type="hidden" name="storeid" id="storeid">
                            <div class="post-section post-contact">
                                <div class=text-center>
                                    <div class="form-group">
                                        <input type="submit" value="Submit" name="submit" class="submit-btn">
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="js/jquery.min.js "></script>
    <script src="js/bootstrap.min.js "></script>
    <script src="js/bootstrap-imageupload.min.js"></script>
    <script src="js/sweetalert.all.js"></script>


    <script>
        var $imageupload = $('.imageupload');
        $imageupload.imageupload();
    </script>

    <?php
   if (isset($_POST['submit'])) {
       $db =$con;
       $userid =$_POST['uid'];
       $areaid =$_POST['area'];
       $subareaid =$_POST['subarea'];
       $categoryid =$_POST['category'];
       $subcategoryid =$_POST['subcategory'];
       $title =$_POST['title'];
       $size =$_POST['size'];
       $color =$_POST['color'];
       $description=$_POST['description'];
       $type =$_POST['type'];
       $condition =$_POST['condition'];
       $brand =$_POST['brand'];
       $pricetype =$_POST['pricetype'];
       $authenticity =$_POST['authenticity'];
       $publishtype =$_POST['publishtype'];
       $discount =$_POST['discount'];
       $phone =$_POST['phone'];
       $email =$_POST['email'];
       $wpnumber =$_POST['whatsapp'];
       $zipcode =$_POST['zipcode'];
       $location =$_POST['location'];
       $storeid =$_POST['storeid'];
       $featurelist=$_POST['features'];
       $date = date("y-m-d h:i:s");
       $price =$_POST['price'];
       $image0 = $_FILES['image_0']['name'];
       move_uploaded_file(
           $_FILES['image_0']['tmp_name'],
           "images/adsimages/".$_FILES['image_0']['name']
       );
       $image1 = $_FILES['image_1']['name'];
       move_uploaded_file(
           $_FILES['image_1']['tmp_name'],
           "images/adsimages/".$_FILES['image_1']['name']
       );
       $image2 = $_FILES['image_2']['name'];
       move_uploaded_file(
           $_FILES['image_2']['tmp_name'],
           "images/adsimages/".$_FILES['image_2']['name']
       );
       $image3 = $_FILES['image_3']['name'];
       move_uploaded_file(
           $_FILES['image_3']['tmp_name'],
           "images/adsimages/".$_FILES['image_3']['name']
       );
       $image4 = $_FILES['image_4']['name'];
       move_uploaded_file(
           $_FILES['image_4']['tmp_name'],
           "images/adsimages/".$_FILES['image_4']['name']
       );

    //    (`id`, `user_id`, `title`, `description`, `price`, `image`, `areaid`, `subareaid`, `categoryid`, `subcategoryid`, `adtype`, `condition`, `expiredate`)

       $insertdata = "INSERT INTO `buynsell`.`product` VALUES ('', '$userid', '$title', ' $description', '$featurelist', '$price', '$pricetype', '$discount','$image0','$image1','$image2','$image3','$image4', '$areaid', ' $subareaid', '$location', '$categoryid', '$subcategoryid', '$size', '$color','$type', '$condition','$brand','$authenticity','$publishtype', '$storeid','$phone','$email','$wpnumber','$zipcode','','','$date','')";
       $result = $db->query($insertdata);
       if ($result) {
           echo '<script>
        Swal.fire({"title":"Post Added Successfully","text":"","timer":5000,"width":true,"padding":"1.1rem","showConfirmButton":false,"showCloseButton":true,"customClass":{"container":null,"popup":null,"header":null,"title":null,"closeButton":null,"icon":null,"image":null,"content":null,"input":null,"actions":null,"confirmButton":null,"cancelButton":null,"footer":null},"toast":true,"icon":"success","position":"top-end"});
     </script>';
       } else {
           echo '<script>
        Swal.fire({"title":"Post Not Added","text":"","timer":5000,"width":true,"padding":"1.1rem","showConfirmButton":false,"showCloseButton":true,"customClass":{"container":null,"popup":null,"header":null,"title":null,"closeButton":null,"icon":null,"image":null,"content":null,"input":null,"actions":null,"confirmButton":null,"cancelButton":null,"footer":null},"toast":true,"icon":"error","position":"top-end"});
     </script>';
       }
       $db->close();
   }

?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js "></script>
    <script>
        //start jQuery
        // $(document).ready(function() {
        //     //disable district & area selectbox
        //     $("#subarea").attr("disabled", "disabled");

        //     //change or populate value in district when select divisions value
        //     $("#area").change(function() {
        //         //get value from division select box & put in a variable
        //         var area = $(this).val();
        //         //if division value not -1 then show subarea
        //         if (area != "-1") {
        //             $("#subarea").removeAttr("disabled");

        //             //call php file using post() method
        //             $.post("function/functions.php", {
        //                     action: "populateSubarea",
        //                     areaID: area
        //                 },
        //                 function(subareaData) {
        //                     $("#subarea").html(subareaData);

        //                     /*var divisionName = "<h3>"+$("option:selected").html()+"</h3>";
        //                     $("#output").html(divisionName + districtData);*/
        //                 }); //end post() method for district populating in selectbox


        //         } //end if(-1)
        //         else {
        //             $("#subarea").attr("disabled", "disabled");
        //             $("#subarea").val("-1");
        //         }

        //     }); //end change() function for division selectbox


        // //----for Category-----//
        // $("#subcategory").attr("disabled", "disabled");
        // $("#category").change(function() {
        //     alert("hello");

        //     //get value from division select box & put in a variable
        //     var category = $(this).val();
        //     //if division value not -1 then show subarea
        //     if (category != "-1") {
        //         $("#subcategory").removeAttr("disabled");

        //         //call php file using post() method
        //         $.post("function/functions.php", {
        //                 action: "populateSubcategory",
        //                 categoryID: category
        //             },
        //             function(subcategoryData) {
        //                 $("#subcategory").html(subcategoryData);

        //                 /*var divisionName = "<h3>"+$("option:selected").html()+"</h3>";
        //                 $("#output").html(divisionName + districtData);*/
        //             }); //end post() method for district populating in selectbox


        //     } //end if(-1)
        //     else {
        //         $("#subcategory").attr("disabled", "disabled");
        //         $("#subcategory").val("-1");
        //     }

        // });
        ; //end jQuery
    </script>


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
    </div>
    <?php
include("include/footer.php");
?>

</body>

</html>