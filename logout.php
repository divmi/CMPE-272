<?php

session_start();

if (isset($_SESSION['isLogged'])) {
    unset($_SESSION['isLogged']);
}

session_destroy();

header('location: index.php');