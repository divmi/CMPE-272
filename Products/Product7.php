<!DOCTYPE html>
<html>

<head>
    <?php
require '../Auth.php';
include '../Cookie.php';
include '../review.php';
addLastVisited("Travel", "Products/Product7.php");
addProductIntoDataBase("Travel Company Solutions", "Products/Product7.php");
addLastVistedProductToCommonDB("Product7");
?>
    <title>Registration system PHP and MySQL</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext"
        rel="stylesheet">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/fontawesome-all.css" rel="stylesheet">
    <link href="../css/swiper.css" rel="stylesheet">
    <link href="../css/magnific-popup.css" rel="stylesheet">
    <link href="../css/styles.css" rel="stylesheet">

    <link rel="icon" href="./images/favicon.png">
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
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top top-nav-collapse">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="home.php">Aria</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="../home.php"><img src="../images/logo.svg" alt="alternative"></a>

        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="../home.php#header">HOME <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="../home.php#intro">INTRO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll " href="../home.php#services">SERVICES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll active" href="../home.php#projects">PRODUCTS</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link page-scroll" href="../home.php#contact">CONTACT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll " href="../showUserFromALLSites.php">Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="../market.php">MarketPlace</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="../logout.php">Logout</a>
                </li>
            </ul>
            <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="#your-link">
                        <span class="hexagon"></span>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="#your-link">
                        <span class="hexagon"></span>
                        <i class="fab fa-twitter fa-stack-1x"></i>
                    </a>
                </span>
            </span>
        </div>
    </nav>
    <!-- Text Logo - Use this if you don't have a graphic logo -->
    <!-- <a class="navbar-brand logo-text page-scroll" href="home.php">Aria</a> -->

    <!-- Image Logo -->
    <a class="navbar-brand logo-image" href="../home.php"><img src="../images/logo.svg" alt="alternative"></a>

    <!-- Mobile Menu Toggle Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
        aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-awesome fas fa-bars"></span>
        <span class="navbar-toggler-awesome fas fa-times"></span>
    </button>
    <!-- end of mobile menu toggle button -->

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link page-scroll" href="../home.php#header">HOME <span
                        class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="../home.php#intro">INTRO</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="../home.php#services">SERVICES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="../home.php#projects">PRODUCTS</a>
            </li>

            <!-- Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle page-scroll" href="../home.php#about" id="navbarDropdown"
                    role="button" aria-haspopup="true" aria-expanded="false">ABOUT</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="../terms-conditions.php"><span class="item-text">TERMS
                            CONDITIONS</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="../privacy-policy.php"><span class="item-text">PRIVACY
                            POLICY</span></a>
                </div>
            </li>
            <!-- end of dropdown menu -->

            <li class="nav-item">
                <a class="nav-link page-scroll" href="../home.php#contact">CONTACT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="../SecureRecords.php">Secure Clients Records</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="../showUserFromALLSites.php">Users</a>
            </li>
        </ul>
        <span class="nav-item social-icons">
            <span class="fa-stack">
                <a href="#your-link">
                    <span class="hexagon"></span>
                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                </a>
            </span>
            <span class="fa-stack">
                <a href="#your-link">
                    <span class="hexagon"></span>
                    <i class="fab fa-twitter fa-stack-1x"></i>
                </a>
            </span>
        </span>
    </div>
    </nav>
    <div id="project-1" class="form-2">
        <div class="row">
            <div class="col-lg-5">
                <img style="width: 600px;
                    padding: 10px;" src="../images/project-7.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-6">
                <div class="row">
                    <h3 style="margin-right: 250px;
    margin-left: 10px;">Travel Company Solutions</h3>
                    <?php
getAverageRating("http://www.nathandiamond.com/classes/272/company/api/getReviews.php/?siteId=3&productId=Product7")
?>
                </div>
                <hr class="line-heading">
                <h6>What is Travel Company Solutions</h6>
                <p>The tourism industry has undergone rapid growth of unsurpassed nature over the last several decades.
                    This has mainly been due to the advent of a ‘borderless’ world and increased information
                    dissemination about the majestic sceneries throughout the world, with the southern African region
                    being no exception.We provide solutions to grow your comapny
                </p>
                <h6>Feature provided by our Compamny</h6>
                <p>SoluTech intends to provide individual and group travel to leisure clients. Services and
                    products provided by Sephats will initially include pre-arranged tours, custom packages according to
                    clients specifications, travel consultation, and as time progresses making reservations for lodging
                    amongst other related services. Sephats Tours seeks to differentiate itself as the premier adventure
                    travel company in the greater Gaborone (Botswana) area.

                    We will be focusing on those foreign tourists seeking leisure travel and excursions whilst on
                    vacation in Botswana, with the intention of letting them see and appreciate the numerous attractions
                    in our country. Though we realize that the majority of our tourists come from South Africa we shall
                    be mainly targeting those from Europe and the Americas who often do not have transport or adequate
                    knowledge about the country, unlike their South African counterparts who often do. Hence we shall be
                    mainly targeting those who are not that mobile but wanting to see as many sites as possible. These
                    people often do not want to waste their money on hiring vehicles to move about by themselves, but
                    instead want to be escorted around places of interest by a reliable source. Hence the need to
                    professionally market ourselves and the services we provide, offering a service of uncompromised
                    nature.
                    We have identified competing companies, some firmly established, that fill the same needs as Sephats
                    Tours. We intend to market ourselves in such a way that with time competitor customers will choose
                    our service over competitors’ on the basis of our higher quality and informative excursions.

                    We foresee a slow initial growth in sales, as we strive to ensure we are known on the market, though
                    operating expenses will be relatively high, and a bump in our sales and revenue generation as we
                    spread our services during expansion.

                    Collection days are very important. We do not want to let our average collection days get above the
                    client’s actual subscription period under any circumstances. This could cause a serious problem with
                    cash flow, because our working capital situation is chronically tight. However, we recognize that we
                    cannot control this factor easily, because of the relationship we wish to create with our clients.



                </p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Call us to know more about our package deals</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
                <div class="col-lg-4">
                    <form action="addReview.php" method="post">
                        <input type="hidden" name="product" value="Product7" />
                        <p>Review:</p>
                        <textarea name="review" id="review" rows="4" cols="50"></textarea><br><br>
                        Rating (1 - 10): <input type="number" id="rating" name="rating" min="1" max="10"><br><br>
                        <button type="submit" class="form-control-submit-button" name="Review">Submit</button>
                        <br><br>
                    </form>
                </div>
                <!-- end of testimonials -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="slider" style="margin-top:-95px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h4>Read Our Customer Reviews</h4>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Card Slider -->
                        <div class="slider-container">
                            <div class="swiper-container card-slider">
                                <div class="swiper-wrapper">

                                    <?php
getReviews("http://www.nathandiamond.com/classes/272/company/api/getReviews.php/?siteId=3&productId=Product7");
?>
                                </div> <!-- end of swiper-wrapper -->

                                <!-- Add Arrows -->
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <!-- end of add arrows -->

                            </div> <!-- end of swiper-container -->
                        </div> <!-- end of sliedr-container -->
                        <!-- end of card slider -->

                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of slider -->
    </div>
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->
    <script src="../js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="../js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="../js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="../js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="../js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="../js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="../js/morphext.min.js"></script> <!-- Morphtext rotating text in the header -->
    <script src="../js/isotope.pkgd.min.js"></script> <!-- Isotope for filter -->
    <script src="../js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="../js/slider.js"></script>
    <!-- end of lightbox -->
</body>

</html>