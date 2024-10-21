<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginPHP</title>
</head>
<body>
<?php

$valid_email = "user@user.com";
$valid_password = "password";


$email = $_POST['emailaddress'];
$password = $_POST['password'];


if ($email === $valid_email && $password === $valid_password) {
    echo "<h2>Login successful! Welcome, $email.</h2>";
    echo "<a href='index.php'>Go back to home page</a>"; 
} else {
    echo "<h2>Invalid username or password.</h2>";
    echo "<a href='index.php'>Try again</a>";
}
?>
<!-- Above add go back to home page hyperlink -->
</body>
</html>
