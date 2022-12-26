<?php

require "db_config.php";
if (isset($_GET['action'])) {
    $subcatname = $_GET['subcategoryname'];
    $catid = intval($_GET['categoryid']);
    $subcatdes = $_GET['description'];
    $subcatdate = date('y-m-d');
    if ($subcatname == "" || $catid == "" || $subcatdes == "") {
        header("location: subcategoryAdd.php");
        exit;
    }

    $insertQuery = "INSERT INTO `subcategory` (`id`, `subcategoryname`, `categoryid`, `description`, `createdate`) VALUES ('', '$subcatname',$catid,'$subcatdes','$subcatdate')";
    $con->query($insertQuery);

    if ($con->affected_rows == 1) {
        echo "Data Updated";
    } else {
        echo gettype($subcatdate);
        echo "problem updating data";
    }
}
