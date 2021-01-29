<?php

include './db_connection.php';
include './error_handlling.php';

$id = $_POST['id'];

$name = $_POST['pname'];

$brand = $_POST['brand'];

$price = $_POST['price'];

$cat =  $_POST['category'];

$url = $_POST['imageurl'];



$sqliq = "INSERT INTO product(id,pname,brand,price,category,imageurl) VALUES ('".$id."','".$name."','".$brand."','".$price."','".$cat."','".$url."')";

$isSaved = mysqli_query($connection, $sqliq);
if ($isSaved) {
    echo 'saved';
    
}else{
    echo 'error'. $connection -> error;
}

mysqli_close($connection)

?>