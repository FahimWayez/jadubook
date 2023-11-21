<?php

require_once("databaseConnection.php");
function bookCount()
{
    $conn = dbConnection();
    $sqlSearch = "SELECT * FROM `jadubook`.`books`";
    $result = mysqli_query($conn, $sqlSearch);
    $count = mysqli_num_rows($result);

    return $count;
}
function customerCount($type)
{
    $conn = dbConnection();
    $sqlSearch3 = "SELECT * FROM `jadubook`.`credentials` WHERE `type` = '$type'";
    $result3 = mysqli_query($conn, $sqlSearch3);
    $count3 = mysqli_num_rows($result3);

    return $count3;
}
?>