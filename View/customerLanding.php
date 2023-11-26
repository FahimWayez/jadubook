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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>JaduBook</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

    <link rel="stylesheet" href="../CSS/customerLanding.css" />

    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png" />
</head>

<body>
    <header class="header">
        <div class="header-1">
            <a href=""><video class="logo" src="Images/logo.mp4" muted autoplay id="logoVideo"></video></a>

            <form action="customerLanding" class="search-form">
                <input type="search" name="" placeholder="Search for book" id="search-box" />
                <label for="search-box" class="fas fa-search"></label>
            </form>

            <div class="icons">
                <div id="search-btn" class="fas fa-search"></div>
                <a href="../Controller/logout.php" class="fa-solid fa-right-from-bracket">
                    <br /><br />Logout</a>
                <a href="customerProfile.php" class="fa-solid fa-user"><br /><br />Profile</a>
            </div>
        </div>

        <div class="header-2">
            <nav class="navbar">
                <a href="#featured">New Arrivals</a>
                <a href="#home">Home</a>
                <a href="#footer">Quick Links</a>
                <a href="library.php">Library</a>
            </nav>
        </div>
    </header>

    <section class="home" id="home">
        <div class="row">
            <div class="content">
                <h3>JaduBook</h3>
                <p>Welcome to the Magical World!</p>
                <a href="library.php" class="btn">Visit our Library</a>
            </div>

            <div class="swiper books-slider">
                <div class="swiper-wrapper">
                    <a href="" class="swiper-slide"><img src="images/book2.jpg" alt="" /></a>
                    <a href="" class="swiper-slide"><img src="images/book4.jpg" alt="" /></a>
                    <a href="" class="swiper-slide"><img src="images/book5.jpg" alt="" /></a>
                </div>
                <img src="./Images/stand.png" class="stand" alt="" />
            </div>
        </div>
    </section>

    <section class="featured" id="featured">
        <h1 class="heading"><span>New Arrivals</span></h1>

        <div class="swiper featured-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <a href="book2.html">
                            <img src="./Images/book6.jpg" alt="" />
                            <br />
                            <p>Best Friends</p>
                        </a>
                        <a href="book1.php">
                            <img src="./Images/book1/liberationwar.jpeg" alt="" />
                            <br />
                            <p>Voices of Freedom</p>
                        </a>
                        <a href="book4.html">
                            <img src="./Images/book7.jpg" alt="" />
                            <br />
                            <p>How to Raise a Mom</p>
                        </a>
                    </div>
                    <div class="content">
                        <h3>Picked Just for You!</h3>
                        <div class="price">FREE</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="reviews" id="reviews">
        <h1 class="heading"><span>Client's Reviews</span></h1>

        <div class="swiper reviews-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <img src="images/saf.jpg" alt="" />
                    <h3>Shafwan</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus
                        sint nostrum magni nemo aut itaque laudantium molestiae sit harum
                        fuga!
                    </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="footer" id="footer">
        <div class="box-container">
            <div class="box">
                <h3>Quick Links</h3>
                <a href="index.html"> <i class="fas fa-arrow-right"></i> Home </a>
                <a href="explore.html">
                    <i class="fas fa-arrow-right"></i> Explore
                </a>
                <a href="aboutUs.html">
                    <i class="fas fa-arrow-right"></i> About Us
                </a>
                <a href="customerLanding.php">
                    <i class="fas fa-arrow-right"></i> Reviews
                </a>
                <a href="feedback.html">
                    <i class="fas fa-arrow-right"></i> Feedback
                </a>
            </div>

            <div class="box">
                <h3>Contact Info</h3>
                <a href="#"> <i class="fas fa-envelope"></i> fahimwayez@gmail.com </a>
                <a href="#"> <i class="fas fa-envelope"></i> rjofbd@gmail.com </a>
            </div>
        </div>
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.916698837668!2d90.4247921254348!3d23.821561028621932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c711d13bbec7%3A0xc47f7c3e8e2263f2!2sAmerican%20International%20University%20-%20Bangladesh%20(AIUB)!5e0!3m2!1sen!2sbd!4v1700719952771!5m2!1sen!2sbd"
                width="1212" height="320" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="share">
            <a href="https://www.facebook.com" class="fab fa-facebook-f"></a>
            <a href="https://www.instagram.com" class="fab fa-instagram"></a>
            <a href="https://www.github.com/FahimWayez/jadubook" class="fab fa-github"></a>
            <a href="https://www.linkedin.com" class="fab fa-linkedin"></a>
        </div>

        <div class="credit">Copyright ©2023 All Rights Reserved!</div>
    </section>

    <script src="../JS/customerLanding.js"></script>
</body>

</html>