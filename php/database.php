<?php
$dbServerName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "paasword_saver";

$conn =  new mysli($dbServerName, $dbUsername,$dbPassword, $dbName);
if($conn->connect_error) {
    die("connection failed".$conn->connect_error);

} else {
    die("connection successful");
}
$conn->close();