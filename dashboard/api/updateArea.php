<?php

require 'db_config.php';


$id  = $_GET["id"];
$post = $_GET;

$sql = "UPDATE area SET areaname = '".$post['areaname']."' 

    WHERE id = '".$id."'";

$result = $con->query($sql);


$sql = "SELECT * FROM area WHERE id = '".$id."'";

$result = $con->query($sql);

$data = $result->fetch_assoc();


echo json_encode($data);
