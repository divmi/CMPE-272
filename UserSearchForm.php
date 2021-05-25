<!DOCTYPE html>
<html>

<head>
    <title>Registration system PHP and MySQL</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext"
        rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <link rel="icon" href="images/favicon.png">
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
        <a class="navbar-brand logo-image" href="home.php"><img src="images/logo.svg" alt="alternative"></a>

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
                    <a class="nav-link page-scroll" href="home.php#header">HOME <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="home.php#intro">INTRO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll " href="home.php#services">SERVICES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="home.php#projects">PRODUCTS</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link page-scroll" href="home.php#contact">CONTACT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll active" href="showUserFromALLSites.php">Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="market.php">MarketPlace</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="logout.php">Logout</a>
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
    <a class="navbar-brand logo-image" href="home.php"><img src="images/logo.svg" alt="alternative"></a>

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
                <a class="nav-link page-scroll" href="home.php#header">HOME <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="home.php#intro">INTRO</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="home.php#services">SERVICES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="home.php#projects">PRODUCTS</a>
            </li>

            <li class="nav-item">
                <a class="nav-link page-scroll" href="home.php#contact">CONTACT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="showUserFromALLSites.php">Users</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="market.php">MarketPlace</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="logout.php">Logout</a>
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

    <div id="intro" class="basic-1">
        <div class="container">

            <form class="form" action="" method="post">
                <table style="width: 400px;">
                    <tbody>
                        <tr>
                            <td><input class="form-control" type="search" placeholder="Search" aria-label="Search"
                                    id="searchValue" name="searchValue" value=""></td>
                            <td><button class="form-control-submit-button" name="search" type="submit">Search</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
            <div class="row">

                <div class="col-xs-12">
                    <table style="width: 1200px;" class="table table-bordered table-hover">
                        <thead>
                            <tr class="success">
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Home Phone</th>
                                <th>Cell Phone</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

include 'DataBaseConnection.php'; // includes the connection.php file to connect to the database
$conn = OpenCon();
// query to database and prepares and executes
if (isset($_POST['search'])) {
    $search_value = $_POST['searchValue'];
    $query = "SELECT * FROM UserRegisterationTable WHERE (`FirstName` LIKE '%$search_value%') OR (`LastName` LIKE '%$search_value%')  OR (`Email` LIKE '%$search_value%')  OR (`HomePhone` LIKE '%$search_value%')  OR (`CellPhone` LIKE '%$search_value%');";
    $result = mysqli_query($conn, $query);

} else {
    $query = "SELECT * FROM UserRegisterationTable";
    $result = mysqli_query($conn, $query);
}
?>

                            <!--start of row that you need to include for each item returned from the query-->


                            <?php

while ($data = mysqli_fetch_array($result)) {
    echo '<tr>';
    echo '<td>' . $data["FirstName"] . '</td>';
    echo '<td>' . $data["LastName"] . '</td>';
    echo '<td>' . $data["Email"] . '</td>';
    echo '<td>' . $data["Address"] . '</td>';
    echo '<td>' . $data["HomePhone"] . '</td>';
    echo '<td>' . $data["CellPhone"] . '</td>';

    echo '</tr>';
}

?>
                            <table>
                                <tbody>
                                    <tr>

                                    </tr>

                                </tbody>
                            </table>
                </div>
            </div>
</body>

</html>