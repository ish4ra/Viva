<?php
$username = "root";
$password = "Ishara@bitch";
$databasename = "hakme";
$Hosturl = "127.0.0.1";
$Hostport = 3307;




$connection = new mysqli($Hosturl, $username,  $password, $databasename, $Hostport);


if($connection->connect_error){
    echo 'error!, not connected'.$connection->connect_error;
} else {
    echo 'connected successfully';
}



?>


