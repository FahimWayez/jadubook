<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once("databaseConnection.php");

function login($email, $hashedPassword)
{
    $conn = dbConnection();
    $sql = "SELECT * FROM `jadubook`.`credentials` WHERE email = '{$email}' AND password = '{$hashedPassword}'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {   
        $row = mysqli_fetch_assoc($result);

        if ($row['type'] == "Admin") {     
            $_SESSION['adminID'] = $row['id'];
            echo "success";
        
        } else {            
            $_SESSION['customerID'] = $row['id']; 
            echo "success";
        }
        return true;
    } else {
        return false;
    }
}   
function get_Type($email)
{
    $conn = dbConnection();
    $sql2 = "SELECT `type` from `jadubook`.`credentials` where email = '{$email}'";
    $result2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_array($result2);
    return $row2;
}
?>