<?php

 require 'db_config.php';

 $id  = $_GET["id"];

 $sql = "DELETE FROM area WHERE id = '".$id."'";

 $result = $con->query($sql);

 echo json_encode([$id]);
