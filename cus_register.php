<?php
include './db_connection.php';
//include './errorHandling.php';

$inName = $_POST['inName'];
$inEmail = $_POST['inEmail'];
$inAddress = $_POST['inAddress'];
$inMobile = $_POST['inMobile'];
$inZipcode = $_POST['inZipcode'];
$inPassword =$_POST['inPassword'];





echo '<br>';

$sql = "INSERT INTO customer (name,email,address,mobile_number,zip_code,password) values ('".$inName."','".$inEmail."', '".$inAddress."', '".$inMobile."','".$inZipcode."','".$inPassword."')";

$isSaved = mysqli_query($connection, $sql);
if($isSaved){
    echo 'User saved successfully';
} else {
    echo 'Oops! Something went wrong!'.$connection->error;
}
mysqli_close($connection);

?>