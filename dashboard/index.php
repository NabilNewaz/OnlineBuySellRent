<?php
session_start();
if (!(isset($_SESSION['adminusername']))) {
    header("location:../admin/index.php");
}
include("header.php");
?>
<div class="ch-container">
    <div class="row">

        <?php
include("sidebar.php");
include("api/db_config.php")
?>

        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                </ul>
            </div>
            <div class=" row">
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <a data-toggle="tooltip" class="well top-block" href="product.php">
                        <i class="glyphicon glyphicon-shopping-cart yellow"></i>

                        <div>Total Products</div>
                        <div><?php 	$sql='SELECT * FROM product';
$result = $con->query($sql);
$count = mysqli_num_rows($result);
echo $count;

?></div>

                    </a>
                </div>

                <div class="col-md-3 col-sm-3 col-xs-6">
                    <a data-toggle="tooltip" class="well top-block" href="manageCategory.php">
                        <i class="glyphicon glyphicon-star green"></i>

                        <div>Category</div>
                        <div><?php 	$sql='SELECT * FROM Category';
$result = $con->query($sql);
$count = mysqli_num_rows($result);
echo $count;

?></div>

                    </a>
                </div>

                <div class="col-md-3 col-sm-3 col-xs-6">
                    <a data-toggle="tooltip" class="well top-block" href="manageSubcategory.php">
                        <i class="glyphicon glyphicon-star green"></i>

                        <div>SubCategory</div>
                        <div><?php 	$sql='SELECT * FROM subcategory';
$result = $con->query($sql);
$count = mysqli_num_rows($result);
echo $count;

?></div>
                    </a>
                </div>

                <div class="col-md-3 col-sm-3 col-xs-6">
                    <a data-toggle="tooltip" class="well top-block" href="manageAdmin.php">
                        <i class="glyphicon glyphicon-user blue"></i>

                        <div>Admin</div>
                        <div><?php 	$sql='SELECT * FROM admin';
$result = $con->query($sql);
$count = mysqli_num_rows($result);
echo $count;

?></div>
                    </a>
                </div>

                <div class="col-md-3 col-sm-3 col-xs-6">
                    <a data-toggle="tooltip" class="well top-block" href="manageUser.php">
                        <i class="glyphicon glyphicon-user blue"></i>

                        <div>User</div>
                        <div><?php 	$sql='SELECT * FROM users';
$result = $con->query($sql);
$count = mysqli_num_rows($result);
echo $count;

?></div>
                    </a>
                </div>

                <div class="col-md-3 col-sm-3 col-xs-6">
                    <a data-toggle="tooltip" class="well top-block" href="manageArea.php">
                        <i class="glyphicon glyphicon-map-marker"></i>

                        <div>Area</div>
                        <div><?php 	$sql='SELECT * FROM area';
$result = $con->query($sql);
$count = mysqli_num_rows($result);
echo $count;

?></div>
                    </a>
                </div>

                <div class="col-md-3 col-sm-3 col-xs-6">
                    <a data-toggle="tooltip" class="well top-block" href="manageSubarea.php">
                        <i class="glyphicon glyphicon-map-marker"></i>

                        <div>Subarea</div>
                        <div><?php 	$sql='SELECT * FROM subarea';
$result = $con->query($sql);
$count = mysqli_num_rows($result);
echo $count;

?></div>
                    </a>
                </div>

                <div class="col-md-3 col-sm-3 col-xs-6">
                    <a data-toggle="tooltip" class="well top-block" href="index.php">
                        <i class="glyphicon glyphicon-refresh"></i>


                        <div> &nbsp; </div>
                        <div> &nbsp </div>
                    </a>
                </div>
            </div>

            <div class="row">


            </div><!--/.fluid-container-->
            <script src="../js/sweetalert.all.js"></script>
            <?php
                if (session_status() == PHP_SESSION_ACTIVE) {
                    if ($_SESSION['adminloginstatus'] == true) {
                        echo '<script>
                        Swal.fire({"title":"Login Successful","text":"","timer":5000,"width":true,"padding":"1.1rem","showConfirmButton":false,"showCloseButton":true,"customClass":{"container":null,"popup":null,"header":null,"title":null,"closeButton":null,"icon":null,"image":null,"content":null,"input":null,"actions":null,"confirmButton":null,"cancelButton":null,"footer":null},"toast":true,"icon":"success","position":"top-end"});
                    </script>';
                        $_SESSION['adminloginstatus']=null;
                    }
                }
include("footer.php");
?>