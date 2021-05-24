<?php
include 'DataBaseConnection.php'; // includes the connection.php file to connect to the database
$conn = OpenCon();

$email = $_POST['email']; // Fetching Values from URL.
$password = $_POST['password'];
$pattern = '/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Z]).{10,20}$/';
if (!preg_match($pattern, $password)) {
    header("Location: mainpage.php?error= Incorrect password format");
} else {
// Matching user input email and password with stored email and password in database.
    $query = "SELECT * FROM Login WHERE email='$email' AND password='$password'";
    echo $query;
    $result = mysql_query($conn, "SELECT * FROM Login WHERE email='$email' AND password='$password'");
    $data = mysql_num_rows($result);
    if ($data == 1) {
        header("Location: AllUsers.php");
    } else {
        header("Location: mainpage.php?error= Incorrect username or password");
    }
}
mysql_close($connection); // Connection Closed.