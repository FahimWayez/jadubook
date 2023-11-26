<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION["adminAuthenticated"]) || $_SESSION["adminAuthenticated"] !== true) {
    header("location: ../View/index.html");
    exit(); 
}
require_once("../Model/adminProfileModel.php");
require_once("../Controller/loginController.php");

$storedEmail = $_SESSION["email"];

$profileDetails = getProfile($storedEmail);
$profilePhoto = getProfilePhoto($storedEmail);

?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile</title>
    <link rel="stylesheet" href="../CSS/adminProfileStyle.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <section class="home">
        <video class="videoSlide active" src="images/profileBG.mp4" autoplay muted loop></video>
        <div class="darkOverlay"></div>
        <div class="container">
            <div class="header">
                <img class="profilePhoto"
                    src="Images/<?php echo $profilePhoto['profilePhoto'] ? $profilePhoto['profilePhoto'] : 'default.png'; ?>"
                    alt="">
                <h2><?php echo $profileDetails["name"]; ?>
                </h2>
            </div>
            <div class="profileDetails">
                <p><strong>Email:</strong> <?php echo $profileDetails["email"]; ?></p>
            </div>
            <div class="goBackButton">
                <a href="adminLanding.php">
                    <i class="fa-solid fa-backward"></i>
                    Go Back
                </a>
            </div>
        </div>
    </section>
</body>

</html>