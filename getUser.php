<?php

function FindCurlUser($site, $SiteOwner)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $site);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $contents = curl_exec($ch);
    $jsoned = json_decode($contents, true);
    foreach ($jsoned as $data) {
        echo '<tr>';
        echo '<td>' . $data["FirstName"] . '</td>';
        echo '<td>' . $data["LastName"] . '</td>';
        echo '<td>' . $data["Email"] . '</td>';
        echo '<td>' . $data["HomeAddress"] . '</td>';
        echo '<td>' . $data["HomePhone"] . '</td>';
        echo '<td>' . $data["CellPhone"] . '</td>';
        echo '<td>' . $SiteOwner . '</td>';
        echo '</tr>';
    }
    curl_close($ch);
}