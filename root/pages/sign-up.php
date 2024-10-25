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
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Circle Solutions</title>
    <script src="../scripts/header.js"></script>
    <link rel="stylesheet" href="../css/global.css" type="text/css">
</head>

<body>
  <?php
  include "../sections/header.php";
  ?>
  <div id="sign-up" class="accountFormTypePage">

    <div class="container">
      <div class="form-section">
        <h2>Signup</h2>
        <p>Already have an account? <a href="./login.php">Login</a></p>
        <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
          <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" placeholder="Full name" required />
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Email" required />
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Password" required />
          </div>
          <div class="form-group">
            <label for="cPassword">Confirm Password</label>
            <input type="password" id="cPassword" name="cPassword" placeholder="Confirm Password" required />
          </div>
          <div class="form-group checkbox">
            <input type="checkbox" id="terms" name="terms" required />
            <label for="terms">I have read and agreed to the Terms of Service and Privacy Policy </label>
          </div>
          <input type="submit" class="btn" value="Create Account">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $name = filter_input(INPUT_POST, "name");
          $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
          $password = filter_input(INPUT_POST, "password");
          $cPassword = filter_input(INPUT_POST, "cPassword");


         
          if (!empty($name) && $email !== FALSE && !empty($password) && !empty($cPassword)) {
            if ($password === $cPassword) {
            //  issue starts might be here   
             header("Location: index.php");
              exit();
            } elseif ($password != $cPassword) {
              echo "<p class = 'errors errorMsg'>Passwords do not match</p>";
            }
          } else {
            if ($email === FALSE) {
              echo "<br>Your provided email is invalid";
            } else {
              echo "<br>Please fill in all the required fields.";
            }
          }
        }
        ?>
      </div>
      <div class="image-section">
        <img src="../images/intranet.jpg" alt="intranet" />
      </div>
    </div>
  </div>
  <?php
  include "../sections/footer.html";
  ob_end_flush();
  ?>
</body>

</html>