<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circle Solutions</title>
    <script src="http://localhost/Milana-tech-Circle-Solutions-Group-IT1B/root/scripts/header.js"></script>
    <link rel="stylesheet" href="../css/global.css" type="text/css">
</head>

<body>
    <?php
    include "../sections/header.html";

    
    $errorMessage = "Recovery link sent to your email";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["email"])) {
            $errorMessage = "Please enter your email.";
        }
    }
    ?>
    <div class="accountFormTypePage">
        <div class="container">
            <div class="image-section">
                <img src="../images/intranet.jpg" alt="intranet" />
            </div>
            <div class="form-section">
                <h2>Recover your password</h2>
                <p>Don't have an account? <a href="./sign-up.php">Sign up</a></p>
                <!-- no form action -->
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Email" />
                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($errorMessage)) {
                            echo "<p class='errors'>$errorMessage</p>";
                        }
                        ?>
                    </div>
                    <input type="submit" class="btn" value="Send recovery email">
                </form>
            </div>
        </div>
    </div>
    <?php
    include "../sections/footer.html";
    ?>
</body>

</html>