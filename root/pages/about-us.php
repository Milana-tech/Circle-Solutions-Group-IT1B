<?php
ob_start();
session_start();
    if (!isset($_SESSION['loggedIn'])) {
        $_SESSION['loggedIn'] = false;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circle Solutions</title>
    <script src="../scripts/header.js"></script>
    <link rel="stylesheet" href="../css/global.css" type="text/css">
</head>
<body class="aboutbody">
            <?php
                include "../sections/header.php";
            ?>
    <div class="main-about">
        <div class="img-bg">
            <img src="../images/circleSolutionsWide.png" alt="" class="img-bg">
        </div>
        <div class="about">
            <div class="aboutheader">
                On a mission to empower communicators worldwide
            </div>
            <div class="about-info">
                <div class="OS-section">
                    <div class="OS">
                        OUR <p> STORY
                    </div>
                    <div class="OS-info1">
                        Circle solution was founded in 2018 with the goal of equipping companies to reach every employee with inspiring communication — the key to impacting business success. More than 200 enterprises later, we are on a mission to help the world's best organizations inspire their people to reach their fullest potential, together. Our journey is about turning that inspired effort into extraordinary stories of success, change, and excellence.
                    </div>
                </div>
          <div class="ctd-section">
                <div class="ctd-info2">
                    Our mission is to bridge communication and collaboration within organizations, ensuring that information flows seamlessly and effectively among all stakeholders.
                </div>
                <div class="ctd">
                    CONNECTING THE DOTS
                </div>
            </div>
            <div class="FR-section">
                <div class="FR">
                    FUTURE <p> READY
                </div>
                <div class="FR-info3">
                    We stay updated with the latest technology trends, ensuring that your intranet remains relevant and capable of adapting to future demands.
                </div>
        </div>
            <div class="cs-section">
                <div class="cs-info4">
                    Intranet designs that fit the specific needs of your organization, enhancing communication and collaboration.
                </div>
                <div class="cs">
                    CUSTOM SOLUTIONS
                </div>
            </div>
            </div>
        </div>
        </div>
        <?php
            include "../sections/footer.html";
            ob_end_flush();
        ?>
</body>
</html>