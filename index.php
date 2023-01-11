<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>password saver</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <form class="form col-lg-6 col-md-6 col-sm-12" action="php/add.php" method="POST" >
                <h1 class=password_header>Save your passwords here</h1>
                <label for="username" class="username col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <input type="text" class="form_input" name="username" placeholder="Enter username">
                    </label>
                    <label for="email" class="email col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <input type="text" class="form_input" name="email" placeholder="Enter your email">
                    <label>
                    
                        <label for="password" class="password col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <input type="password" class="form_input" name="password" placeholder="Enter your password">
                        </label>
                        <label for="website" class="website col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <input type="text" class="form_input" name="website" placeholder="Enter website">

                        </label>
                        <button type="submit" class="save btn btn-success" name="save" >Save</button>
                        <a class="view  btn btn-info" name="view" href="view.php">View</a>
                        


        </div>
        <div>
    
</body>
</html>