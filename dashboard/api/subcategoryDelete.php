<?php

require "db_config.php";
if (isset($_GET['recordId'])) {
    $id = intval($_GET['recordId']);

    $deleteQuery = "delete from  subcategory where id = $id";
    $con->query($deleteQuery);
    if ($con->affected_rows == 1) {
        echo true;
    } else {
        echo false;
    }
}
