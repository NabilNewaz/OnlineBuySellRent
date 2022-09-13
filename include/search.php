<section class="product-wrap-layout1 bg-accent">
<section>
<div class="container">
<div class="search-box-wrap-layout2">
    <div class="search-box-layout1">
        <form id="adv-search" action="searchresult.php" method="POST">
            <div class="row no-gutters">
                <div class="col-lg-3 form-group">
                    <div class="input-search-btn search-location">
                    <i class="fas fa-map-marker-alt"></i>
                        <select class="form-control select-box" name="country" id="country">
                            <option selected disabled>
                                <label>Select Location</label>
                            </option>
                            <?php 
                                                $select_area = "SELECT * FROM area ";
                                                $select_area_query = $con->query($select_area);
                                                while($rows = $select_area_query->fetch_array()) {
                                        ?>
                                                <option value="<?php echo $rows["id"]; ?>"><?php echo $rows["areaname"]; ?></option>
                                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 form-group">
                    <div class="input-search-btn search-category">
                        <i class="fas fa-tags"></i>
                        <select class="form-control select-box" name="category" id="category">
                            <option selected disabled>
                                <label>Select Category</label>
                            </option>
                            <?php 
                                	$select_cat = "SELECT * FROM category ";
									$select_cat_query = $con->query($select_cat);
									while($rows = $select_cat_query->fetch_array()) {
                                 ?>
                                 	<option value="<?php echo $rows["id"]; ?>"><?php echo $rows["categoryname"]; ?></option>
                                 <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-lg-4 form-group">
                    <div class="input-search-btn search-keyword">
                        <i class="fas fa-text-width"></i>
                        <input type="text" class="form-control" name="name"placeholder="Search for Products" required >
                    </div>
                </div>
                <div class="col-lg-2 form-group">
                    <button type="submit" name="submit" class="submit-btn"><i class="fas fa-search"></i>Search</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
</section>


</section>