<?php
session_start();
ob_start();
if (!isset($_SESSION['loggedIn'])) {
    $_SESSION['loggedIn'] = false;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (str_ends_with($email, '.com') && $password == "user") {
        $_SESSION['loggedIn'] = true;
        $_SESSION['email'] = $email;
        header("Location: index.php");
        exit();
    } else {
        $_SESSION['error_message'] = "Invalid email format or credintenitals";
        header("Location: login.php");
        exit();
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

    <div class="accountFormTypePage">
        <div class="container">
            <div class="image-section">
                <img src="../images/intranet.jpg" alt="intranet" />
            </div>
            <div class="form-section">
                <h4 class="lightGrey">Welcome back!</h4>
                <h2>Login</h2>
                <p>Don't have an account? <a href="./sign-up.php">Sign up</a></p>
                <form method="POST" action="login.php">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Email" required />
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Password" required />
                    </div>
                    <a href="./account-recovery.php">Forgot password?</a>
                    <input type="submit" class="btn" value="Login">
                </form>
                <?php
                if (isset($_SESSION['error_message'])) {
                    echo "<p style='color: red;'>" . htmlspecialchars($_SESSION['error_message']) . "</p>";
                    unset($_SESSION['error_message']);
                }
                ?>
            </div>
        </div>
    </div>
    <?php
    include "../sections/footer.html";
    ob_end_flush();
    ?>
</body>

</html>