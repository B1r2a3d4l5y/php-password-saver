<?php
$msg = "";
if(isset($_POST["save"])) {
    include 'database.php';
    $username = $_POST["username"];
    $password = PASSWORD_HASH($_POST["password"], PASSWORD_DEFAULT);
    $website = $_POST["website"];
    // check if all the fields are empty
  if(empty($username)|| empty($password)|| empty($website))  {
        $msg = "Fields are empty. Please fill them in";
        echo $msg;
        header("Location:../index.php?passwordsaver=fieldsempty");

    } else{
        if(empty($username)) {
            $msg = "Username field is empty. Please fill it in";
            echo $msg;
            header("Location:../index.php?passwordsaver=usernameempty");
        } else {
            if(empty($password)) {
                $msg = "Password field empty. Please fill it in.";
                echo $msg;
                header("Location:../index.php?passwordsaver=passwordempty");


            } 
            elseif(empty($website)) {
                $msg = "Website field is empty. Please fill them in";
                echo $msg;
                header("Location:../index.php?passwordsaver=websiteempty");

               

            } else {
                if($stmt = $conn->prepare("INSERT INTO password_info(username, password, website) VALUES(?,?,?);")) {
                    $stmt->bind_param("sss", $username, $password, $website);
                    $stmt->execute();
                    $stmt->close();

                }
           
                }
            
        }
    } 
}
    $conn->close();
