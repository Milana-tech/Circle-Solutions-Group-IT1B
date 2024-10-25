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
        <h2>Sign out</h2>
        <p>Are you sure you would like to sign out?</p>
        <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
          <input type="submit" class="btn" value="Sign out">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          session_destroy();

          if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(
              session_name(),
              '',
              time() - 42000,
              $params["path"],
              $params["domain"],
              $params["secure"],
              $params["httponly"]
            );
          }

          header("Location: login.php");
          exit();
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