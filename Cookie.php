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

function getMostPopularProducts()
{
    $conn = OpenCon();
    $sql = "SELECT * FROM PopularProducts ORDER BY Count DESC LIMIT 5";
    $result = mysqli_query($conn, $sql);
    CloseCon($conn);
    return $result;
}