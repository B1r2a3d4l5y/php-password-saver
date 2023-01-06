<?php
$msg = ""
if(isset($_POST["save"])) {
    require 'database.php'
    $username = $_POST["username"];
    $password = PASSWORD_HASH($_POST["password"] PASSWORD_DEFAULT);
    $wbsite = $_POST["webstie"];
    // check if all the fields are empty
    if(empty($username) || empty($password)|| empty($webstie)) {
        msg = "Fields are empty. Please fill them in";
        echo $msg;
    } elsif(empty($susername) ) {
        $msg = "username field is empty. Please fill it in";
        echo $msg

    } elseif(empty($password)) {
        $msg = "Password field is empty. Please fill it in";
        echo $msg;
    } else {
        $stnmt = $conn->prepare("INSERT INTO  password_info( username, password, website) VALUES(?,?,?);" );
        $stnmt->bind_param("sss", $username, $password, $website);
        
    }

}