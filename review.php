<?php
function getReviews($url)
{
    echo $product;
    $ch = curl_init();
    //Set the URL that you want to GET by using the CURLOPT_URL option.
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    $data = curl_exec($ch);
    curl_close($ch);
    echo "<table border='1'>
    <tr>
        <th>NAME</th>
        <th>REVIEW COMMENT</th>
        <th>RATING</th>
        <th>REVIEW TIME</th>
    </tr>";
    $json = json_decode($data, true);
    foreach ($json as $row) {
        echo "<tr>
        <td>" . $row['Username'] . "</td>
        <td>" . $row['ReviewComment'] . "</td>
        <td>" . $row['Rating'] . "</td>
        <td>" . $row['ReviewTime'] . "</td>
    </tr>";

    }
}