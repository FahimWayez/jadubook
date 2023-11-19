<?php
include_once '../Model/databaseConnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn = dbConnection();
    
    $request = mysqli_query($conn, "INSERT INTO credentials (name, email, password) VALUES ('$name', '$email', '$password')");
    if ($request) {
        
        header("location: ../View/loginReg.html");
    }
    mysqli_close($conn);

}
?>