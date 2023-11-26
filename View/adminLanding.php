<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION["adminAuthenticated"]) || $_SESSION["adminAuthenticated"] !== true) {
    header("location: landingPage.php");
    exit(); 
}
require_once("../Model/adminProfileModel.php");
require_once("../Model/adminLandingModel.php");
require_once("../Controller/loginController.php");

$storedEmail = $_SESSION["email"];
$userType = "Customer";


$bookCount = bookCount();
$customerCount = customerCount($userType);

$profileDetails = getProfile($storedEmail);
$profilePhoto = getProfilePhoto($storedEmail);

?>


<html>

<head>
    <title>Admin</title>
    <link rel="stylesheet" href="../CSS/adminLandingStyles.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="darkOverlay"></div>

    <input type="checkbox" id="navToggle">
    <div class="sidebar">
        <div class="sidebarBrand">
            <h1><span class="fa-solid fa-swatchbook"></span><span>JaduBook</span></h1>
        </div>
        <div class="sidebarMenu">
            <ul>
                <li><a href="" class="active"><span class="fa-solid fa-gauge"></span>
                        <span>Dashboard</span></a>
                </li>
                <li><a href="bookManagement.php"><span class="fa-solid fa-book"></span>
                        <span>Books</span></a>
                </li>
                <li><a href="customerManagement.php"><span class="fa-solid fa-users"></span>
                        <span>Customers</span></a>
                </li>
                <li><a href="adminProfile.php"><span class="fa-solid fa-user-circle"></span>
                        <span>Profile</span></a>
                </li>
                <li class="logout"><a href="../Controller/logout.php"><span
                            class="fa-solid fa-right-from-bracket"></span>
                        <span>Logout</span></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="mainContent">
        <header>
            <h2>
                <label for="navToggle">
                    <span class="fa-solid fa-bars"></span>
                </label>
                Dashboard
            </h2>
            <div class="userWrapper">
                <?php if ($profilePhoto) { ?>
                <img src="Images/<?php echo $profilePhoto['profilePhoto']; ?>" width="50" height="50"
                    alt="Profile Photo">
                <?php } else { ?>
                <img src="Images/default.png" width="50" height="50" alt="Choose your Profile Photo">
                <?php } ?>
                <div>
                    <h4><?php 
                    echo $profileDetails['name'];?></h4>
                    <small>Admin</small>
                </div>
            </div>
        </header>
        <main>
            <div class="cards">
                <div class="cardSingle">
                    <div>
                        <h1><?php echo $bookCount ?></h1>
                        <span>Books</span>
                    </div>
                    <div>
                        <span class="fa-solid fa-book-open"></span>
                    </div>
                </div>
                <div class="cardSingle">
                    <div>
                        <h1><?php echo $customerCount ?></h1>
                        <span>Customers</span>
                    </div>
                    <div>
                        <span class="fa-solid fa-users"></span>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>