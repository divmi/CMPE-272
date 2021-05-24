<?php
session_start();

if ($_GET["customerId"]) {
    $session_user = $_GET["customerId"];
    echo $session_user;
    //$query = sprintf("SELECT password FROM users WHERE id = %s LIMIT 1;", $session_user);
    header("Location: http://mittaldivya.com/CMPE-272");
    // if ($query_run = mysqli_query($conn, $query)) {
    //     $data = mysqli_fetch_assoc($query_run);

    //     $str_tok = sprintf("%s:%s", $session_user, $data['password']);
    //     $token = md5($str_tok);

    //     // if ($token != $_COOKIE['auth_token']) {
    //     //     header("Location: http://esp.hetjagani.com/flyaway/index.php");
    //     // }
    // }
} else {
    // header("Location: http://www.nathandiamond.com/classes/272/company/marketplace/customerLogin.php");
}