<?php

    session_start();

    require('function.php');

    if(!isset($_SESSION['USER_ID'])) {
        redirect("login.php");
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services | Blockchain E-library</title>
    <link rel="stylesheet" href="services.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="image2/images (5).png" id="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <form class="d-flex col-md-6 col-sm-6">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-secondary" type="submit">Search</button>
                    </form>
                    <li class="nav-item">
                        <a class="nav-link" href="home">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="services">SERVICES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="demo">DEMO</a>
                    </li>
                   
                </ul>
            </div>
        </div>
    </nav>

    <div class="wrapper">
        <h1>Our services</h1>
        <p>
           Generally, we deal with everything Blockchain most especially cryptocurrency, we trade and we counsel, share ideas etc.
        </p>

            <div class="content-box">
                <div class="card">
                    <i class="bx bx-bar-chart bx-md"></i>
                    <h2>Marketing services</h2>
                    <p>We provide adequate marketing awareness program</p>
                        
                </div>

                <div class="card">
                    <i class="bx bx-laptop bx-md"></i>
                    <h2>Consulting services</h2>
                    <p>We help in directing users on how to analyse charts and know when to trade</p>
                </div>

                <div class="card">
                    <i class="bx bx-chart bx-md"></i>
                    <h2>Trade</h2>
                    <p>We trade and manage people's assets </p>
                        
                </div>

                <div class="card">
                    <i class="bx bx-line-chart bx-md"></i>
                    <h2>Sell cryptocurrency</h2>
                    <p>We sell cryptocurrency at a very affordable price</p>
                </div>

                <div class="card">
                    <i class="bx bx-coin bx-md"></i>
                    <h2>Buy cryptocurrency</h2>
                    <p>At a standard market price we also buy cryptocurrency</p>
                        
                </div>

                <div class="card">
                    <i class="bx bx-bar-chart bx-md"></i>
                    <h2>Educate </h2>
                    <p>We ensure we pass the best and reliable knowledge to our users</p>
                </div>
            </div>
    </div>
</body>

</html>