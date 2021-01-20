<?php
include './db_connection.php';
//include './error_handling.php';
$Id = $_POST['id'];
$Name = $_POST['name'];
$Email = $_POST['email'];
$Address = $_POST['address'];
$MobileNumber = $_POST['mobile_number'];
$Zipcode = $_POST['zip_code'];
$Password =$_POST['password'];


echo '<br>';

$sql = "UPDATE customer SET name ='".$Name."',email = '".$Email."',address = '".$Address."',mobile_number = '".$MobileNumber."',zip_code = '".$Zipcode."',password = '".$Password."' WHERE id ='".$Id."' ";

$isUpdated = mysqli_query($connection, $sql);
if($isUpdated){
    echo 'User Updated successfully';
} else {
    echo 'Oops! Something went wrong!';
}
mysqli_close($connection);

?>