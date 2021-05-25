<?php
require 'Auth.php';
session_start();

$petAdopt = "http://sarahlau-se.com/?page_id=156?customerId=" . $_SESSION['customerId'];
$alchemist = "http://www.nathandiamond.com/classes/272/company/home.php?customerId=" . $_SESSION['customerId'];
$flower = "http://transientsearch-env.eba-cdxnyivi.us-east-2.elasticbeanstalk.com?customerId=" . $_SESSION['customerId'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description"
        content="Aria is a business focused HTML landing page template built with Bootstrap to help you create lead generation websites for companies and their services.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Our MarketPlace</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext"
        rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top top-nav-collapse">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <h2 style="text-align: center;color: white;margin-left: 400px;">Welcome to MarketPlace</h2>
        </div>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link page-scroll active" href="market.php">MARKET <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="topProducts.php?popular=r">TOP PRODUCTS <span
                        class="sr-only"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="./logout.php">LOGOUT <span class="sr-only">(current)</span></a>
            </li>
    </nav>
    <div id="services" class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">Different Products</div>
                    <h2>Choose The Service place That Suits Your Needs</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-6">

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/about.jpg" alt="alternative">
                        </div>
                        <div class="card-body" style="height:320px;width:335px">
                            <h3 class="card-title">Aria(By Divya Mittal)</h3>
                            <p>Aria is a top consultancy company specializing in business
                                growth using online marketing and conversion optimization tactics.Aria will help you for
                                your business growth.</p>
                            <a class="btn-solid-lg page-scroll" href="home.php">Visit</a>
                        </div>
                    </div>
                </div>
                <!-- end of card -->
                <!-- Card -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" style="height:220px;width:350px" src="images/hemakshiSite.jpeg"
                                alt="alternative">
                        </div>
                        <div class="card-body" style="height:320px;width:335px">
                            <h3 class="card-title">INFLORESCENCE (by Himakshi)</h3>
                            <p>INFLORESCENCE is an online plant shopping platform that offers home-ready plants and
                                provides premium flower delivery and plantation services.</p>
                            <a class="btn-solid-lg page-scroll" href="<?php echo $flower; ?>">Visit</a>
                        </div>
                    </div>
                </div>
                <!-- end of card -->
                <!-- end of row -->
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" style="height:220px;width:350px" src="images/NateSite.jpeg"
                                alt="alternative">
                        </div>
                        <div class="card-body" style="height:300px;width:335px">
                            <h3 class="card-title">Alchemy Solutions(by Nathon Diamond)</h3>
                            <p>The one-stop, mom-and-pop shop to take your alchemy and potion game straight to the top!
                            </p>
                            <a class="btn-solid-lg page-scroll" href="<?php echo $alchemist; ?>">Visit</a>
                        </div>
                    </div>
                </div>
                <!-- end of card -->
                <!-- Card -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" style="height:220px;width:350px" src="images/sarahSite.jpeg"
                                alt="alternative">
                        </div>
                        <div class="card-body" style="height:300px;width:335px">
                            <h3 class="card-title">FurEver Home(by Sarah Lau)</h3>
                            <p>Furever Home is an adoption center dedicated to connecting fur animals of every shape and
                                size to their furever homes.</p>
                            <a class="btn-solid-lg page-scroll" href="<?php echo $petAdopt; ?>">Visit</a>
                        </div>
                    </div>
                    <!-- end of card -->
                </div>
            </div>
        </div> <!-- end of container -->
    </div> <!-- end of services -->
    <?php require 'footer.php'?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>

</html>