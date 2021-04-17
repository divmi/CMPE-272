<?php

include 'DataBaseConnection.php'; // includes the connection.php file to connect to the database
$conn = OpenCon();
// query to database and prepares and executes
if (isset($_POST['search'])) {
    $search_value = $_POST['searchValue'];
    $query = "SELECT * FROM UserRegisterationTable WHERE (`FirstName` LIKE '%$search_value%') OR (`LastName` LIKE '%$search_value%')  OR (`Email` LIKE '%$search_value%')  OR (`HomePhone` LIKE '%$search_value%')  OR (`CellPhone` LIKE '%$search_value%');";
    $result = mysqli_query($conn, $query);

} else {
    $query = "SELECT * FROM UserRegisterationTable";
    $result = mysqli_query($conn, $query);
}