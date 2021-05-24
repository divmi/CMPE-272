<!DOCTYPE html>
<html>

<head>
    <?php
include '../Cookie.php';
addLastVisited("EventManagement", "Products/Product6.php");
addProductIntoDataBase("EventManagement", "Products/Product6.php");
addLastVistedProductToCommonDB("Product6");
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
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.php">Aria</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="../index.php"><img src="../images/logo.svg" alt="alternative"></a>

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
                    <a class="nav-link page-scroll" href="../index.php#header">HOME <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="../index.php#intro">INTRO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll " href="../index.php#services">SERVICES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="../index.php#projects">PRODUCTS</a>
                </li>

                <!-- Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="#about" id="navbarDropdown" role="button"
                        aria-haspopup="true" aria-expanded="false">ABOUT</a>
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
                    <a class="nav-link page-scroll" href="../index.php#contact">CONTACT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="../SecureRecords.php">Secure Clients Records</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll active" href="../Users.php">Users</a>
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
    <!-- <a class="navbar-brand logo-text page-scroll" href="index.php">Aria</a> -->

    <!-- Image Logo -->
    <a class="navbar-brand logo-image" href="../index.php"><img src="../images/logo.svg" alt="alternative"></a>

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
                <a class="nav-link page-scroll" href="../index.php#header">HOME <span
                        class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="../index.php#intro">INTRO</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="../index.php#services">SERVICES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="../index.php#projects">PRODUCTS</a>
            </li>

            <!-- Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle page-scroll" href="../index.php#about" id="navbarDropdown"
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
                <a class="nav-link page-scroll" href="../index.php#contact">CONTACT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="../SecureRecords.php">Secure Clients Records</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="../Users.php">Users</a>
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
                    padding: 10px;
                    margin-top: 80px;" src="../images/Events.jpeg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-6">
                <h3>vents Bussiness Solutions</h3>
                <hr class="line-heading">
                <h6>What is Events Bussiness Solutions</h6>
                <p>The event planning industry has been growing steadily for the past five years, and it is expected to
                    grow even further. With new business opportunities, you can also expect an increase in competition.
                    It is always important to stay on top of your game and adapt to the changing environment to make the
                    most of new opportunities and remain relevant in the marketplace.
                </p>
                <h6>Feature provided by our Compamny</h6>
                <p>When businesses want to expand, diversification of the services offered plays a key role in making it
                    successful. When you decided to be an event planner, you might have just wanted to focus on weddings
                    and anniversaries. Although this might have been successful over the years, the event planning
                    business doesn’t have to stop there.

                    Take a good look at the business environment in your area and see what opportunities exist. There
                    might be prospects of partnering with a marketing firm to engage in brand launch parties or even
                    corporate meetings. Further, if there is a high concentration of corporations in the area, it will
                    be a good idea to target these companies to add corporate events to your portfolio. Your knowledge
                    and experience will give you the necessary confidence to plan an event regardless of the nature of
                    the event.

                    If you have been doing corporate events, it would be a great idea to also cater to weddings and
                    other personalized events. There are so many opportunities out there like graduation parties,
                    educational seminars, workshops, conferences, and brand promotion, to name a few. Building clientele
                    in various industries will not only make your business more profitable, but it will also give you a
                    chance to do a lot of cross-promotion.

                    Never Stop Promoting
                    In a crowded business environment, everyone is fighting to be heard. So, promote your business as
                    much as possible to stay competitive. Engaging elements of social media like hashtags and blogs will
                    also help promote your business at no extra cost.

                    If you haven’t checked your digital footprint lately, it is time to see exactly where you stand.
                    Digital marketing is a great tool to help you become an industry leader. It’s a good idea to hire a
                    digital marketing agency to handle components like social media marketing, organic search, content
                    marketing, and clientele lead development. But if you can’t afford it right now, you can always
                    start learning how to do these marketing methods one by one.

                    If you are already blogging, you almost have content marketing covered. With a little bit of search
                    engine optimization, you can start directing traffic (potential clients) to your website. Each
                    experience has to be fresh and relevant to the readers, so keep updating your blog often and
                    regularly. Further, it wouldn’t hurt to add a promotional video on YouTube to promote your business.

                    Invest in email campaigns to target corporate clients; it will be money well spent if you get access
                    to the right database. You never know who will be checking their email after a morning meeting about
                    planning a large conference. Being at the right place at the right time, even if it’s through email,
                    can only turn into an opportunity.


                </p>

                <div class="testimonial-container">
                    <p class="testimonial-text">Call us to know more about our package deals</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->
</body>

</html>