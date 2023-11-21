<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION["adminAuthenticated"]) || $_SESSION["adminAuthenticated"] !== true) {
    header("location: landingPage.php");
    exit(); 
}
require_once("../Model/bookManagementModel.php");


if(isset($_POST['addBook']))
{
    $bookCoverPhoto = $_FILES['bookCoverPhoto']['name'];
    $page1Video = $_FILES['page1Video']['name'];
    $page1Audio = $_FILES['page1Audio']['name'];
    $page2Video = $_FILES['page2Video']['name'];
    $page2Audio = $_FILES['page2Audio']['name'];
    $page3Video = $_FILES['page3Video']['name'];
    $page3Audio = $_FILES['page3Audio']['name'];
    $name = $_POST['name'];    
    $page1Text = $_POST['page1Text'];
    $page2Text = $_POST['page2Text'];
    $page3Text = $_POST['page3Text'];

    
    $flag = 1;
        

    if(empty($name))
    {
        echo "<br><br>Book Name is a mandatory Field.<br><br>";
        $flag = 0;
    }
    

    if($flag == 1)
    {
        try
        {
            $status = addBook1($name, $bookCoverPhoto, $page1Text, $page1Video, $page1Audio, $page2Text, $page2Video, $page2Audio, $page3Text, $page3Video, $page3Audio);
            if($status)
            {
                header("location: ../View/bookManagement.php");
            }
            else
            {
                echo "DB Error";
            }
        }
        catch(mysqli_sql_exception $e)
        {
            echo "Error: Duplicate book ID";
        }
    }
}
?>