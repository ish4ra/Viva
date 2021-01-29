<?php
include './db_connection.php';
include './error_handlling.php';

$id = $_POST['id'];

$name = $_POST['pname'];

$brand = $_POST['brand'];

$price = $_POST['price'];

$cat =  $_POST['category'];

$url = $_POST['imageurl'];




$sql="UPDATE product SET id='".$id."',pname='".$name."',brand='".$brand."',price='".$price."',category='".$cat."',imageurl='".$url."' WHERE id='".$id."'";
$isSaved= mysqli_query($connection, $sql);
if($isSaved){
    
    echo 'user update successfully';
}else{
    
    echo 'error !'.$connection->error;
}
mysqli_close($connection);
?>
<a href="user_manager.php">back</a>
