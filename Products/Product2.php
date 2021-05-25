<!DOCTYPE html>
<html>

<head>
    <?php
require '../Auth.php';
include '../Cookie.php';
include '../review.php';
addLastVisited("Industry", "Products/Product2.php");
addProductIntoDataBase("Classic Industry", "Products/Product2.php");
addLastVistedProductToCommonDB("Product2");
?>
    <title>Classic Industry</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext"
        rel="stylesheet">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/fontawesome-all.css" rel="stylesheet">
    <link href="../css/swiper.css" rel="stylesheet">
    <link href="../css/magnific-popup.css" rel="stylesheet">
    <link href="../css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
    <link rel='stylesheet'
        href='https://raw.githubusercontent.com/kartik-v/bootstrap-star-rating/master/css/star-rating.min.css'>

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
                    <a class="nav-link page-scroll" href="../showUserFromALLSites.php">Users</a>
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
            <div class="col-lg-5" style="
                    margin-top: -60px;">
                <img style="width: 600px;
                    padding: 10px;
                    margin-top: 80px;" src="../images/Industry.jpeg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-6">
                <div class="row">
                    <h3 style="margin-right: 370px;
    margin-left: 10px;">Classic Industry</h3>
                    <?php
getAverageRating("http://www.nathandiamond.com/classes/272/company/api/getReviews.php/?siteId=3&productId=Product2")
?>
                </div>
                <hr class="line-heading">
                <h6>What is Industry Solution provider</h6>
                <p>An industry – or sector – is the whole of all economic activities by companies, people, and
                    organizations involved in the production of goods and services for a particular field.
                    Industries
                    are usually categorized by the goods and services they produce.
                </p>
                <h6>Feature provided by our Compamny</h6>
                <p>Earlier this year, after careful consideration and planning, we added a strategic focus on
                    manufacturing. Given the large number of customers in this industry, and the technological
                    transformation occurring with our clients in this space, the development of a specialized
                    practice
                    was a logical move for us. In the coming months, we’ll continue to make investments in our
                    manufacturing practice with solution development, resources, and employee training. In keeping
                    with
                    our history of hiring for industry-specific experience, we brought on Ryan Spurr to lead the
                    charge—an industry veteran with over 15 years of manufacturing experience. We’re leveraging
                    Ryan’s
                    expertise in manufacturing, supply chain, engineering, and quality to transform the way we
                    engage
                    with and bring value to our manufacturing clients.

                    This is an incredible time to work in technology. Innovation is disrupting entire industries and
                    there is gigantic potential for our clients to increase efficiency, reduce cost, and transform
                    customer experience. Capitalizing on technology’s potential requires partnering with a solution
                    provider who “speaks the language” and has experts on staff who have line of sight into industry
                    best practices.

                    At Connection, our Industry Solutions Group has that expertise, and we’re working tirelessly to
                    keep
                    a pulse on healthcare, retail, and manufacturing so we can deliver an experience that will
                    exceed
                    customer expectations. We hope you can be part of the conversation we’re having in these
                    industries,
                    whether it be at a partner meeting, customer event, or at an industry meetup. We’re passionate
                    about
                    these vertical markets, and we know you are too.

                </p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Call us to know more about our package deals</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
                <div class="col-lg-4">
                    <form action="addReview.php" method="post">
                        <input type="hidden" name="product" value="Product2" />
                        <p>Review:</p>
                        <textarea name="review" id="review" rows="4" cols="50"></textarea><br><br>
                        Rating (1 - 5): <input type="number" id="rating" name="rating" min="1" max="5"><br><br>
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
getReviews("http://www.nathandiamond.com/classes/272/company/api/getReviews.php/?siteId=3&productId=Product2");
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
</body>

</html>