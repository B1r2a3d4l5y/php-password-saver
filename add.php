<?php
if(isset($_POST["save"])) {
    require 'database.php'
    $username = $_POST["username"];
    $password = password_hash($_POST["password"]);
    $wbsite = $_POST["webstie"];

}