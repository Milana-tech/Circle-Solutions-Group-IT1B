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

<body>
    <?php
    include "../sections/header.php";
    ?>
    <div class="content home">
        <div>
            <h1>WELCOME TO OUR MAIN PAGE</h1>
            <p>You can find our products bellow!</p>
            <div class="homeDivSmallImage">
                <img src="../images/homepageimage.png" alt="Image" class="homeSmallImage">
            </div>
            <a href="./packages.php">View our products</a>
        </div>
        <div>
            <img src="../images/homepageimage.png" alt="Image" class="homeLargeImage">
        </div>
    </div>
    <?php
    include "../sections/footer.html";
    ob_end_flush();
    ?>
</body>

</html>