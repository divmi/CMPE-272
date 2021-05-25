<?php
session_start();
if ($_SESSION['customerId'] == null || $_SESSION['customerId'] == 0) {
    //header("Location: http://mittaldivya.com/CMPE-272");
} else {
    // header("Location: http://www.nathandiamond.com/classes/272/company/marketplace/customerLogin.php");
}