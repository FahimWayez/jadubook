<?php
require_once("databaseConnection.php");

function addIntoCredentials($name, $email, $hashedPassword)
{
    $conn = dbConnection();
    $sqlInsert = "INSERT INTO `jadubook`.`credentials`(`type`, `name`, `email`, `password`) 
        VALUES ('Customer', '$name', '$email', '$hashedPassword')";
    return mysqli_query($conn, $sqlInsert) ? true : false;
}   
function addIntoUsers($name, $email)
{
    $conn = dbConnection();
    $sqlInsert2 = "INSERT INTO `jadubook`.`users`(`name`,`email`) VALUES ('$name','$email')";
    return mysqli_query($conn, $sqlInsert2) ? true : false;
}
?>