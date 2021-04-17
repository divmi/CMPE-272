<?php

$conn = mysqli_connect('localhost', 'root', 'Divmi@12345', 'TravelCompany');
// query to database and prepares and executes
$query = "SELECT * FROM UserRegisterationTable";
$result = mysqli_query($conn, $query);

while ($data = mysqli_fetch_array($result)) {
    echo $data["FirstName"];
}