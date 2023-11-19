<?php
include_once '../Model/databaseConnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn = dbConnection();

    $result = mysqli_query($conn, "SELECT * FROM credentials WHERE email='$email' AND password='$password'");

    if ($result) {
        header("location: ../View/userHomePage.html");
    } 
    mysqli_close($conn);
    
}
?>