<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta name="robots" content="noindex, nofollow">
    <!-- Include CSS File Here -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Include CSS File Here -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src=“js/login.js"></script>
    <script>
    $(function() {
        $("#header").load("header.php");
        $("#footer").load("footer.php");
    });
    </script>

</head>

<body>
    <div id="header"></div>
    <div class="container">
        <div class="main">
            <form class="form" method="post" action="login1.php">
                <?php if (isset($_GET['error'])) {?>
                <p class="error"><?php echo $_GET['error']; ?></p>
                <?php }?>
                <h2>Create Login Form Using jQuery</h2>
                <label>Email :</label>
                <input type="text" name="email" id="email">
                <label>Password :</label>
                <input type="password" name="password" id="password">
                <input type="submit" name="login" id="login" value="Login">
            </form>
        </div>
    </div>
    <div id="footer"></div>
</body>

</html>