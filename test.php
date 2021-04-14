 <?php
include 'DataBaseConnection.php';
$conn = OpenCon();
$search_value = $_POST['searchValue'];
#$search_value ='aditya';
echo $search_value;
if ($conn->connect_error) {
    echo 'Connection Faild: ' . $conn->connect_error;
} else {
    // mysqli_select_db($conn, 'aiot');
    if ($search_value) {
        $sql = "SELECT * FROM UserRegisterationTable WHERE (`FirstName` LIKE '%$search_value%') OR (`LastName` LIKE '%$search_value%')  OR (`Email` LIKE '%$search_value%')  OR (`HomePhone` LIKE '%$search_value%')  OR (`CellPhone` LIKE '%$search_value%');";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                foreach ($row as $field => $value) {
                    echo $value . "&nbsp&nbsp&nbsp\r\n", PHP_EOL;

                }
            }

        } else {
            echo "Sorry, No users found with $search_value";
        }

    }}
print("<div><a href='/usersection.html'>Click here to go back to user page</a></div>");
$conn->close();
?>