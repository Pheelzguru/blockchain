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
    <title>About | Blockchain E-library</title>
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
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
                        <a class="nav-link active" href="about">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services">SERVICES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="demo">DEMO</a>
                    </li>
                   
                </ul>
            </div>
        </div>
    </nav>

    <div class="section">
        <div class="container">
            <div class="content-section">
                <div class="title">
                    <h1>About Us</h1>
                </div>
                <div class="content">
                    <h3>We buy and sell cryptocurrency at affordable prices</h3>
                    <p> We are a platform that provides you with every necessary thing you need to know about blockchain, we 
                        provide you with the basics knowledge, skills and even where you can trade with us.
                        We are a platform that ensures your safety and growth in cryptocurrency,we serve you with the right information
<br><br>
                        Secondly our services render are of recommendable qualities, i.e. live prices of all coins under the DEMO
                        section etc.
<br><br>
                        Lastly, we are always available to help, advise, instruct and give signals.
                    </p>
                        
                </div>
                <div class="social">
                    <a href="https://www.facebook.com/oluwaseun.ishola.52035"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com/AdeyanjuPhilz?s=09"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.telegram.com/@Pheelzguru"><i class="fab fa-telegram"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                    <a href="https://wa.me/message/4JUDYS6QFG2WH1"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
            <div class="image-section">
                <img src="image/about.jpg">
            </div>
        </div>
    </div>

</body>

</html>