<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect("splitwise.c5rygpr3lt0j.us-west-1.rds.amazonaws.com", "admin", "abcd@12345", "TravelCompany");

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO UserInfo (FirstName, Email, LastName) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	// $_SESSION['username'] = $username;
  	// $_SESSION['success'] = "You are now logged in";
  	// header('location: index.php');

}
