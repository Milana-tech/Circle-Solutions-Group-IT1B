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
    <main class="contact-container">
        <div class="contact-header contact-heading-wrap">
            <h1 class="contact-darkblue contact-flex-center"><strong>Contact Us</strong></h1>
            <p class="contact-darkblue contact-flex-center">Any questions or remarks? Just write us a message!</p>
        </div>
        <div class="contact-grid">
            <div class="contact-left">
                <div class="contact-left-text contact-heading-wrap">
                    <h1 class="contact-white">Contact Information</h1>
                    <p id="contact-grey">Say something to start a live chat!</p>
                </div>
                <div class="contact-inline-icons">
                    <p class="contact-icons contact-white"><img src="../images/phone.png" class="icons-contact" alt="phone">+31 6567788234</p>
                    <p class="contact-icons contact-white"><img src="../images/email.png" alt="email" class="icons-contact"><strong>hi@circlesolutions.com</strong></p>
                    <p class="contact-icons contact-white"><img src="../images/location.png" class="location-icon icons-contact" alt="location">Van Schaikweg 94, 7811 KL Emmen</p>
                </div>
                <div class="contact-circle">
                </div>
                <div class="contact-circle2">
                </div>
            </div>
            <div class="contact-right form-group">
                <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
                    <div class="contact-flex01">
                        <div class="contact-row">
                            <label for="fname" class="contact-inline">First Name</label>
                            <input type="text" name="fname" placeholder="Please enter your name" id="fname" required>
                        </div>
                        <div class="contact-row">
                            <label for="lname" class="contact-inline">Last Name</label>
                            <input type="text" name="lname" placeholder="Please enter your last name" id="lname" required>
                        </div>
                    </div>
                    <div class="contact-flex02">
                        <div class="contact-row">
                            <label for="email" class="contact-inline">Email</label>
                            <input type="text" name="email" placeholder="Please enter your email" id="email" required>
                        </div>
                        <div class="contact-row">
                            <label for="phonenumber" class="contact-inline">Phone Number</label>
                            <input type="text" name="phonenumber" placeholder="Please enter your number"
                                id="phonenumber" required>
                        </div>
                    </div>
                    <div class="contact-nowrap">
                        <p class="contact-darkblue"><strong>Select Subject</strong></p>
                    </div>
                    <div class="radio-container">
                        <div class="contact-radios">
                            <input type="radio" name="inquiry" id="general" required>
                            <label for="general">General Inquiry</label>
                        </div>
                        <div class="contact-radios">
                            <input type="radio" name="inquiry" id="product" required>
                            <label for="product">Product/Service Inquiries</label>
                        </div>
                        <div class="contact-radios">
                            <input type="radio" name="inquiry" id="collaboration" required>
                            <label for="collaboration">Collaboration Inquiries</label>
                        </div>
                        <div class="contact-radios">
                            <input type="radio" name="inquiry" id="payment" required>
                            <label for="payment">Billing and Payment Inquiries</label>
                        </div>
                    </div>
                    <div class="contact-nowrap">
                        <p class="contact-darkblue">Message</p>
                    </div>
                    <input type="text" name="contact-message" class="custom-input" placeholder="Write you message..."
                        id="contact-message" required>
                    <div class="contact-button">
                        <input type="submit" name="contact-button" id="contact-button" value="Send message">
                    </div>
                </form>
                <?php
                if ($_SERVER["REQUEST_METHOD"]  == "POST") {
                    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

                    if (!empty($email)) {
                        echo "<p class='errors'> Message sent successfully! </p>";
                    } else {
                        echo "<p class='errors'> Error your messasge was not sent. Invalid email. </p>";
                    }
                }
                ?>
                <div class="air">
                    <img src="../images/ee9158ca0835b430d0b6ef56e2d7385e.png" class="airport" alt="airpot">
                </div>
            </div>
            <div class="box-question">
                <p class="contact-darkblue contact-inline"><b>Still have questions?</b></p>
                <p class="contact-darkblue contact-inline">Can’t find the answer you’re looking for? Take a look on our
                    Q&A page!</p>
                <div class="button-question">
                    <a href="./faq.php" class="a-href-contact">
                        <p class="contact-darkblue contact-inline"><b>Get answers</b></p>
                    </a>
                </div>
            </div>
        </div>
    </main>
    <?php
    include "../sections/footer.html";
    ob_end_flush();
    ?>
</body>

</html>