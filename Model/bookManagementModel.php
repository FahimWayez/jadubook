<?php
require_once("databaseConnection.php");

function viewBook()
{
    $conn = dbConnection();
    $sqlView = "SELECT * FROM `jadubook`.`book1`";
    $result = mysqli_query($conn, $sqlView);

    $bookDetails = array();

    while($row = mysqli_fetch_array($result))
    {
        $bookDetails[] = $row;
    }
    
    return $bookDetails;
}
function addBook1($name, $bookCoverPhoto, $page1Text, $page1Video, $page1Audio, $page2Text, $page2Video, $page2Audio, $page3Text, $page3Video, $page3Audio)
{
    $conn = dbConnection();
    $sqlInsert = "INSERT INTO `jadubook`.`book1` (`name`, `bookCoverPhoto`, `page1Text`, `page1Video`, `page1Audio`, `page2Text`, `page2Video`, `page2Audio`, `page3Text`, `page3Video`, `page3Audio`) VALUES ('$name', '$bookCoverPhoto', '$page1Text', '$page1Video', '$page1Audio', '$page2Text', '$page2Video', '$page2Audio', '$page3Text', '$page3Video', '$page3Audio')";

    return mysqli_query($conn, $sqlInsert) ? true : false;
}
?>