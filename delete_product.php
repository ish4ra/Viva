<?php
include './db_connection.php';
include './error_handlling.php';

$id = $_GET['id'];

$sql = "DELETE FROM product WHERE id='".$id."'";
$isdeleted= mysqli_query($connection, $sql);
if($isdeleted){
    
    echo 'user deleted successfully';
}else{
    
    echo 'error !';
}

?>

<a href="user_manager.php">back</a>