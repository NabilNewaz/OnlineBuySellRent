<?php
        include("function/connection.php");
        ?>
<div class="row">
    <div class="col-xl-3 col-lg-4 sidebar-break-md sidebar-widget-area d-none d-md-block" id="accordion">
        <div class="widget-bottom-margin-md widget-accordian widget-filter">
            <h3 class="widget-bg-title">Filter</h3>
            <?php
                if (isset($_GET["keyword"])) {
                    $searchkeyword = $_GET['keyword'];
                } else {
                    $searchkeyword = '';
                }
        ?>
            <form action="searchresult.php" method="get">
                <div class="accordion-box">
                    <div class="card filter-type filter-item-list">
                        <div class="card-header">
                            <a class="parent-list" role="button" data-toggle="collapse" href="#collapseOne"
                                aria-expanded="true">
                                Type
                            </a>
                        </div>
                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                            <div class="card-body">
                                <div class="filter-type-content">
                                    <ul>
                                        <li class="form-check">
                                            <input class="form-check-input" type="radio" name="adtype" id="adtype-0"
                                                value="buy">
                                            <label class="form-check-label" for="adtype-0">Buy</label>
                                        </li>
                                        <li class="form-check">
                                            <input class="form-check-input" type="radio" name="adtype" id="adtype-1"
                                                value="sell">
                                            <label class="form-check-label" for="adtype-1">Sell</label>
                                        </li>
                                        <li class="form-check">
                                            <input class="form-check-input" type="radio" name="adtype" id="adtype-2"
                                                value="exchange">
                                            <label class="form-check-label" for="adtype-2">Exchange</label>
                                        </li>
                                        <li class="form-check">
                                            <input class="form-check-input" type="radio" name="adtype" id="adtype-4"
                                                value="rental">
                                            <label class="form-check-label" for="adtype-4">Rental</label>
                                        </li>
                                        <li class="form-check">
                                            <input class="form-check-input" type="radio" name="adtype" id="adtype-6"
                                                value="services">
                                            <label class="form-check-label" for="adtype-6">Services</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="border-bottom:0.0625rem solid #ced4da;"
                        class="card filter-price-range filter-item-list multi-accordion">
                        <div class="card-header">
                            <a class="parent-list" role="button" data-toggle="collapse" href="#collapseFour"
                                aria-expanded="true">
                                Price Range
                            </a>
                        </div>
                        <div id="collapseFour" class="collapse show" data-parent="#accordion">
                            <div class="card-body">
                                <div class="price-range-content">
                                    <div class="row">
                                        <div class="col-lg-6 form-group">
                                            <input type="number" name="price-min" class="form-control" placeholder="min"
                                                value="">
                                        </div>
                                        <div class="col-lg-6 form-group">
                                            <input type="number" name="price-max" class="form-control" placeholder="max"
                                                value="">
                                        </div>
                                        <div class="col-12 form-group">
                                            <div class="d-flex justify-content-between">
                                                <button class="filter-btn" type="submit">Apply Filter</button>
                                                <span class="px-2"></span>
                                                <a class="btn btn-outline-secondary" style="padding-top: 11px"
                                                    href="all-ads.php">Reset</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input hidden type="hidden" name="keyword" id="keyword"
                        value="<?php echo $searchkeyword ?>">
                    <div class="card filter-category multi-accordion filter-item-list">
                        <div class="card-header">
                            <a class="parent-list" role="button" data-toggle="collapse" href="#collapseTwo"
                                aria-expanded="true">
                                Category
                            </a>
                        </div>
                        <div id="collapseTwo" class="collapse show" data-parent="#accordion">
                            <div class="card-body">
                                <div class="multi-accordion-content" id="accordion2">
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="parent-list collapsed" role="button" data-toggle="collapse"
                                                href="#collapse-0" aria-expanded="false">
                                                <img src="images/161500530163IBU.png" alt="category">
                                                <?php
                                                $getcat=mysqli_query($con, "select * from category where id='1'");
        $catrow=mysqli_fetch_array($getcat);
        $totalcatadcount=mysqli_num_rows(mysqli_query($con, "select * from product where categoryid='".$catrow['id']."'"));
        echo "".$catrow['categoryname']." (".$totalcatadcount.")";
        ?>
                                            </a>
                                        </div>
                                        <div id="collapse-0" class="collapse" data-parent="#accordion2">
                                            <div class="card-body">
                                                <ul class="sub-list">

                                                    <?php
        $subcatagory=mysqli_query($con, "select * from subcategory where categoryid = '1'") or die("eRROR");
        while ($row=mysqli_fetch_array($subcatagory)) {
            $totaladcount=mysqli_num_rows(mysqli_query($con, "select * from product where subcategoryid='".$row['id']."'"));
            echo "<li><a href='catWiseItems?sub_category=".$row['id']."'>".$row['subcategoryname']."
                                                    (".$totaladcount.")</a></li>";
        } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="parent-list collapsed" role="button" data-toggle="collapse"
                                                href="#collapse-1" aria-expanded="false">
                                                <img src="images/1615003721M4sRG.png" alt="category">
                                                <?php
                                                $getcat=mysqli_query($con, "select * from category where id='2'");
        $catrow=mysqli_fetch_array($getcat);
        $totalcatadcount=mysqli_num_rows(mysqli_query($con, "select * from product where categoryid='".$catrow['id']."'"));
        echo "".$catrow['categoryname']." (".$totalcatadcount.")";
        ?>
                                            </a>
                                        </div>
                                        <div id="collapse-1" class="collapse" data-parent="#accordion2">
                                            <div class="card-body">
                                                <ul class="sub-list">
                                                    <?php
                                                $subcatagory=mysqli_query($con, "select * from subcategory where categoryid = '2'") or die("eRROR");
        while ($row=mysqli_fetch_array($subcatagory)) {
            $totaladcount=mysqli_num_rows(mysqli_query($con, "select * from product where subcategoryid='".$row['id']."'"));
            echo "<li><a href='catWiseItems?sub_category=".$row['id']."'>".$row['subcategoryname']."
                                                    (".$totaladcount.")</a></li>";
        } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="parent-list collapsed" role="button" data-toggle="collapse"
                                                href="#collapse-2" aria-expanded="false">
                                                <img src="images/1615003873JRusZ.png" alt="category">
                                                <?php
                                                $getcat=mysqli_query($con, "select * from category where id='3'");
        $catrow=mysqli_fetch_array($getcat);
        $totalcatadcount=mysqli_num_rows(mysqli_query($con, "select * from product where categoryid='".$catrow['id']."'"));
        echo "".$catrow['categoryname']." (".$totalcatadcount.")";
        ?>
                                            </a>
                                        </div>
                                        <div id="collapse-2" class="collapse" data-parent="#accordion2">
                                            <div class="card-body">
                                                <ul class="sub-list">
                                                    <?php
                                                $subcatagory=mysqli_query($con, "select * from subcategory where categoryid = '3'") or die("eRROR");
        while ($row=mysqli_fetch_array($subcatagory)) {
            $totaladcount=mysqli_num_rows(mysqli_query($con, "select * from product where subcategoryid='".$row['id']."'"));
            echo "<li><a href='catWiseItems?sub_category=".$row['id']."'>".$row['subcategoryname']."
                                                    (".$totaladcount.")</a></li>";
        } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="parent-list collapsed" role="button" data-toggle="collapse"
                                                href="#collapse-3" aria-expanded="false">
                                                <img src="images/1615012728vRLMv.png" alt="category">
                                                <?php
                                                $getcat=mysqli_query($con, "select * from category where id='4'");
        $catrow=mysqli_fetch_array($getcat);
        $totalcatadcount=mysqli_num_rows(mysqli_query($con, "select * from product where categoryid='".$catrow['id']."'"));
        echo "".$catrow['categoryname']." (".$totalcatadcount.")";
        ?>
                                            </a>
                                        </div>
                                        <div id="collapse-3" class="collapse" data-parent="#accordion2">
                                            <div class="card-body">
                                                <ul class="sub-list">
                                                    <?php
                                                $subcatagory=mysqli_query($con, "select * from subcategory where categoryid = '4'") or die("eRROR");
        while ($row=mysqli_fetch_array($subcatagory)) {
            $totaladcount=mysqli_num_rows(mysqli_query($con, "select * from product where subcategoryid='".$row['id']."'"));
            echo "<li><a href='catWiseItems?sub_category=".$row['id']."'>".$row['subcategoryname']."
                                                    (".$totaladcount.")</a></li>";
        } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="parent-list collapsed" role="button" data-toggle="collapse"
                                                href="#collapse-4" aria-expanded="false">
                                                <img src="images/16150053460Qclp.png" alt="category">
                                                <?php
                                                $getcat=mysqli_query($con, "select * from category where id='5'");
        $catrow=mysqli_fetch_array($getcat);
        $totalcatadcount=mysqli_num_rows(mysqli_query($con, "select * from product where categoryid='".$catrow['id']."'"));
        echo "".$catrow['categoryname']." (".$totalcatadcount.")";
        ?>
                                            </a>
                                        </div>
                                        <div id="collapse-4" class="collapse" data-parent="#accordion2">
                                            <div class="card-body">
                                                <ul class="sub-list">
                                                    <?php
                                                $subcatagory=mysqli_query($con, "select * from subcategory where categoryid = '5'") or die("eRROR");
        while ($row=mysqli_fetch_array($subcatagory)) {
            $totaladcount=mysqli_num_rows(mysqli_query($con, "select * from product where subcategoryid='".$row['id']."'"));
            echo "<li><a href='catWiseItems?sub_category=".$row['id']."'>".$row['subcategoryname']."
                                                    (".$totaladcount.")</a></li>";
        } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="parent-list collapsed" role="button" data-toggle="collapse"
                                                href="#collapse-6" aria-expanded="false">
                                                <img src="images/16150043939bYZH.png" alt="category">
                                                <?php
                                                $getcat=mysqli_query($con, "select * from category where id='6'");
        $catrow=mysqli_fetch_array($getcat);
        $totalcatadcount=mysqli_num_rows(mysqli_query($con, "select * from product where categoryid='".$catrow['id']."'"));
        echo "".$catrow['categoryname']." (".$totalcatadcount.")";
        ?>
                                            </a>
                                        </div>
                                        <div id="collapse-6" class="collapse" data-parent="#accordion2">
                                            <div class="card-body">
                                                <ul class="sub-list">
                                                    <?php
                                                $subcatagory=mysqli_query($con, "select * from subcategory where categoryid = '6'") or die("eRROR");
        while ($row=mysqli_fetch_array($subcatagory)) {
            $totaladcount=mysqli_num_rows(mysqli_query($con, "select * from product where subcategoryid='".$row['id']."'"));
            echo "<li><a href='catWiseItems?sub_category=".$row['id']."'>".$row['subcategoryname']."
                                                    (".$totaladcount.")</a></li>";
        } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="parent-list collapsed" role="button" data-toggle="collapse"
                                                href="#collapse-7" aria-expanded="false">
                                                <img src="images/1615008742hbVcV.png" alt="category">
                                                <?php
                                                $getcat=mysqli_query($con, "select * from category where id='7'");
        $catrow=mysqli_fetch_array($getcat);
        $totalcatadcount=mysqli_num_rows(mysqli_query($con, "select * from product where categoryid='".$catrow['id']."'"));
        echo "".$catrow['categoryname']." (".$totalcatadcount.")";
        ?>
                                            </a>
                                        </div>
                                        <div id="collapse-7" class="collapse" data-parent="#accordion2">
                                            <div class="card-body">
                                                <ul class="sub-list">
                                                    <?php
                                                $subcatagory=mysqli_query($con, "select * from subcategory where categoryid = '7'") or die("eRROR");
        while ($row=mysqli_fetch_array($subcatagory)) {
            $totaladcount=mysqli_num_rows(mysqli_query($con, "select * from product where subcategoryid='".$row['id']."'"));
            echo "<li><a href='catWiseItems?sub_category=".$row['id']."'>".$row['subcategoryname']."
                                                    (".$totaladcount.")</a></li>";
        } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="parent-list collapsed" role="button" data-toggle="collapse"
                                                href="#collapse-8" aria-expanded="false">
                                                <img src="images/1615013582pbcYC.png" alt="category">
                                                <?php
                                                $getcat=mysqli_query($con, "select * from category where id='8'");
        $catrow=mysqli_fetch_array($getcat);
        $totalcatadcount=mysqli_num_rows(mysqli_query($con, "select * from product where categoryid='".$catrow['id']."'"));
        echo "".$catrow['categoryname']." (".$totalcatadcount.")";
        ?>
                                            </a>
                                        </div>
                                        <div id="collapse-8" class="collapse" data-parent="#accordion2">
                                            <div class="card-body">
                                                <ul class="sub-list">
                                                    <?php
                                                $subcatagory=mysqli_query($con, "select * from subcategory where categoryid = '8'") or die("eRROR");
        while ($row=mysqli_fetch_array($subcatagory)) {
            $totaladcount=mysqli_num_rows(mysqli_query($con, "select * from product where subcategoryid='".$row['id']."'"));
            echo "<li><a href='catWiseItems?sub_category=".$row['id']."'>".$row['subcategoryname']."
                                                    (".$totaladcount.")</a></li>";
        } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="parent-list collapsed" role="button" data-toggle="collapse"
                                                href="#collapse-9" aria-expanded="false">
                                                <img src="images/1615005749VZy8P.png" alt="category">
                                                <?php
                                                $getcat=mysqli_query($con, "select * from category where id='9'");
        $catrow=mysqli_fetch_array($getcat);
        $totalcatadcount=mysqli_num_rows(mysqli_query($con, "select * from product where categoryid='".$catrow['id']."'"));
        echo "".$catrow['categoryname']." (".$totalcatadcount.")";
        ?>
                                            </a>
                                        </div>
                                        <div id="collapse-9" class="collapse" data-parent="#accordion2">
                                            <div class="card-body">
                                                <ul class="sub-list">
                                                    <?php
                                                $subcatagory=mysqli_query($con, "select * from subcategory where categoryid = '9'") or die("eRROR");
        while ($row=mysqli_fetch_array($subcatagory)) {
            $totaladcount=mysqli_num_rows(mysqli_query($con, "select * from product where subcategoryid='".$row['id']."'"));
            echo "<li><a href='catWiseItems?sub_category=".$row['id']."'>".$row['subcategoryname']."
                                                    (".$totaladcount.")</a></li>";
        } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="parent-list collapsed" role="button" data-toggle="collapse"
                                                href="#collapse-10" aria-expanded="false">
                                                <img src="images/1615002929hWPEN.png" alt="category">
                                                <?php
                                                $getcat=mysqli_query($con, "select * from category where id='10'");
        $catrow=mysqli_fetch_array($getcat);
        $totalcatadcount=mysqli_num_rows(mysqli_query($con, "select * from product where categoryid='".$catrow['id']."'"));
        echo "".$catrow['categoryname']." (".$totalcatadcount.")";
        ?>
                                            </a>
                                        </div>
                                        <div id="collapse-10" class="collapse" data-parent="#accordion2">
                                            <div class="card-body">
                                                <ul class="sub-list">
                                                    <?php
                                                $subcatagory=mysqli_query($con, "select * from subcategory where categoryid = '10'") or die("eRROR");
        while ($row=mysqli_fetch_array($subcatagory)) {
            $totaladcount=mysqli_num_rows(mysqli_query($con, "select * from product where subcategoryid='".$row['id']."'"));
            echo "<li><a href='catWiseItems?sub_category=".$row['id']."'>".$row['subcategoryname']."
                                                    (".$totaladcount.")</a></li>";
        } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="parent-list collapsed" role="button" data-toggle="collapse"
                                                href="#collapse-11" aria-expanded="false">
                                                <img src="images/1615003834UbBg5.png" alt="category">
                                                <?php
                                                $getcat=mysqli_query($con, "select * from category where id='11'");
        $catrow=mysqli_fetch_array($getcat);
        $totalcatadcount=mysqli_num_rows(mysqli_query($con, "select * from product where categoryid='".$catrow['id']."'"));
        echo "".$catrow['categoryname']." (".$totalcatadcount.")";
        ?>
                                            </a>
                                        </div>
                                        <div id="collapse-11" class="collapse" data-parent="#accordion2">
                                            <div class="card-body">
                                                <ul class="sub-list">
                                                    <?php
                                                $subcatagory=mysqli_query($con, "select * from subcategory where categoryid = '11'") or die("eRROR");
        while ($row=mysqli_fetch_array($subcatagory)) {
            $totaladcount=mysqli_num_rows(mysqli_query($con, "select * from product where subcategoryid='".$row['id']."'"));
            echo "<li><a href='catWiseItems?sub_category=".$row['id']."'>".$row['subcategoryname']."
                                                    (".$totaladcount.")</a></li>";
        } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="parent-list collapsed" role="button" data-toggle="collapse"
                                                href="#collapse-12" aria-expanded="false">
                                                <img src="images/1615002872VJGMH.png" alt="category">
                                                <?php
                                                $getcat=mysqli_query($con, "select * from category where id='12'");
        $catrow=mysqli_fetch_array($getcat);
        $totalcatadcount=mysqli_num_rows(mysqli_query($con, "select * from product where categoryid='".$catrow['id']."'"));
        echo "".$catrow['categoryname']." (".$totalcatadcount.")";
        ?>
                                            </a>
                                        </div>
                                        <div id="collapse-12" class="collapse" data-parent="#accordion2">
                                            <div class="card-body">
                                                <ul class="sub-list">
                                                    <?php
                                                $subcatagory=mysqli_query($con, "select * from subcategory where categoryid = '12'") or die("eRROR");
        while ($row=mysqli_fetch_array($subcatagory)) {
            $totaladcount=mysqli_num_rows(mysqli_query($con, "select * from product where subcategoryid='".$row['id']."'"));
            echo "<li><a href='catWiseItems?sub_category=".$row['id']."'>".$row['subcategoryname']."
                                                    (".$totaladcount.")</a></li>";
        } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="parent-list collapsed" role="button" data-toggle="collapse"
                                                href="#collapse-13" aria-expanded="false">
                                                <img src="images/1621059891V84GI.png" alt="category">
                                                <?php
                                                $getcat=mysqli_query($con, "select * from category where id='13'");
        $catrow=mysqli_fetch_array($getcat);
        $totalcatadcount=mysqli_num_rows(mysqli_query($con, "select * from product where categoryid='".$catrow['id']."'"));
        echo "".$catrow['categoryname']." (".$totalcatadcount.")";
        ?>
                                            </a>
                                        </div>
                                        <div id="collapse-13" class="collapse" data-parent="#accordion2">
                                            <div class="card-body">
                                                <ul class="sub-list">
                                                    <?php
                                                $subcatagory=mysqli_query($con, "select * from subcategory where categoryid = '13'") or die("eRROR");
        while ($row=mysqli_fetch_array($subcatagory)) {
            $totaladcount=mysqli_num_rows(mysqli_query($con, "select * from product where subcategoryid='".$row['id']."'"));
            echo "<li><a href='catWiseItems?sub_category=".$row['id']."'>".$row['subcategoryname']."
                                                    (".$totaladcount.")</a></li>";
        } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card filter-location multi-accordion filter-item-list">
                        <div class="card-header">
                            <a class="parent-list" role="button" data-toggle="collapse" href="#collapseThree"
                                aria-expanded="true">
                                Cities
                            </a>
                        </div>
                        <div id="collapseThree" class="collapse show" data-parent="#accordion">
                            <div class="card-body">
                                <div class="multi-accordion-content" id="accordion3">
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="parent-list collapsed" role="button" href="subarea.php?id=1">
                                                Dhaka
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="parent-list collapsed" role="button" href="subarea.php?id=2">
                                                Chittagong
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="parent-list collapsed" role="button" href="subarea.php?id=3">
                                                Sylhet
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="parent-list collapsed" role="button" href="subarea.php?id=4">
                                                Barishal
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="parent-list collapsed" role="button" href="subarea.php?id=5">
                                                Khulna
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="parent-list collapsed" role="button" href="subarea.php?id=6">
                                                Rangpur
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="parent-list collapsed" role="button" href="subarea.php?id=7">
                                                Rajshahi
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="parent-list collapsed" role="button" href="subarea.php?id=8">
                                                Mymensingh
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>