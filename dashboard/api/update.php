<?php

require 'db_config.php';


$id  = $_GET["id"];
$post = $_GET;

$sql = "UPDATE category SET categoryname = '".$post['categoryname']."'

    ,categorydescription = '".$post['categorydescription']."' 

    WHERE id = '".$id."'";

$result = $con->query($sql);


$sql = "SELECT * FROM category WHERE id = '".$id."'";

$result = $con->query($sql);

$data = $result->fetch_assoc();


echo json_encode($data);
