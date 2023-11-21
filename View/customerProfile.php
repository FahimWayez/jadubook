<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION["customerAuthenticated"]) || $_SESSION["customerAuthenticated"] !== true) {
    header("location: index.html");
    exit(); 
}
require_once("../Model/customerProfileModel.php");
require_once("../Controller/loginController.php");

$storedEmail = $_SESSION["email"];

$profileDetails = getProfile($storedEmail);
$profilePhoto = getProfilePhoto($storedEmail);

?>

<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Customer Profile</title>
    <link rel="stylesheet" href="../CSS/customerProfileStyle.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <div class="header">
            <img class="profilePhoto"
                src="../profile_photos/<?php echo $profilePhoto ? $profilePhoto : 'default.png'; ?>"
                alt="Profile Photo" />
            <h2>
                <?php echo $profileDetails["name"]; ?>
            </h2>
        </div>
        <div class="profileDetails">
            <p>
                <strong>Email:</strong>
                <?php echo $profileDetails["email"]; ?>
            </p>
        </div>
        <div class="separator"></div>
        <div class="goBackButton">
            <a href="customerLanding.php">
                <i class="fa-solid fa-backward"></i>
                Go Back
            </a>
        </div>
    </div>
</body>

</html>