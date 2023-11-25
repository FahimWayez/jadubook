<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION["adminAuthenticated"]) || $_SESSION["adminAuthenticated"] !== true) {
    header("location: index.html");
    exit();
}
?>

<html>

<head>
    <title>Customer</title>
    <link rel="stylesheet" href="../CSS/customerManagementStyle.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <form align="center">
        <a href=""><video class="logo" src="Images/logo.mp4" muted autoplay id="logoVideo"></video></a>
        <h5>Welcome to a magical world!<br><br></h5>
        <hr>
        <legend>Manage Customer</legend>
        <h4>Search with customer ID</h4>
        <input type="text" class="customerID" name="customerID" id="customerID" placeholder="Customer ID" size=20>
    </form>
    <div id="searchResults"></div>
    <br><br><br><br>
    <script src="../JS/customerSearchScript.js"></script>
</body>

</html>