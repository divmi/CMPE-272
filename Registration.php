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

    <div id="intro" class="basic-1">
        <form id="userForm" method="post" action="MarketRegistration.php" data-toggle="validator" data-focus="false">
            <?php if (isset($_GET['error'])) {?>
            <p class="error"><?php echo $_GET['error']; ?></p>
            <?php }?>

            <?php if (isset($_GET['success'])) {?>
            <p class="success"><?php echo $_GET['success']; ?></p>
            <?php }?>

            <div class="container" style="margin-left:400px">
                <div class="row">
                    <div class="col-lg-8">
                        <table style="width:500px">
                            <tbody>
                                <tr>
                                    <td>
                                        <label for="firstName">First Name</label>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control-input" id="firstName" name="firstName"
                                            required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="lastName">Last Name</label>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control-input" id="lastName" name="lastName"
                                            required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="email">Email</label>
                                    </td>
                                    <td>
                                        <input type="email" class="form-control-input" id="email" name="email" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="userName">User Name</label>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control-input" id="userName" name="userName"
                                            required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="email">Password</label>
                                    </td>
                                    <td>
                                        <input type="password" class="form-control-input" id="password" name="password"
                                            required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="address">Address</label>
                                    </td>
                                    <td>
                                        <input type="textarea" class="form-control-input" id="address" name="address"
                                            required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="homePhone">Home Phone</label>
                                    </td>
                                    <td>
                                        <input type="number" class="form-control-input" id="homePhone" name="homePhone"
                                            min="1000000000" max="9999999999" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="cellPhone">Mobile Number</label>
                                    </td>
                                    <td>
                                        <input type="number" class="form-control-input" id="cellPhone" name="cellPhone"
                                            min="1000000000" max="9999999999" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> <button type="submit"
                                            class="form-control-submit-button">Register</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> <a class="" href="index.php">Already Registered?Login</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="form-message">
                <div id="cmsgSubmit" class="h3 text-center hidden"></div>
            </div>
        </form>
    </div>

</body>

</html>