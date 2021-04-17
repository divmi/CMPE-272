<?php

include 'DataBaseConnection.php'; // includes the connection.php file to connect to the database
$conn = OpenCon();
// query to database and prepares and executes
$query = "SELECT * FROM UserRegisterationTable";
$result = mysqli_query($conn, $query);

while ($data = mysqli_fetch_array($result)) {
    echo $data["FirstName"];
}