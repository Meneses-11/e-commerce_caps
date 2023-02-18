<?php
    session_start();

    if($_SESSION['user'] == 'asd'){
    } else{
        header("Location: index.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Importo chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Tipografía 1 -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk&display=swap" rel="stylesheet">
    <!-- Tipografía 2 -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Space+Grotesk&display=swap" rel="stylesheet">
    <!-- Stilos -->
    <link rel="stylesheet" href="css/styleAdmin.css">
</head>

<body>
    
    <!-- NavBar de Bootstrap -->
    <nav class="navbar navbar-expand-lg" style="background-color: #EE1A1A" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://www.facebook.com/profile.php?id=100045146745721&mibextid=ZbWKwL">
                <img src="assets/logo1.png" alt="logo1" width="30" height="30" class="d-inline-block align-text-top">
                StyleCaps
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                
                <li class="nav-item">
                    <a class="nav-link" href="">2019</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">2020</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">2021</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">2022</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Sign off</a>
                </li>

            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>

    <div class="title1" id="title1">
        <h1>Welcome Admin!!!</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="infLuna">
                    <img class="imagen" src="assets/img1.jpg" alt="produc 1">
                    <div class="informacion">
                        <p>Luna</p>
                        <p class="precio">$180<span>.99</span></p>
                    </div>
                </div>
            </div>    
            <div class="col" id="produc">
                <div class="infGraf">
                    <canvas id="myChart" width="600" height="350"></canvas>
                </div>
            </div>
                
        </div>
    </div> 
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.2.1/chart.min.js" integrity="sha512-v3ygConQmvH0QehvQa6gSvTE2VdBZ6wkLOlmK7Mcy2mZ0ZF9saNbbk19QeaoTHdWIEiTlWmrwAL4hS8ElnGFbA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/grafica.js"></script>
</body>
</html>
