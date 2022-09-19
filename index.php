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
    <title>Blockchain E-library</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../xampp/htdocs/work/all.min.css">
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
                <form class="d-flex col-md-3 col-sm-6" id>
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                </form>
                
                <ul class="navbar-nav ml-auto">
        
                    
                    <li class="nav-item">
                        <a class="nav-link active" href="home">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about">ABOUT</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="services">SERVICES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="demo">DEMO</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="logout">LOGOUT</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="image/car1.jpeg" id="edit" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1><b>BLOCKCHAIN TECHNOLOGY</b></h1>
                    <p id="car">Blockchain is the core of crypto industry.</p>

                    <a href="learn more 1.html"><button class="button">Learn More</button></a>

                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="image/car2.jpg" id="edit" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1><b>BLOCKCHAIN SECURITY</b></h1>
                    <p id="car">Decentralization in Blockchain makes it highly secured.</p>

                    <a href="learn more 2.html"><button class="button">Learn More</button></a>

                </div>
            </div>
            <div class="carousel-item">
                <img src="image/nft11.jpg" id="edit" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1><b>NFTS</b></h1>
                    <p id="car">Representative of arts,digital content with value.</p>

                    <a href="learn more 3.html"><button class="button">Learn More</button></a>


                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>



    <div class="container-fluid">
        <div class="row jumbotron" id="trade">
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
                <P style="font-size: 20px;">We have exclusive offers for our users, we buy and sell crypto-currency at any time 
                    and at a affordable price.<br>Trading with us is secure and Guaranteed.
                </P>
            </div>
           
        </div>
    </div>
    <br>
    

    <div class="container-fluid padding">
        <div class="row welcome text-center">
            <div class="col-12">
                <h1 class="display-4"><b>Blockchain E-library</b></h1>
            </div>
            <hr>
            <div class="col-12">
                <p class="lead">Blockchain e-library can be likely to be an educational platform where you gain exposure on blockchain
                    works, its advantages and how relevant it is. This platform supplies you with e-books enough to guide you also we will 
                    focus on:
                    </p>
            </div>
        </div>
    </div>
<br>
    <div class="container-fluid padding">
        <div class="row welcome text-center padding">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <i class="fas fa-coins fa-2x"></i>
                <h3>CRYPTO_CURRENCY</h3>
                <p>Basic knowldge and how to trade</p>

            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <i class="fas fa-lock fa-2x"></i>
                <h3>BLOCKCHAIN SECURITY</h3>
                <p>Purpose of decentralization</p>

            </div>
            <div class="col-sm-12 col-md-4">
                <i class="fas fa-palette fa-2x"></i>
                <h3>NFTS</h3>
                <p>Representation of arts, Media in Blockchain</p>

            </div>
        </div>
        <hr class="my-4">
    </div>

    <div class="container-fluid padding">
        <div class="row padding">
            <div class="col-lg-6 mt-3">
                <h2> Aims & Objectives</h2>
                <p>This project tends to aware and educate the black race in particular on blockchain network, informing
                    them on how it has and will be of help e.g Storing their asset in foreign currency, making blockchain network
                    real and relevant.
                </p>
                <p>To enlighten people on the:.</p>
                <P>1. Basics of blockchain,how to trade,its risk and profits <br>
                   2. Aware people on blockchain security, making them realise how secure it is <br>
                   3. Allow people download e-books online 
                </p>
                <br>
                
            </div>
            <div class="col-lg-6" >
                <img src="image/aim.jpg"id="pix" class="image-fluid">
            </div>
        </div>
    </div>

    <hr class="my-4">
    <figure>
        <div class="fixed-wrap">
            <div id="fixed">

            </div>
        </div>
    </figure>


    <div id="emoji" class="collapse">
        <div class="container-fluid" padding>
            <div class="row text-center">
                <div class="col-sm-6 col-md-3">

                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" padding>
        <div class="row welcome text-center">
            <div class="col-12">
                <h1 class="display-4"><b>LIBRARY SECTION</b></h1>
            </div>
            <hr>
        </div>
    </div>

    <div class="container-fluid padding">
        <div class="row padding">
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="image/bt3.jpg">
                    <div class="card-body">
                        <h4 class="card-title">BLOCKCHAIN | CRYPTO_CURRENCY</h4>
                        <p class="card-text">This section provides you with adequate guide (e-books) on blockchain and crypto-currency.How to trade coins, risks you
                            must know and its benefits to the user
                            
                        </p>
                        <a href="card.html" class="btn btn-outline-secondary">Download PDFs</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="image/bs.jpg">
                    <div class="card-body">
                        <h4 class="card-title">BLOCKCHAIN STRUCTURE | SECURITY</h4>
                        <p class="card-text">This is one of the core aspect of blockchain technology, this is one major aspect that people need to be educated
                            about and here you have it </p>
                        <a href="card 2.html" class="btn btn-outline-secondary">Download PDFs</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="image/nf.jpg">
                    <div class="card-body">
                        <h4 class="card-title">NON-FUNGIBLE-TOKEN</h4>
                        <p class="card-text">This is a platform that entertains arts,media etc, registering it as a physical asset on blockchain.
                            It is exciting to learn about because it is one of the major income generator in Blockchain.
                        </p>
                        <a href="card 3.html" class="btn btn-outline-secondary">Download PDFs</a>
                    </div>
                </div>
            </div>
        </div>
    </div><br>
    <br>

    <div class="container-fluid padding">
        <div class="row text-center padding">
            <div class="col-12">
                <h2><b>Connect</b></h2>
            </div>
           
        </div>
    </div>

    <footer id="foot">
        <div class="container-fluid padding">
            <div class="row text-center padding">
                <div class="col-md-4">

                    <hr class="light">
                    <p>07089005271</p>
                    <p>adeyanjuphilip@gmail.com</p>
                    <p>Fudawa</p>
                    <p>Jos town</p>
                </div>
                
                <div class="col-md-4">
                    <hr class="light">
                    <h5>Our Hours</h5>
                    <hr class="light">
                    <p>Monday-friday: 9am-5pm</p>
                    <p>sarturdays:10am-4pm</p>
                    <p>sunday: closed</p>
                </div>
                <div class="col-12">
                    <hr class="light">
                    <h5>&copy:Blockchain e-library</h5>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>