<!DOCTYPE html>
<html>

<head>
    <?php
require '../Auth.php';
include '../Cookie.php';
include '../review.php';
addLastVisited("Restaurent Business Solutions", "Products/Product10.php");
addProductIntoDataBase("Restaurant", "Products/Product10.php");
addLastVistedProductToCommonDB("Product10");
?>
    <title>Restaurant Business Solutions</title>
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
                    <a class="nav-link page-scroll" href="../Users.php">Users</a>
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

            <li class="nav-item">
                <a class="nav-link page-scroll" href="../home.php#contact">CONTACT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="../Users.php">Users</a>
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
    <div id="project-1" class="form-2">
        <div class="row">
            <div class="col-lg-5">
                <img style="width: 550px;
                    padding: 10px;
                    margin-top: 80px;" src="../images/Restaurent.jpeg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-6">
                <div class="row">
                    <h3 style="margin-right: 200px;
    margin-left: 10px;">Restaurant Bussiness Solution</h3>
                    <?php
getAverageRating("http://www.nathandiamond.com/classes/272/company/api/getReviews.php/?siteId=3&productId=Product10")
?>
                </div>
                <hr class="line-heading">
                <h6>What is Restaurant Solution provider</h6>
                <p>For many businesses, expansion is part of the plan from day one. For restaurant owners, however,
                    thoughts of opening one or more new locations or adding new services such as catering or hosting
                    special events may not arise until the business has begun to establish itself. Then the challenge
                    becomes how to maintain the success of the initial operation while branching into new venues and
                    opportunities.This is why a restaurant strategic growth plan is key.
                </p>
                <h6>Feature provided by our Compamny</h6>
                <p>The technique that restaurants have favored in the past to chart their expansion plans is to find
                    what worked for some other restaurant and copy liberally from their playbook. However, it is no
                    longer enough simply to keep pace with the competition. One-third of all organizations act so slowly
                    that they miss opportunities and fail to mitigate new threats.
                    Expansion provides restaurant owners with a chance to think big and turn their great ideas into
                    reality. Yet making sure those dreams of growth don???t turn into nightmares requires a lot of
                    planning, a lot of studying, and a lot of flexibility. MBB Management explains that finding the
                    perfect restaurant strategic growth plan depends on the right mix of creativity, practicality, and
                    insight into the nature and potential of your business.
                    The restaurant industry changes so rapidly that any form of long-term planning is perilous. It???s
                    still important to have a plan that goes beyond the next month, quarter, and year. The key is to
                    build flexibility into the restaurant???s long-term growth strategy. Aaron Allen & Associates
                    recommends that restaurants establish a ???rolling??? 36-month plan in addition to the standard annual
                    initiatives that focus on cutting costs, boosting employee morale, improving efficiency, and
                    enhancing customer experiences.
                    By contrast, a restaurant???s 36-month plan imagines ways to transform the business through the
                    implementation of new processes, systems, and technologies. It considers the many ways the food
                    service industry is changing in response to the preferences and demands of customers, including
                    increased mobility, more payment options, new labor models, and automation of manual processes.
                    A principal goal of the restaurant???s long-term growth strategy is improving communications between
                    managers and workers, and among workers throughout the organization. It???s critical to have buy-in
                    from employees in the front and back of the house to ensure they understand the business???s plans for
                    growth and are committed to ensuring the plan???s success. Aaron Allen & Associates states that only
                    42 percent of restaurant managers and 27 percent of employees are given access to the company???s
                    strategic plan, which means most people in the company have no idea where it is heading.

                </p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Call us to know more about our package deals</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
                <div class="col-lg-4">
                    <form action="addReview.php" method="post">
                        <input type="hidden" name="product" value="Product10" />
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
getReviews("http://www.nathandiamond.com/classes/272/company/api/getReviews.php/?siteId=3&productId=Product10");
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
<!-- end of lightbox -->
</body>

</html>