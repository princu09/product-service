<?php

$servername  = "localhost";
$username  = "root";
$password  = "";
$database  = "pro-service-0098";

$connect = mysqli_connect($servername, $username, $password, $database);

if (!$connect) {
    die("Sorry We can't connect to Database");
}
else{
    // echo "Connection was successfully";
}
?>