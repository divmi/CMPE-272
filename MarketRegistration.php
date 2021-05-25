<?php
include 'DataBaseConnection.php'; // includes the connection.php file to connect to the database
$conn = OpenCon();

function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$first_name = validate($_POST['firstName']);
$password = validate($_POST['password']);
$last_name = validate($_POST['lastName']);
$email = validate($_POST['email']);
$userName = validate($_POST['userName']);
$address = validate($_POST['address']);
$homePhone = validate($_POST['homePhone']);
$cellPhone = validate($_POST['cellPhone']);
$sql = "SELECT * FROM UserRegisterationTable WHERE Email='$email' ";
$pattern = '/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Z]).{10,20}$/';
if (!preg_match($pattern, $password)) {
    header("Location: Registration.php?error= Incorrect password format");
} else {
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        header("Location: Registration.php?error=The Email is taken try another&$email");
        exit();
    } else {
        $sql2 = "INSERT INTO UserRegisterationTable (FirstName, LastName, Email, Address,HomePhone,CellPhone) VALUES ('$first_name',
		   '$last_name', '$email', '$address', '$homePhone', '$cellPhone')";
        $result2 = mysqli_query($conn, $sql2);
        if ($result2) {
            $url = 'http://www.nathandiamond.com/classes/272/company/api/addCustomer.php';

//The data you want to send via POST
            $data = array(
                'username' => $userName,
                'password' => $password,
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
            $response = json_decode($result);
            header("Location: Registration.php?success=Your account has been created successfully");
            exit();
        } else {
            header("Location: Registration.php?error=unknown error occurred&$email");
            exit();
        }
    }
}