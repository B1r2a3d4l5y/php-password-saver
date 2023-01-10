<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/view.css">
    <title>View page for password saver</title>

</head>
<body>
    <div class="container-fluid">
        <div class="row">
                 <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Website</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "php/database.php";
                    $result = $conn->query("SELECT * FROM password_info;");
                    while($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>". $row["id"] . "</td>";
                        echo "<td>". $row["username"] . "</td>";
                        echo "<td>" . $row["password"] . "</td>";
                        echo "<td>" . $row["website"] . "</td>";
                        echo "<td><a class='delete btn btn-danger' href='php/delete.php?id=".$row['id']. "'>Delete</a>";
                    }
                    ?>
                </tbody>
            </table>


            </form>
           
        </div>
    </div>

    
</body>
</html>