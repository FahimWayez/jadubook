<?php
require_once("databaseConnection.php");
function searchCustomer($customerID)
{
$conn = dbConnection();
$sql4 = "SELECT * from `jadubook`.`users` where id = '{$customerID}'";
$result4 = mysqli_query($conn, $sql4);

return $result4;
}


function getProfile($email)
{
$conn = dbConnection();
$sql = "SELECT * from `jadubook`.`credentials` where email = '{$email}'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

return $row;
}

function getName($email)
{
$conn = dbConnection();
$sql2 = "SELECT `name` from `jadubook`.`users` where email = '{$email}'";
$result2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_array($result2);

return $row2;
}

function updateCustomerDetails($customerID, $name, $password, $email) {
$conn = dbConnection();
$sql5 = "UPDATE `jadubook`.`credentials` SET `name` = '{$name}', `email` = '{$email}', `password` =
'{$password}'";
mysqli_query($conn, $sql5);
}
function getProfilePhoto($email)
    {
        $conn = dbConnection();
        $sql = "SELECT `profilePhoto` from `jadubook`.`users` where email = '{$email}'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        
        return $row;
    }
function updateProfilePhoto($email, $profilePhoto)
{
$conn = dbConnection();
$sql8 = "UPDATE `jadubook`.`users` SET `profilePhoto` = '$profilePhoto' WHERE `email` = '$email'";
return mysqli_query($conn, $sql8);
}


?>