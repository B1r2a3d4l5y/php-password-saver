 <?php
 if(isset($_GET["id"])) {
    include "database.php";
    $id = $_GET["id"];
    $query = $conn->query("DELETE FROM password_info WHERE id='$id'");


 }