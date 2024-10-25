<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="http://localhost/Milana-tech-Circle-Solutions-Group-IT1B/root/scripts/header.js"></script>
    <!-- <link rel="stylesheet" href="../css/login.css"> -->
    <link rel="stylesheet" href="../css/global.css">
</head>

<body>
    <?php
    include "../sections/header.html";
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
                <form action="loginIndex.php" method="POST">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Email" required />
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Password" required />
                    </div>
                    <a href="./account-recovery.php">Forgot password?</a>
                    <input type="submit" class="btn" value="Create Account">
                </form>
            </div>
        </div>
    </div>
    <!-- <div class="content">
        <div class="loginImageDiv">
            <img src="../images/intranet.jpg" alt="Intranet" class="Image">
        </div>
        <div class="loginFormDiv">
            <h4 class="lightGrey">Welcome back!</h4>
            <h2>Login to your account</h2>
            <form action="loginIndex.php" method="post">
                <div>
                    <label for="email">E-mail address:</label>
                    <div class="Register">Not registered? <a href="./sign-up.php">Create an account</a></div>
                    <input type="text" id="emailaddress" name="emailaddress" required placeholder="Please enter your email...">
                </div>
                <div>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required placeholder="Please enter your password...">
                </div>
                <div>
                    <input type="submit" value="Login">
                </div>
                <a href="./password-recovery.php">Forgot your password?</a>
            </form>
        </div>

    </div> -->
    <?php
    include "../sections/footer.html";
    ?>
</body>

</html>