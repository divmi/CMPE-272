<?php 
if ( ! isset( $_POST['submitted'] ) ) 
header('Location: ' . $_SERVER['HTTP_REFERER']); 

$credentials = [ 
  'email' => 'admin', 
  'password' => 'admin' 
]; 

if ( $credentials['email'] !== $_POST['email'] OR $credentials['password'] !== $_POST['password'] ) { 
   header('Location: ' . $_SERVER['HTTP_REFERER']); 
    exit(); 
} 

session_start(); 

// Storing session data 
$_SESSION["isLogged"] = "1"; 

// login successful - redirect user to any page you want // replace 'home.php' with your landing page url 

header('Location:' . './Pages.php'); 

exit();