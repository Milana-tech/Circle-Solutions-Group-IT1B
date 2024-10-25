<?php
ob_start();
session_start();
    if (!isset($_SESSION['loggedIn'])) {
        $_SESSION['loggedIn'] = false;
    }
$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = filter_input(INPUT_POST, "fname");
    $lname = filter_input(INPUT_POST, "lname");
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $phone = filter_input(INPUT_POST, "phone");
    $address = filter_input(INPUT_POST, "address");
    $state = filter_input(INPUT_POST, "state");
    $postal = filter_input(INPUT_POST, "postal");
    if (isset($_POST["submit"])) {
        if (empty($fname) || empty($lname) || empty($email) || empty($phone) || empty($address) || empty($state) || empty($postal)) {

            $error = "<p class='errors'> Please fill out all of the fileds</P>";
        } else {
            $error = "";
        }
    }
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
    <div class="account-info">
        <div class="container-accountinfo">
            <h1>Account Settings</h1>
            <p>Below you can observe your information</p>
            <div class="errors">
                <?php
                echo $error;
                ?>

            </div>
            <h2>Profile Information</h2>
            <form action="account-info.php" method="POST" class="form-accountinfo">
                <div class="firsthalf-accountinfo">
                    <label for="" class="labels-accountinfo">FIRST NAME</label>
                    <input type="text" class="inputs-accountinfo" name="fname">
                </div>
                <div class="secondhalf-accountinfo">
                    <label for="" class="labels-accountinfo">LAST NAME</label>
                    <input type="text" class="inputs-accountinfo" name="lname">
                </div>

                <div class="firsthalf-accountinfo">
                    <label for="" class="labels-accountinfo">EMAIL ADDRESS</label>
                    <input type="text" class="inputs-accountinfo" name="email">
                </div>
                <div class="secondhalf-accountinfo">
                    <label for="" class="labels-accountinfo">PHONE NUMBER</label>
                    <input type="text" class="inputs-accountinfo" name="phone">
                </div>

                <h3>Change Password</h3>

                <div class="firsthalf-accountinfo">
                    <label for="" class="labels-accountinfo">NEW PASSWORD</label>
                    <input type="text" class="inputs-accountinfo">
                </div>
                <div class="secondhalf-accountinfo">
                    <label for="" class="labels-accountinfo">CONFIRM NEW PASSWORD</label>
                    <input type="text" class="inputs-accountinfo">
                </div>

                <h4>Address</h4>

                <div class="full-accountinfo">
                    <label for="" class="labels-accountinfo">SHIPPING ADDRESS</label>
                    <input type="text" class="address-accountinfo" name="address">
                </div>

                <div class="firsthalf-accountinfo">
                    <label for="" class="labels-accountinfo">STATE</label>
                    <input type="text" class="inputs-accountinfo radius" name="state">
                </div>
                <div class="secondhalf-accountinfo">
                    <label for="" class="labels-accountinfo">ZIP CODE</label>
                    <input type="text" class="inputs-accountinfo" name="postal">
                </div>

                <input class="submit-accountinfo" type="submit" value="Save Changes" name="submit">
            </form>
        </div>
    </div>
    <?php
        include "../sections/footer.html";
        ob_end_flush();
    ?>
</body>

</html>