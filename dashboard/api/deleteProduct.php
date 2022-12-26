<?php

 require 'db_config.php';

 $id  = $_GET["id"];

 $sql = "DELETE FROM product WHERE id = '".$id."'";

 $result = $con->query($sql);

 echo json_encode([$id]);
