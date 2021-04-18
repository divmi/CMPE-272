<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
include 'DataBaseConnection.php';

function getUsers()
{
    $conn = OpenCon();
    $userArray = array();
    if ($conn) {
        $query = "SELECT FirstName, LastName, Email, Address, HomePhone, CellPhone FROM UserRegisterationTable";

        if ($result = $conn->query($query)) {
            while ($row = $result->fetch_row()) {
                $user = array(
                    "FirstName" => $row[0],
                    "LastName" => $row[1],
                    "Email" => $row[2],
                    "HomeAddress" => $row[3],
                    "HomePhone" => $row[4],
                    "CellPhone" => $row[5],
                );
                array_push($userArray, $user);
            }
            $result->free_result();
        }

        CloseCon($conn);
    }

    return $userArray;
}

echo json_encode(getUsers());