<?php
include 'DataBaseConnection.php';
define("RECENT_PRODUCT_COUNT", 5);
define("PRODUCT_KEY", "productsVisited");

function addLastVisited($productName, $productLink)
{
    // $productArray = array($productLink);
    // foreach (getLastVisitedAll() as $index => $value) {
    //     if ($value !== $productLink) {
    //         array_push($productArray, $value);

    //         if (count($productArray) >= RECENT_PRODUCT_COUNT) {
    //             break;
    //         }

    //     }
    // }

    // setcookie(PRODUCT_KEY, serialize($productArray), time() + 360000, '/');
}

function getLastVisitedAll()
{
    $ch = curl_init();
    session_start();
    $customerID = $_SESSION['customerId'];
    //Set the URL that you want to GET by using the CURLOPT_URL option.
    curl_setopt($ch, CURLOPT_URL, "http://www.nathandiamond.com/classes/272/company/api/getVisits.php/?siteId=3&limit=5&customerId=$customerID");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    $data = curl_exec($ch);
    curl_close($ch);
    $json = json_decode($data, true);
    if (count($json) > 0) {
        return $json;
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
    session_start();
    $customerId = $_SESSION['customerId']; //$_SESSION['customerId'];
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
}

function getMostPopularProductsPerRating()
{
    $ch = curl_init();
    //Set the URL that you want to GET by using the CURLOPT_URL option.
    curl_setopt($ch, CURLOPT_URL, "http://www.nathandiamond.com/classes/272/company/api/getItems.php/?siteId=3&limit=5");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    $data = curl_exec($ch);
    curl_close($ch);
    $json = json_decode($data, true);
    if (count($json) > 0) {
        return $json;
    }
    // $conn = OpenCon();
    // $sql = "SELECT * FROM PopularProducts ORDER BY Count DESC LIMIT 5";
    // $result = mysqli_query($conn, $sql);
    // CloseCon($conn);
    // return $result;
}

function getMostPopularProducts()
{
    $ch = curl_init();
    //Set the URL that you want to GET by using the CURLOPT_URL option.
    curl_setopt($ch, CURLOPT_URL, "http://www.nathandiamond.com/classes/272/company/api/getItems.php/?siteId=3&limit=5&order=v");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    $data = curl_exec($ch);
    curl_close($ch);
    $json = json_decode($data, true);
    if (count($json) > 0) {
        return $json;
    }
    // $conn = OpenCon();
    // $sql = "SELECT * FROM PopularProducts ORDER BY Count DESC LIMIT 5";
    // $result = mysqli_query($conn, $sql);
    // CloseCon($conn);
    // return $result;
}

function getMostPopularProductsAcrossMarketPlace($url)
{
    $ch = curl_init();
    //Set the URL that you want to GET by using the CURLOPT_URL option.
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    $data = curl_exec($ch);
    curl_close($ch);
    $json = json_decode($data, true);
    if (count($json) > 0) {
        foreach ($json as $row) {
            $value = substr($row["AvgRating"], 0, -3);
            echo '<tr>';
            echo '<td><a style="    text-decoration: none;" href=' . $row["ProductLink"] . '>' . $row["ProductName"] . '</a></td>';
            echo '<td>' . $row["SiteName"] . '</td>';
            echo '<td>' . $value . '<i class="fa fa-star" style="color:orange;"></i></td>';
            echo '<td>' . $row["NumRatings"] . '</td>';
            echo '<td>' . $row["NumVisits"] . '</td>';
            echo '</tr>';
        }
    }
}