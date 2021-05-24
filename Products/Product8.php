<!DOCTYPE html>
<html>

<head>
    <?php
require '../Auth.php';
include '../Cookie.php';
addLastVisited("CasualWear", "Products/Product8.php");
addProductIntoDataBase("CasualWear", "Products/Product8.php");
addLastVistedProductToCommonDB("Product8");
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
                    <a class="nav-link page-scroll " href="../Users.php">Users</a>
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
                    margin-top: 80px;" src="../images/Clothes.jpeg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-6">
                <h3>Casual Bussiness Solutions</h3>
                <hr class="line-heading">
                <h6>What is Casual Clothes Bussiness Solutions</h6>
                <p>It can be a daunting thought to think of starting a clothing business. However, it’s all worth it in
                    the end because few things can match the satisfaction you get when you do your first sample run and
                    then sell your first product.

                    All it takes is knowing what it takes and where you start. By taking the right steps, you can start
                    your clothing line startup and scale it up to mammoth proportions. Here are a few garment business
                    tips that can take you from zero to a well-recognized clothing brand.
                </p>
                <h6>Create a Budget and a Business Plan</h6>
                <p>f you’re going to just try out different designs and test them among a few people, then there isn’t
                    much need for coming up with a full-scale business plan. However, it is advisable that you do create
                    one. There’s always the chance that your idea will explode and scale up rapidly, making it necessary
                    to be prepared before that happens. If you aren’t prepared, you’ll just hold on for dear life as
                    your business launches uncontrollably for the stars.

                    One of the most important things to remember about the fashion industry is that it’s very hard to
                    predict. Your business plan and budget should, therefore, be as flexible as you can make them.

                    The Budget

                    For the first couple of months, you should try to keep things as simple as you can. Start with a
                    single design, manufacture or buy it, work to get great feedback, and grow from there. It’s a much
                    simpler route to take than trying to come up with a whole catalog from scratch.

                    You can start with a fixed figure for your funding, and then try to figure out how you will spend
                    it. Remember to make your budget as flexible as you can. Whether you’re planning to design and
                    manufacture the clothes yourself or are planning to buy them in wholesale from a designer, start
                    small and keep things basic, growing instead with your demand.

                    The Business Plan

                    With the business plan, just as with the budget, you should start with the basics. Have an overview
                    of your business that includes the executive summary and an outline of how you will start, grow, and
                    scale your business.

                    You should also include any market analysis you’ve done. Be as data-oriented as possible and keep
                    your data concrete. You should also collaborate with external sources if you can.

                    Include in your plan an outline of who is in your business and what they do for your business. You
                    should also include the products you will deal in, including any plans you have for future branding,
                    marketing, and sales.

                    You should also have a section on finances where you outline the current financial position of your
                    business, your priorities for the growth of the business, and how external investments will help
                    your business along.

                    Keep Your Business Organized
                    Your startup should be as well organized as you can make it. Here are a few things to consider
                    seriously:

                    Where is your business located? Will it be online, have a physical location, or some combination of
                    both?
                    How is your business going to work? Will you be an online retailer with your own website? Will you
                    sell on social media? Will you open a bricks and mortar stall? Research all the rules related to
                    clothing businesses for both online and physical businesses.
                    Who’s in charge of the business? Even if you’re the main person, are there other key people helping
                    you?
                    Do you have a product catalog? You should be aware of your products and how you plan to manufacture
                    them, stock them, and store them.
                    What plans do you have for sales and marketing?
                    How well is your business insured?
                    Where are you getting your funding from and how much do you currently have?
                    Design Your Products and Brand
                    This is probably the most exciting part of the whole business. No matter how many designs you have
                    in mind, start to get them on paper as sketches. Once you’re feeling a little more confident about
                    your designs, you can turn them into nailed down sketches using software like Illustrator.

                    When your sketches are finished, consider preparing the ‘tech pack’; the basic info that you’re
                    going to send to the manufacturer. It should have product details as well as technical
                    specifications.

                    When you’re done designing your products, you can start designing your brand; yet another creative
                    venture that you will most definitely enjoy.

                    Manufacture Your Product
                    It’s time to take your product to the factory. Note that you don’t have to do this if you‘re
                    planning to manufacture the product yourself or if you’re going to buy wholesale clothes and then
                    retail them.

                    You can start your search for the right manufacturer among your network of contacts. The
                    manufacturer is important, so figure out what kind of manufacturer you need, whether craftsman,
                    artisan, or large commercial company.

                    Once you do pick someone, get them to make you a sample, They can do a small batch of your different
                    designs for you then you can compare this to what you’re getting from other manufacturers.

                    You should think seriously about the kind of customer you will be looking to sell your products to.
                    What look and feel do they want in their clothes? Are they looking for a complete purchase
                    experience? Whatever it is they want, base your brand on a healthy mix of intuition and research,
                    within your budget, of course. Try to be as consistent as you can.

                    Scale your Business
                    Once your clothing business is ready and stable, you should start thinking about scaling, where you
                    will be taking larger orders and making products on a larger scale.

                    Reflect on the direction of your business before you consider making any big moves. The first few
                    seasons are best taken by keeping things simple. Give yourself time to settle in and be comfortable
                    with the reality of running your own clothing business, going through such things as hiring your
                    first employee and so on. As you get more and more comfortable, scaling can be as simple as adding a
                    product line or expanding to a new market. It will all come soon enough. Take it slow

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