
<?php
 $fieldsEmptyErr="";$usernameEmptyErr = "";   $emailemptyErr = ""; $invalidemailErr= ""; $passwordErr = ""; $websiteErr = "";
if(isset($_POST["save"])) {
    include "database.php";
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $website = $_POST["wbsite"];
    // all fields are empty
    if(empty($username)|| empty($email)|| empty($password)|| empty($website)) {
        $fieldsEmptyErr = "Fields are empty. Please fill them in.";
        echo $fieldsEmptyErr;
        header("Location:../index.php?passwordsaver=fieldsempty");
    } else {
        if(empty($uusername)) {
            $usernameEmptyErr="Username field is empty. Please fill them in";
            echo $usernameEmptyErr;
            header("Location:../index.php?passwordsaver?usernameEmpty");

        } else {
            if(empty($email)) {
                $emailemptyErr = "Email field is empty. Please fill them in";
                echo $emailemptyErr;
                header("Location:../index.php?passwordsaver=emailEmpty");

            } else {
                if(!filter_has_var($email, FILTER_VALIDATE_EMAIL)) {
                $invalidemailErr = "Invalid email. Please check your email";

                } else {
                    if( empty($password) ) {
                        $passwordErr = "Password field is empty. Please fill them in";
                        echo $passwordErr;
                        header("Location:../index.php?passwordsaver=passwordempty");

                    } elseif($empty($website)) { 
                        $websiteErr = "Website field is empty. Please fill it in";
                        echo $websiteErr;
                        header("Location:../index.php?passwordsaver=websiteEmpty");

                    } else {
                        if( $stmt=$conn->prepare("INSERT INTO password_info(username, email, password, website)")) {
                            $stmt->bind_param("ssss", $username, $email, $password, $website);
                            $stmt->execute();
                            $stmt->close();
                        }
                    }
                }
            }
        }
    }
}