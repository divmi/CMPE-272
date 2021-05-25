<!DOCTYPE html>
<html>

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
    <title>Login Page</title>

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

<body style="font-family: arial">
    <!-- Text Logo - Use this if you don't have a graphic logo -->
    <!-- <a class="navbar-brand logo-text page-scroll" href="home.php">Aria</a> -->
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top top-nav-collapse">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="home.php">Aria</a> -->

        <!-- Image Logo -->
        <!-- <a class="navbar-brand logo-image" href="../home.php"><img src="../images/logo.svg" alt="alternative"></a> -->

        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <h2 style="text-align: center;color: white;margin-left: 400px;">Welcome to MarketPlace</h2>
            <!-- <ul class="navbar-nav ml-auto">

                <li class="nav-item">

                </li> -->
            <!-- end of dropdown menu -->
        </div>
    </nav>
    <!-- Text Logo - Use this if you don't have a graphic logo -->
    <!-- <a class="navbar-brand logo-text page-scroll" href="home.php">Aria</a> -->

    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div id="project-1" class="form-2 col-lg-5" style="margin-top:50px">
                <p style="font-size: 13pt">
                    Please login to view different products and services offered
                    <br />
                </p>
                <form action="Authenticate.php" method="post">
                    <?php if (isset($_GET['error'])) {?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php }?>
                    <strong>Username: </strong> <input class="form-control" name="USERNAME" required /><br />
                    <strong>Password: </strong> <input class="form-control" type="password" name="PASSWORD" required />
                    <input style="margin-top:20px" class="btn btn-primary" type="submit" name="submit" value="Login" />
                    <br />
                    <a class="" href="Registration.php">No account? Signup</a>

                </form>
            </div>
        </div>
    </div>

</body>

</html>