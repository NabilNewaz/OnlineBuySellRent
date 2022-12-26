<?php

require "db_config.php";
if (isset($_GET['action'])) {
    $id = intval($_GET['id']);
    $subcatname = filter_var($_GET['subcategoryname'], FILTER_SANITIZE_STRING);
    $catid = intval($_GET['categoryid']);
    $subcatdes = filter_var($_GET['subcategorydescription'], FILTER_SANITIZE_STRING);
    // $subcatdate = date('y-m-d');
    if ($subcatname == "" || $catid == "" || $subcatdes == "") {
        header("location: subcategoryUpdate.php");
        exit;
    }

    $upadate = "UPDATE subcategory SET subcategoryname = '$subcatname', categoryid = $catid, description = '$subcatdes' WHERE id = $id";
    $con->query($upadate);

    // $updateQuery = "UPDATE `byensell`.`subcategory` SET `subcategoryname` = '$subcatname',`categoryid` = '$catid',`description` = '$subcatdes' WHERE `subcategory`.`id` ='$id'";
    // $con->query($updateQuery);
    if ($con->affected_rows == 1) {
        echo "Data Updated";
    } else {
        echo $subcatdes;
        echo "problem updating data";
    }
}
