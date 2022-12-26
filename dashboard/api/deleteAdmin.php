<?php

 require 'db_config.php';

 $id  = $_GET["id"];

 $sql = "DELETE FROM admin WHERE id = '".$id."'";

 $result = $con->query($sql);

 echo json_encode([$id]);
