<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <div class="Container">
        <div class="Border">
            <img src="../images/intranet.jpg" alt="Intranet" class="Image">
        </div>
    </div>
    <div class="LoginContainer">
        <h4>Welcome back!</h4>
        <h2>Login to your account</h2>
        <form action="loginIndex.php" method="post">
            <div class="email">
                <label for="email">E-mail address:</label>
                <div class="Register"><a href="./sign-up.php">Create an account</a></div> <!-- Add Signup page hyperlink later -->
                <input type="text" id="emailaddress" name="emailaddress" required placeholder="Please enter your email...">
            </div>
            <div class="password">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required placeholder="Please enter your password...">
            </div>
            <div class="login">
                <input type="submit" value="Login">
                <p>Forgot your password?</p>
            </div>
        </form>
    </div>
</body>
</html>
