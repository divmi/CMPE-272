<?php
include 'DataBaseConnection.php';
$conn = OpenCon();

// // Escape user inputs for security
// $first_name = mysqli_real_escape_string($conn, $_REQUEST['firstName']);
// $last_name = mysqli_real_escape_string($conn, $_REQUEST['lastName']);
// $email = mysqli_real_escape_string($conn, $_REQUEST['email']);
// $address = mysqli_real_escape_string($conn, $_REQUEST['address']);
// $homePhone = mysqli_real_escape_string($conn, $_REQUEST['homePhone']);
// $cellPhone = mysqli_real_escape_string($conn, $_REQUEST['cellPhone']);

// // Attempt insert query execution
// $sql = "INSERT INTO UserRegisterationTable (FirstName, LastName, Email, Address,HomePhone,CellPhone) VALUES ('$first_name',
// '$last_name', '$email', '$address', '$homePhone', '$cellPhone')";

// echo $sql;
// if(mysqli_query($conn, $sql)){
//     echo "Records added successfully.";
// } else{
//     echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
// }
function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$first_name = validate($_POST['firstName']);
$last_name = validate($_POST['lastName']);
$email = validate($_POST['email']);
$address = validate($_POST['address']);
$homePhone = validate($_POST['homePhone']);
$cellPhone = validate($_POST['cellPhone']);

if (empty($first_name)) {
    header("Location: UserRegistrationForm.php?error=First Name is required&$email");
    exit();
} else if (empty($last_name)) {
    header("Location: UserRegistrationForm.php?error=Last Name is required&$email");
    exit();
} else if (empty($email)) {
    header("Location: UserRegistrationForm.php?error=Email is required&$email");
    exit();
} else if (empty($address)) {
    header("Location: UserRegistrationForm.php?error=Address is required&$email");
    exit();
} else if (empty($homePhone)) {
    header("Location: UserRegistrationForm.php?error=Home Phone is required&$email");
    exit();
} else if (empty($cellPhone)) {
    header("Location: UserRegistrationForm.php?error=CellPhone is required&$email");
    exit();
} else {

    $sql = "SELECT * FROM UserRegisterationTable WHERE Email='$email' ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        header("Location: UserRegistrationForm.php?error=The Email is taken try another&$email");
        exit();
    } else {
        $sql2 = "INSERT INTO UserRegisterationTable (FirstName, LastName, Email, Address,HomePhone,CellPhone) VALUES ('$first_name',
		   '$last_name', '$email', '$address', '$homePhone', '$cellPhone')";
        $result2 = mysqli_query($conn, $sql2);
        if ($result2) {
            header("Location: UserRegistrationForm.php?success=Your account has been created successfully");
            exit();
        } else {
            header("Location: UserRegistrationForm.php?error=unknown error occurred&$email");
            exit();
        }
    }
}