<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
    <link rel="stylesheet" href="../CSS/library.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
    <header class='header'>
        <a href=""><video class="logo" src="Images/logo.mp4" muted autoplay id="logoVideo"></video></a>
        <a href="" class="brand">JaduBook</a>
        <p class="motto">Welcome to a magical world!</p>
        <div class="menuButton"></div>
        <div class="header2">
            <form action="customerLanding" class="search-form">
                <input type="search" name="" placeholder="Search for book" id="search-box" oninput="searchBooks()" />
                <label for="search-box" class="fas fa-search"></label>
            </form>
        </div>
    </header>
    <a href="book1.php" id="book1">
        <section class="book1">
            <div class="book1Image">
                <img src="Images/book1/liberationwar.jpeg" alt="" height="204.8" width="162.4">
            </div>
            <div class="book1Details">
                <h2>Voices of Freedom</h2>
                <p align="justify">"Voices of Freedom" narrates the 1971 Liberation War in East Pakistan, focusing on
                    the
                    determined young man Rafiq, who becomes a reluctant leader,<br> inspiring his village to resist
                    oppressive
                    rule, leading to Bangladesh's hard-fought independence and a testament to the strength of unity and
                    resilience.</p>
            </div>
        </section>
    </a>
    <a href="book2.php" id="book2">
        <section class="book2">
            <div class="book1Image">
                <img src="Images/book2.jpg" alt="" height="204.8" width="162.4">
            </div>
            <div class="book1Details">
                <h2>The Boy at the Back of the Class</h2>
                <p align="justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis explicabo sequi
                    deserunt quas aliquid, beatae nobis molestias esse quidem, officia<br>perferendis eius porro
                    corporis accusantium blanditiis. Voluptatum quod illo nostrum odit corrupti ex magni eligendi
                    eius
                    culpa iste ratione quos
                </p>
            </div>
        </section>
    </a>
    <a href="book3.php" id="book3">
        <section class="book2">
            <div class="book1Image">
                <img src="Images/book6.jpg" alt="" height="204.8" width="162.4">
            </div>
            <div class="book1Details">
                <h2>Best Friends</h2>
                <p align="justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis explicabo sequi
                    deserunt quas aliquid, beatae nobis molestias esse quidem, officia<br>perferendis eius porro
                    corporis accusantium blanditiis. Voluptatum quod illo nostrum odit corrupti ex magni eligendi
                    eius
                    culpa iste ratione quos
                </p>
            </div>
        </section>
    </a>
    <a href="book4.php" id="book4">
        <section class="book2">
            <div class="book1Image">
                <img src="Images/book4.jpg" alt="" height="204.8" width="162.4">
            </div>
            <div class="book1Details">
                <h2>The Girl who said NO!</h2>
                <p align="justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis explicabo sequi
                    deserunt quas aliquid, beatae nobis molestias esse quidem, officia<br>perferendis eius porro
                    corporis accusantium blanditiis. Voluptatum quod illo nostrum odit corrupti ex magni eligendi
                    eius
                    culpa iste ratione quos
                </p>
            </div>
        </section>
    </a>
    <a href="book5.php" id="book5">
        <section class="book2">
            <div class="book1Image">
                <img src="Images/book5.jpg" alt="" height="204.8" width="162.4">
            </div>
            <div class="book1Details">
                <h2>The Awesome Books of Word</h2>
                <p align="justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis explicabo sequi
                    deserunt quas aliquid, beatae nobis molestias esse quidem, officia<br>perferendis eius porro
                    corporis accusantium blanditiis. Voluptatum quod illo nostrum odit corrupti ex magni eligendi
                    eius
                    culpa iste ratione quos
                </p>
            </div>
        </section>
    </a>
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
        <div class="credit">Copyright ©2023 All Rights Reserved!</div>
    </section>
    <script src="../JS/library.js"></script>

</body>

</html>