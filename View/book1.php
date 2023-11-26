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
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../CSS/book1.css" />
    <title>Voices of Freedom</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
</head>

<body>
    <header>
        <a href=""><video class="logo" src="Images/logo.mp4" muted autoplay id="logoVideo"></video></a>
        <a href="" class="brand">Voices of Freedom</a>
        <a href="customerLanding.php" class="goBack">Explore Other Books</a>
        <div class="menuButton"></div>
    </header>
    <section class="sec1">
        <div class="sec1Image">
            <img src="Images/book1/liberationwar.jpeg" alt="" height="569" width="451" />
        </div>
        <div class="goDown">
            <a href="#sec2">Explore this book!</a>
        </div>
    </section>
    <section class="sec2" id="sec2">
        <div class="container">
            <div class="video-container">
                <video controls>
                    <source src="Images/book1/book1.mp4" type="video/mp4" />
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="text-container">
                <section class="home">
                    <div class="content active">
                        <p align="justify">
                            Once upon a time, in the lush landscape of East Pakistan, the
                            echoes of a nation's struggle for liberation reverberated
                            through the air. It was the year 1971, and the people of
                            Bangladesh were yearning for freedom from the oppressive rule of
                            West Pakistan.<br /><br />The story unfolds in a small village,
                            where the air was thick with tension and anticipation. Among the
                            villagers was a young man named Rafiq, whose dreams of a free
                            and sovereign Bangladesh burned brightly in his heart. Rafiq was
                            not alone in his aspirations; the entire village shared a
                            collective desire for liberation.<br /><br />
                            As news of political unrest spread like wildfire, the people of
                            the village gathered in secret to discuss the impending
                            struggle. They knew that the road to freedom would be paved with
                            sacrifice, but their determination was unyielding. Rafiq became
                            a fervent voice among them, inspiring his fellow villagers to
                            join the cause.<br /><br />The Pakistani authorities, sensing
                            the growing dissent, cracked down on the villagers with brutal
                            force. Homes were raided, and innocent lives were lost.
                        </p>
                    </div>

                    <div class="content">
                        <p align="justify">
                            Yet, the flame of resistance continued to flicker in the hearts
                            of the people. Rafiq, now a reluctant leader, found himself at
                            the forefront of the fight for freedom.
                            <br /><br />The village became a hotbed of clandestine meetings,
                            where plans were hatched, and courage was bolstered. The air was
                            thick with tension, but there was a sense of unity that
                            transcended fear. As the days passed, Rafiq's rallying cry
                            echoed through the narrow lanes, inspiring even the most
                            hesitant to join the cause. <br /><br />
                            The turning point came when the Pakistani military launched a
                            brutal crackdown, sparing no one in its path. The village, once
                            serene, was transformed into a battleground. Rafiq, armed with
                            nothing but conviction, led a group of brave villagers in a
                            resistance that would go down in history.<br /><br />The
                            struggle for Bangladesh's liberation reached a crescendo,
                            drawing the attention of the international community. The world
                            watched in horror as the people of East Pakistan endured
                            unspeakable atrocities. The global outcry became a catalyst for
                            change, pushing world leaders to intervene.
                        </p>
                    </div>
                    <div class="content">
                        <p align="justify">
                            <br /><br /><br />In December 1971, after months of bloodshed
                            and sacrifice, victory was finally within reach. The Pakistani
                            forces, overwhelmed by the resilience of the Bangladeshi people,
                            surrendered. Bangladesh emerged as an independent nation, and
                            the joyous cries of freedom echoed across the land.<br /><br />Rafiq,
                            now a symbol of unwavering determination, stood on the soil of
                            his liberated homeland, tears of joy streaming down his face.
                            The sacrifices of the villagers, the resilience of the people,
                            and the international support had paved the way for a new
                            chapter in Bangladesh's history.<br /><br />The 1971 Liberation
                            War of Bangladesh remains etched in the collective memory of the
                            nation, a testament to the power of unity, courage, and the
                            indomitable human spirit.
                        </p>
                    </div>
                    <div class="sliderNavigation">
                        <div class="navButton active"></div>
                        <div class="navButton"></div>
                        <div class="navButton active"></div>
                    </div>
                </section>
            </div>
        </div>
    </section>
    <section class="sec3">

    </section>
    <script src="../JS/book1.js"></script>
</body>

</html>