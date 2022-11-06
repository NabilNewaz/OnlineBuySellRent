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
                                                Business &amp; Industry (20)
                                            </a>
                                        </div>
                                        <div id="collapse-0" class="collapse" data-parent="#accordion2">
                                            <div class="card-body">
                                                <ul class="sub-list">
                                                    <li><a href="all-ad8193.html?sub_category=1">Industry Machinery
                                                            (3)</a></li>
                                                    <li><a href="all-adb2c5.html?sub_category=65">Medical Equipment
                                                            (5)</a></li>
                                                    <li><a href="all-ade0cc.html?sub_category=66">Office Supplies
                                                            (1)</a></li>
                                                    <li><a href="all-add9ae.html?sub_category=67">Licence, Title &amp;
                                                            Tender (1)</a></li>
                                                    <li><a href="all-ad190f.html?sub_category=68">Safety &amp; Security
                                                            (5)</a></li>
                                                    <li><a href="all-ad53eb.html?sub_category=69">Other Industry Items
                                                            (5)</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="parent-list collapsed" role="button" data-toggle="collapse"
                                                href="#collapse-1" aria-expanded="false">
                                                <img src="images/1615003721M4sRG.png" alt="category">
                                                Vehicle (87)
                                            </a>
                                        </div>
                                        <div id="collapse-1" class="collapse" data-parent="#accordion2">
                                            <div class="card-body">
                                                <ul class="sub-list">
                                                    <li><a href="all-adab36.html?sub_category=56">Car (55)</a></li>
                                                    <li><a href="all-adbda0.html?sub_category=57">Bicycle &amp; Three
                                                            Wheeler (5)</a></li>
                                                    <li><a href="all-ad99d5.html?sub_category=58">Motorbike &amp;
                                                            Scooter (22)</a></li>
                                                    <li><a href="all-ad816a.html?sub_category=59">Truck, Van &amp; Bus
                                                            (2)</a></li>
                                                    <li><a href="all-ad024e.html?sub_category=60">Boat &amp; Water
                                                            Transport (0)</a></li>
                                                    <li><a href="all-ad7a62.html?sub_category=61">Tractor &amp;
                                                            Heavy-Duty (0)</a></li>
                                                    <li><a href="all-adddc9.html?sub_category=62">Auto Parts &amp;
                                                            Accessories (0)</a></li>
                                                    <li><a href="all-ad0790.html?sub_category=64">Auto Services (3)</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="parent-list collapsed" role="button" data-toggle="collapse"
                                                href="#collapse-2" aria-expanded="false">
                                                <img src="images/1615003873JRusZ.png" alt="category">
                                                Book &amp; Magazine (4)
                                            </a>
                                        </div>
                                        <div id="collapse-2" class="collapse" data-parent="#accordion2">
                                            <div class="card-body">
                                                <ul class="sub-list">
                                                    <li><a href="all-ad0fd3.html?sub_category=3">Text Book (2)</a></li>
                                                    <li><a href="all-ad3217.html?sub_category=125">Other Book &amp;
                                                            Magazine (2)</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="parent-list collapsed" role="button" data-toggle="collapse"
                                                href="#collapse-3" aria-expanded="false">
                                                <img src="images/1615012728vRLMv.png" alt="category">
                                                Electronics (1078)
                                            </a>
                                        </div>
                                        <div id="collapse-3" class="collapse" data-parent="#accordion2">
                                            <div class="card-body">
                                                <ul class="sub-list">
                                                    <li><a href="all-ada0f4.html?sub_category=4">Air Conditioner ( AC )
                                                            (150)</a></li>
                                                    <li><a href="all-ad373f.html?sub_category=7">Camera &amp; Camcorder
                                                            (33)</a></li>
                                                    <li><a href="all-ad29df.html?sub_category=15">Desktop Computer
                                                            (29)</a></li>
                                                    <li><a href="all-ad09b8.html?sub_category=16">Laptop (65)</a></li>
                                                    <li><a href="all-ad9a6a.html?sub_category=17">Computer Accessories
                                                            (46)</a></li>
                                                    <li><a href="all-ad5231.html?sub_category=18">TVs (335)</a></li>
                                                    <li><a href="all-ad6574.html?sub_category=19">TV &amp; Video
                                                            Accessories (14)</a></li>
                                                    <li><a href="all-ad985c.html?sub_category=20">Audio &amp; Sound
                                                            System (51)</a></li>
                                                    <li><a href="all-addeb5.html?sub_category=21">Printer & Photocopier
                                                            (10)</a></li>
                                                    <li><a href="all-adea1f.html?sub_category=22">Game Console &
                                                            Accessories (0)</a></li>
                                                    <li><a href="all-ad7f6a.html?sub_category=23">Tablet &amp;
                                                            accessories (4)</a></li>
                                                    <li><a href="all-ad923a.html?sub_category=24">Mobile Phone (217)</a>
                                                    </li>
                                                    <li><a href="all-ada843.html?sub_category=52">Mobile Accessories
                                                            (16)</a></li>
                                                    <li><a href="all-adf7b0.html?sub_category=53">Freeze (14)</a></li>
                                                    <li><a href="all-ad3d5f.html?sub_category=54">Lighting (36)</a></li>
                                                    <li><a href="all-ad0e85.html?sub_category=55">Other Electronics
                                                            Items (58)</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="parent-list collapsed" role="button" data-toggle="collapse"
                                                href="#collapse-4" aria-expanded="false">
                                                <img src="images/16150053460Qclp.png" alt="category">
                                                Home &amp; Living (116)
                                            </a>
                                        </div>
                                        <div id="collapse-4" class="collapse" data-parent="#accordion2">
                                            <div class="card-body">
                                                <ul class="sub-list">
                                                    <li><a href="all-ada59c.html?sub_category=31">Kitchen &amp; Dinning
                                                            Furniture (17)</a></li>
                                                    <li><a href="all-ad7758.html?sub_category=32">Office &amp; Shop
                                                            Furniture (1)</a></li>
                                                    <li><a href="all-ad9a0c.html?sub_category=33">Bed Room Furniture
                                                            (27)</a></li>
                                                    <li><a href="all-adf2c6.html?sub_category=35">Household Items
                                                            (21)</a></li>
                                                    <li><a href="all-ad8700.html?sub_category=101">Home Appliances
                                                            (35)</a></li>
                                                    <li><a href="all-adb667.html?sub_category=120">Drawing Room
                                                            Furniture (15)</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="parent-list collapsed" role="button" data-toggle="collapse"
                                                href="#collapse-6" aria-expanded="false">
                                                <img src="images/16150043939bYZH.png" alt="category">
                                                Land &amp; Property (25)
                                            </a>
                                        </div>
                                        <div id="collapse-6" class="collapse" data-parent="#accordion2">
                                            <div class="card-body">
                                                <ul class="sub-list">
                                                    <li><a href="all-adfa9c.html?sub_category=41">Apartment &amp; Flat
                                                            (13)</a></li>
                                                    <li><a href="all-ad2622.html?sub_category=43">House (2)</a></li>
                                                    <li><a href="all-ad2e8d.html?sub_category=45">Plot &amp; Land
                                                            (8)</a></li>
                                                    <li><a href="all-adb410.html?sub_category=46">Room (0)</a></li>
                                                    <li><a href="all-ad8af8.html?sub_category=47">Garage (0)</a></li>
                                                    <li><a href="all-ad8862.html?sub_category=48">Commercial Property
                                                            (2)</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="parent-list collapsed" role="button" data-toggle="collapse"
                                                href="#collapse-7" aria-expanded="false">
                                                <img src="images/1615008742hbVcV.png" alt="category">
                                                Services (38)
                                            </a>
                                        </div>
                                        <div id="collapse-7" class="collapse" data-parent="#accordion2">
                                            <div class="card-body">
                                                <ul class="sub-list">
                                                    <li><a href="all-adb76e.html?sub_category=84">Business &amp;
                                                            Technical Services (21)</a></li>
                                                    <li><a href="all-ad8763.html?sub_category=85">Event &amp;
                                                            Hospitality (2)</a></li>
                                                    <li><a href="all-ad3426.html?sub_category=86">Ticket (0)</a></li>
                                                    <li><a href="all-ad4c6a.html?sub_category=87">Travel &amp; Visa
                                                            (0)</a></li>
                                                    <li><a href="all-ad65e7.html?sub_category=88">Domestic &amp;
                                                            Personal (0)</a></li>
                                                    <li><a href="all-adf96a.html?sub_category=89">Health &amp; Life
                                                            Style (0)</a></li>
                                                    <li><a href="all-ad89fd.html?sub_category=119">Tuition (2)</a></li>
                                                    <li><a href="all-aded69.html?sub_category=124">Study Abroad (0)</a>
                                                    </li>
                                                    <li><a href="all-adab4b.html?sub_category=126">Car/Vehicle Rental
                                                            (0)</a></li>
                                                    <li><a href="all-adc85b.html?sub_category=129">IT Service (7)</a>
                                                    </li>
                                                    <li><a href="all-ad3bc3.html?sub_category=130">Domestic &amp; Day
                                                            Care Service (0)</a></li>
                                                    <li><a href="all-ad3489.html?sub_category=131">Service &amp; Repair
                                                            (2)</a></li>
                                                    <li><a href="all-ad72e3.html?sub_category=134">Other Services
                                                            (4)</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="parent-list collapsed" role="button" data-toggle="collapse"
                                                href="#collapse-8" aria-expanded="false">
                                                <img src="images/1615013582pbcYC.png" alt="category">
                                                Health &amp; Beauty (36)
                                            </a>
                                        </div>
                                        <div id="collapse-8" class="collapse" data-parent="#accordion2">
                                            <div class="card-body">
                                                <ul class="sub-list">
                                                    <li><a href="all-adc9bc.html?sub_category=82">Beauty product
                                                            (16)</a></li>
                                                    <li><a href="all-adae6c.html?sub_category=83">Health products
                                                            (20)</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="parent-list collapsed" role="button" data-toggle="collapse"
                                                href="#collapse-9" aria-expanded="false">
                                                <img src="images/1615005749VZy8P.png" alt="category">
                                                Fashion &amp; Life Style (92)
                                            </a>
                                        </div>
                                        <div id="collapse-9" class="collapse" data-parent="#accordion2">
                                            <div class="card-body">
                                                <ul class="sub-list">
                                                    <li><a href="all-ad4901.html?sub_category=6">Jewellery (1)</a></li>
                                                    <li><a href="all-ad4b3b.html?sub_category=8">Women&#039;s Clothing
                                                            &amp; Accessories (39)</a></li>
                                                    <li><a href="all-ad442b.html?sub_category=9">Children&#039;s
                                                            Clothing &amp; Accessories (1)</a></li>
                                                    <li><a href="all-adf1dc.html?sub_category=10">Watches (14)</a></li>
                                                    <li><a href="all-ad5170.html?sub_category=13">Optical Items (4)</a>
                                                    </li>
                                                    <li><a href="all-addf87.html?sub_category=77">Shoes &amp; Footwear
                                                            (3)</a></li>
                                                    <li><a href="all-ad0c20.html?sub_category=78">Wholesale-Bulk (0)</a>
                                                    </li>
                                                    <li><a href="all-ade628.html?sub_category=79">Other Fshion &amp;
                                                            Life Style (15)</a></li>
                                                    <li><a href="all-ad4884.html?sub_category=100">Bags &amp; Luggage
                                                            (15)</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="parent-list collapsed" role="button" data-toggle="collapse"
                                                href="#collapse-10" aria-expanded="false">
                                                <img src="images/1615002929hWPEN.png" alt="category">
                                                Hobby, Sports &amp; Kids (12)
                                            </a>
                                        </div>
                                        <div id="collapse-10" class="collapse" data-parent="#accordion2">
                                            <div class="card-body">
                                                <ul class="sub-list">
                                                    <li><a href="all-ad3b51.html?sub_category=94">Children&#039;s Items
                                                            (2)</a></li>
                                                    <li><a href="all-adf48e.html?sub_category=95">Handicrafts &amp;
                                                            Decoration (0)</a></li>
                                                    <li><a href="all-ad1ebe.html?sub_category=96">Music, Books &amp;
                                                            Movies (1)</a></li>
                                                    <li><a href="all-ad1fc2.html?sub_category=97">Musical Instruments
                                                            (4)</a></li>
                                                    <li><a href="all-ad854d.html?sub_category=98">Sports Equipment
                                                            (0)</a></li>
                                                    <li><a href="all-adab77.html?sub_category=99">Other Hobby, Spotrs
                                                            &amp; Kids Items (4)</a></li>
                                                    <li><a href="all-ade585.html?sub_category=127">Fitness &amp; Gim
                                                            Equipment (1)</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="parent-list collapsed" role="button" data-toggle="collapse"
                                                href="#collapse-11" aria-expanded="false">
                                                <img src="images/1615003834UbBg5.png" alt="category">
                                                Pet &amp; Animal (12)
                                            </a>
                                        </div>
                                        <div id="collapse-11" class="collapse" data-parent="#accordion2">
                                            <div class="card-body">
                                                <ul class="sub-list">
                                                    <li><a href="all-ada0eb.html?sub_category=90">Pets (8)</a></li>
                                                    <li><a href="all-ade3ca.html?sub_category=91">Farm Animals (1)</a>
                                                    </li>
                                                    <li><a href="all-ad2f6e.html?sub_category=92">Animal Accessories
                                                            (1)</a></li>
                                                    <li><a href="all-adf5e9.html?sub_category=93">Other Pets &amp;
                                                            Animals (2)</a></li>
                                                    <li><a href="all-adf39c.html?sub_category=128">Cattle (0)</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="parent-list collapsed" role="button" data-toggle="collapse"
                                                href="#collapse-12" aria-expanded="false">
                                                <img src="images/1615002872VJGMH.png" alt="category">
                                                Food &amp; Agriculture (9)
                                            </a>
                                        </div>
                                        <div id="collapse-12" class="collapse" data-parent="#accordion2">
                                            <div class="card-body">
                                                <ul class="sub-list">
                                                    <li><a href="all-ad8314.html?sub_category=5">Farming Tools &amp;
                                                            Machinery (0)</a></li>
                                                    <li><a href="all-ad92f5.html?sub_category=74">food (7)</a></li>
                                                    <li><a href="all-adf6aa.html?sub_category=75">Crops, Seeds &amp;
                                                            Plants (0)</a></li>
                                                    <li><a href="all-ade573.html?sub_category=76">Other Food &amp;
                                                            Agriculture (2)</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="parent-list collapsed" role="button" data-toggle="collapse"
                                                href="#collapse-13" aria-expanded="false">
                                                <img src="images/1621059891V84GI.png" alt="category">
                                                Grocery (13)
                                            </a>
                                        </div>
                                        <div id="collapse-13" class="collapse" data-parent="#accordion2">
                                            <div class="card-body">
                                                <ul class="sub-list">
                                                    <li><a href="all-ad7ce5.html?sub_category=102">Meat (1)</a></li>
                                                    <li><a href="all-ad8600.html?sub_category=103">Rice (0)</a></li>
                                                    <li><a href="all-ad7354.html?sub_category=104">Oil &amp; Fat (1)</a>
                                                    </li>
                                                    <li><a href="all-adf254.html?sub_category=105">Fruits &amp;
                                                            Vegetables (3)</a></li>
                                                    <li><a href="all-ad24c7.html?sub_category=107">Spices (0)</a></li>
                                                    <li><a href="all-ad15a1.html?sub_category=108">Canned &amp; Dried
                                                            Food (4)</a></li>
                                                    <li><a href="all-ad727a.html?sub_category=109">Frozen Food (0)</a>
                                                    </li>
                                                    <li><a href="all-ad2be3.html?sub_category=110">Bakery (0)</a></li>
                                                    <li><a href="all-ad14e0.html?sub_category=111">Dairy (0)</a></li>
                                                    <li><a href="all-ade1a2.html?sub_category=112">Snacks and Crackers
                                                            (1)</a></li>
                                                    <li><a href="all-adb64b.html?sub_category=113">Drinks (0)</a></li>
                                                    <li><a href="all-ad3ae2.html?sub_category=114">Toiletries / Personal
                                                            Hygiene (0)</a></li>
                                                    <li><a href="all-adf18d.html?sub_category=115">Cleaning Supplies
                                                            (0)</a></li>
                                                    <li><a href="all-ad4612.html?sub_category=116">Disposables (0)</a>
                                                    </li>
                                                    <li><a href="all-ada62e.html?sub_category=117">Other Grocery Item
                                                            (2)</a></li>
                                                    <li><a href="all-aded51.html?sub_category=132">Seafood (0)</a></li>
                                                    <li><a href="all-ad351d.html?sub_category=133">Fish (1)</a></li>
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