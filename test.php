 <?php
$user = "root";
$password = "Divmi@12345";
$database = "TravelCompany";
$table = "UserRegisterationTable";
// mysqli_select_db($conn, 'aiot');
$db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
echo "<h2>TODO</h2><ol>";
foreach ($db->query("SELECT FirstName FROM $table") as $row) {
    echo "<li>" . $row['FirstName'] . "</li>";
}
echo "</ol>";
?>