<!DOCTYPE html>
<html>

<head>
    <div id="project-1" class="form-2">
        <?php
$ad_name = "Products/Product1.php"; //comes from $_GET[]

// if the cookie exists, read it and unserialize it. If not, create a blank array
if (array_key_exists('recentviews', $_COOKIE)) {
    $cookie = $_COOKIE['recentviews'];
    $cookie = unserialize($cookie);
    $MostVisitedSite = array();
} else {
    $cookie = array();
    $MostVisitedSite = array(
        "Products/Product1.php" => 0,
        "Products/Product2.php" => 0,
        "Products/Product3.php" => 0,
        "Products/Product4.php" => 0,
        "Products/Product5.php" => 0,
        "Products/Product6.php" => 0,
        "Products/Product7.php" => 0,
        "Products/Product8.php" => 0,
        "Products/Product9.php" => 0,
        "Products/Product10.php" => 0,
    );
}
//echo $MostVisitedSite;
// add the value to the array and serialize
$cookie[] = $ad_name;
$cookieString = serialize($cookie); /* changed $cookie to $cookieString */

// save the cookie
setcookie('recentviews', $cookieString, time() + 360000, '/');
//setcookie('mostvistedsites', $MostVisitedSite, time() + 360000, '/'); /* insert $cookiestring */

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
    <div class="row">
        <div class="col-lg-5">
            <img style="width: 600px;
                    padding: 10px;
                    margin-top: 80px;" src="../images/Banking.png" alt="alternative">
        </div> <!-- end of col -->
        <div class="col-lg-6">
            <h3>Online Banking</h3>
            <hr class="line-heading">
            <h6>What is business online banking</h6>
            <p>Online business banking offers many of the same services as traditional business banking, such as a
                business checking account, but the banks' operations are entirely online. You apply for an account
                on the banks' website and, once your account is approved, access it via a web browser or mobile app.
            </p>
            <h6>What features does online banking provide?</h6>
            <p>The concept of online banking is nothing new. For years now, most traditional banks have offered an
                online component for users to easily access their account balances, transfer funds between accounts,
                accept direct deposit and pay bills online. But these features usually came with the expectation
                that you would step into a physical branch at some point. Regardless of the online functionality,
                the physical bank locations were still the top of a user's interaction with the bank, and bank
                officials usually saw those interactions as a time to upsell customers on items like additional
                lines of credit.

                Digital-only banking doesn't come with that expectation. Since there are no physical branches,
                transactions can be conducted at the speed of the internet. Without the overhead of owning and
                operating a physical branch, online-only banking customers often don't have to deal with additional
                fees. In fact, many online-only banks have eliminated banking fees, including overdraft fees,
                monthly maintenance fees and transaction fees in some cases. Online business checking accounts are
                regularly provided with a business debit card without any hint of a monthly fee.

                "There's a different value proposition when you're talking about the differences between someone who
                wants to interact face to face with a banker and needs explanations ... but I think that today the
                nature of small business is changing so much, and entrepreneurs are younger and more tech savvy,"
                said Bryan Crumpler, chief operating officer at online banking platform Azlo. "The education and
                rise of other digital platforms have made it a lot easier to describe to folks what banking really
                is, and because we are 100% free, there's really nothing to hide or have to explain."

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