<?php
$dbServerName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "password_saver";

$conn =  new mysqli($dbServerName, $dbUsername,$dbPassword, $dbName);
if($conn->connect_error) {
    die("connection failed".$conn->connect_error);

} else {
    echo "connection suceesful";
}

?>