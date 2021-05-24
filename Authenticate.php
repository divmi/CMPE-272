<?php
extract($_POST);
$userVerified = 0;
// Send Username and Password to Nate's DB
//The url you wish to send the POST request to
$url = 'http://www.nathandiamond.com/classes/272/company/api/login.php';

//The data you want to send via POST
$data = array(
    'username' => $USERNAME,
    'password' => $PASSWORD,
);

$options = array(
    'http' => array(
        'method' => 'POST',
        'content' => json_encode($data),
        'header' => "Content-Type: application/json\r\n" .
        "Accept: application/json\r\n",
    ),
);

$context = stream_context_create($options);
$result = file_get_contents($url, false, $context);
$response = json_decode($result, true);
$userVerified = 1;
if ($response['CustomerId'] != 0) {
    header("location: market.php");
} else {
    header("Location: index.php?error= Incorrect username or password");
}
session_start();
$_SESSION['customerId'] = $response['CustomerId'];