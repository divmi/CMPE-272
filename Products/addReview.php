<?php
extract($_POST);
$url = 'http://www.nathandiamond.com/classes/272/company/api/addReview.php';
session_start();
$customerId = $_SESSION['customerId'];
$siteId = 3;
$data = array(
    'customerId' => $customerId,
    'siteId' => $siteId,
    'productId' => $product,
    'comment' => $review,
    'rating' => $rating,
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
header('Location: ' . $_SERVER['HTTP_REFERER']);