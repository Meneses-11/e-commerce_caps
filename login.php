<?php
    session_start();
    $_SESSION["user"] = "login";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="bg-secondary-subtle p-5 rounded-5" style="width: 25rem">
        <div class="d-flex justify-content-center">
            <img src="assets/logicon.png" alt="logicon" style="height: 7rem">
        </div>
    
        <div class="text-center fs-1">
            <h1>Login</h1>
        </div>
        <form action="" method="POST">
            <div class="input-group">
                <div class="input-group-text bg-danger">
                    <img src="assets/user.png" alt="user" style="height: 1rem">
                </div>
                <input id="email" class="form-control" type="text" name="email" placeholder="Enter your E-mail">
            </div>
            
            <div class="input-group mt-2">
                <div class="input-group-text bg-danger">
                    <img src="assets/password.png" alt="password" style="height: 1rem">
                </div>
                <input id="password" class="form-control" type="password" name="password" placeholder="Enter your password">
            </div>
            <input type="submit" name="btnIngresar" class="btn btn-danger text-white w-100 mt-3 shadow-sm" value="Login">
        </form>
        <?php include "controlador.php"; ?>
    </div>
</body>
</html>