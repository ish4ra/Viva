<?php
include './db_connection.php';
include './error_handling.php';

//var_dump($_POST);
$Id = $_POST['Id'];
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Address = $_POST['Address'];
$MobileNumber = $_POST['MobileNumber'];
$Zipcode = $_POST['Zipcode'];
$Password =$_POST['Password'];


$sql = "UPDATE customer SET name ='".$Name."',email = '".$Email."',address = '".$Address."',mobile_number = '".$MobileNumber."',zip_code = '".$Zipcode."',password = '".$Password."' WHERE id ='".$Id."' ";
echo $sql;

$isUpdated = mysqli_query($connection, $sql);
if($isUpdated){
    echo 'User Updated successfully';
} else {
    echo 'Oops! Something went wrong!';
    ;
}
mysqli_close($connection);

