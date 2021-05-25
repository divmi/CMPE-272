<?php
require 'Auth.php';
include 'Cookie.php';
session_start();

$petAdopt = "http://sarahlau-se.com/?page_id=156?id=" . $_SESSION['customerId'];
$alchemist = "http://www.nathandiamond.com/classes/272/company/home.php?id=" . $_SESSION['customerId'];
$flower = "http://transientsearch-env.eba-cdxnyivi.us-east-2.elasticbeanstalk.com/?id=" . $_SESSION['customerId'];
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
                <a class="nav-link page-scroll" href="market.php">MARKET <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll active" href="topProducts.php">TOP PRODUCTS <span
                        class="sr-only"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="./logout.php">LOGOUT <span class="sr-only"></span></a>
            </li>
    </nav>

    <div id="intro" class="basic-1">
        <div class="container" style="margin-left:7px">
            <table>
                <tbody>
                    <tr>
                        <td> <button type="submit" class="form-control-submit-button"
                                onclick="document.location='./topProducts.php?popular=r'" value="1">Top 5 Rated
                                Product</button>
                        </td>
                        <td> <button type="submit" class="form-control-submit-button"
                                onclick="document.location='./topProducts.php?popular=v'" value="2">Top 5 Visited
                                Product</button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
        <div class="col-xs-12" style="margin-left:23px">
            <table style="width: 1200px;" class="table table-bordered table-hover">
                <thead>
                    <tr class="success">
                        <th>Product Name</th>
                        <th>Market</th>
                        <th>Average Rating</th>
                        <th>Total Rating</th>
                        <th>Total Page Vist</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
if ($_GET["popular"]) {
    if ($_GET["popular"] == 'r') {
        getMostPopularProductsAcrossMarketPlace("http://www.nathandiamond.com/classes/272/company/api/getItems.php/?limit=5&order=r");
    } else {
        getMostPopularProductsAcrossMarketPlace("http://www.nathandiamond.com/classes/272/company/api/getItems.php/?limit=5&order=v");
    }

}
?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>
    <?php require 'footer.php'?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>

</html>