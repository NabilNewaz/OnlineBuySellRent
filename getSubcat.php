<?php
    require "./function/connection.php";
    ?>
<?php
    $category_id = $_GET['id'];
    $result = $con->query("SELECT * FROM subcategory where categoryid = '$category_id'");
    ?>
<option disabled selected value="">Select Sub Category</option>
<?php
while ($row = mysqli_fetch_array($result)) {
    ?>
<option value="<?php echo $row["id"];?>">
    <?php echo $row["subcategoryname"];?>
</option>
<?php
}
    ?>