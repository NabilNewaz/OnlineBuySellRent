<?php
    require "./function/connection.php";
    ?>
<?php
    $area_id = $_GET['id'];
    $result = $con->query("SELECT * FROM subarea where areaid = '$area_id'");
    ?>
<option disabled selected value="">Select Sub Area</option>
<?php
while ($row = mysqli_fetch_array($result)) {
    ?>
<option value="<?php echo $row["id"];?>">
    <?php echo $row["subareaname"];?>
</option>
<?php
}
    ?>