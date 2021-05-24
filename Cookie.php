<?php
include 'DataBaseConnection.php';
define("RECENT_PRODUCT_COUNT", 5);
define("PRODUCT_KEY", "productsVisited");

function addLastVisited($productName, $productLink)
{
    $productArray = array($productLink);
    foreach (getLastVisitedAll() as $index => $value) {
        if ($value !== $productLink) {
            array_push($productArray, $value);

            if (count($productArray) >= RECENT_PRODUCT_COUNT) {
                break;
            }

        }
    }

    setcookie(PRODUCT_KEY, serialize($productArray), time() + 360000, '/');
}

function getLastVisitedAll()
{
    if (isset($_COOKIE[PRODUCT_KEY])) {
        return unserialize($_COOKIE[PRODUCT_KEY]);
    } else {
        return array();
    }

}

function addProductIntoDataBase($productName, $productLink)
{
    $conn = OpenCon();
    $sql = "SELECT * FROM PopularProducts WHERE ProductName='$productName' ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $updateCount = "Update PopularProducts SET Count=Count+1 where ProductName='$productName'";
        mysqli_query($conn, $updateCount);
        CloseCon($conn);
        return $result;
    } else {
        $sql2 = "INSERT INTO PopularProducts (ProductName, ProductLink, Count) VALUES ('$productName','$productLink', '1')";
        $result2 = mysqli_query($conn, $sql2);
        CloseCon($conn);
        return $result2;
    }
}

function addLastVistedProductToCommonDB($productName)
{
    $url = 'http://www.nathandiamond.com/classes/272/company/api/addVisit.php';
//session_start();
    $customerId = 54; //$_SESSION['customerId'];
    $siteId = 3;
    $data = array(
        'customerId' => $customerId,
        'siteId' => $siteId,
        'productId' => $productName,
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
    echo $response;
}

function getMostPopularProducts()
{
    $conn = OpenCon();
    $sql = "SELECT * FROM PopularProducts ORDER BY Count DESC LIMIT 5";
    $result = mysqli_query($conn, $sql);
    CloseCon($conn);
    return $result;
}