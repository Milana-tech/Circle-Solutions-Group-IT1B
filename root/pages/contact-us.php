<<<<<<< HEAD
<?php
ob_start();
?>

=======
>>>>>>> 3a68f407afb7adf4e73ad2bc226140fd49da6912
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Contact Us</title>
    <link rel="stylesheet" href="../css/contact.css" type="text/css">
=======
    <title>Circle Solutions</title>
    <script src="http://localhost/Milana-tech-Circle-Solutions-Group-IT1B/root/scripts/header.js"></script>
>>>>>>> 3a68f407afb7adf4e73ad2bc226140fd49da6912
    <link rel="stylesheet" href="../css/global.css" type="text/css">
</head>

<body>
<<<<<<< HEAD
    <main class="main-container form-group">
        <div class="topest">
            <h1 class="dark-blue center"><strong>Contact Us</strong></h1>
            <p class="dark-blue center">Any questions or remarks? Just write us a message!</p>
        </div>
        <div class="grid">
            <div class="whole-div">
                <div class="square-info">
                    <div class="content">
                        <h1 class="white">Contact Information</h1>
                        <small class="grey">Say something to start a live chat!</small>
                    </div>
                    <p class="icons white"><img src="../icons/bxs_phone-call.png" alt="Phone icon">+31 6 567788234</p>
                    <p class="icons white"><img src="../icons/ic_sharp-email.png" alt="Email icon"><strong>hi@circlesolutions.com</strong></p>
                    <p class="icons white"><img src="../icons/Vector.png" class="icon3" alt="Location icon">Van Schaikweg 94, 7811 KL Emmen</p>
                    <div class="circle">
                    </div>
                    <div class="circle2">
                    </div>
                </div>
                <div class="form-right">
                    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
                        <div class="flex">
                            <div class="first name position">
                                <label for="fname">First Name</label>
                                <input type="text" class="full-width" name="fname" placeholder="Please enter your name" id="fname" required>
                            </div>
                            <div class="second name position">
                                <label for="lname">Last Name</label>
                                <input type="text" class="full-width" name="lname" placeholder="Please enter your last name" id="lname" required>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="third name position">
                                <label for="email">Email</label>
                                <input type="text" class="full-width" name="email" placeholder="Please enter your email" id="email" required>
                            </div>
                            <div class="forth name position">
                                <label for="phonenumber">Phone Number</label><br>
                                <input type="text" class="full-width" name="phonenumber" placeholder="Please enter your number" maxlength="10" id="phonenumber" required><br>
                            </div>
                        </div>
                        <p class="subject dark-blue"><strong>Select Subject</strong></p>
                        <div class="radio-container">
                            <div class="radios">
                                <input type="radio" name="inquiry" id="general" required>
                                <label for="general">General Inquiry</label>
                            </div>
                            <div class="radios">
                                <input type="radio" name="inquiry" id="product" required>
                                <label for="product">Product/Service Inquiries</label>
                            </div>
                            <div class="radios">
                                <input type="radio" name="inquiry" id="collaboration" required>
                                <label for="collaboration">Collaboration Inquiries</label>
                            </div>
                            <div class="radios">
                                <input type="radio" name="inquiry" id="payment" required>
                                <label for="payment">Billing and Payment Inquiries</label>
                            </div>
                        </div>
                        <p class="dark-blue">Message</p>
                        <input type="text" name="message" class="custom-input" placeholder="Write you message..."
                            id="message" required>
                        <div class="button">
                            <input type="submit" value="Send message">
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
            </div>
            <div class="box-question">
                <p class="dark-blue padding"><b>Still have questions?</b></p>
                <p class="dark-blue">Can’t find the answer you’re looking for? Take a look on our Q&A page!</p>
                <div class="button-question">
                    <p class="dark-blue"><b>Get answers</b></p>
=======
    <?php
    include "../sections/header.html";
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
            <div class="contact-right">
                <form action="link/to/php">
                    <div class="contact-flex01">
                        <div class="contact-row">
                            <label for="contact-fname" class="contact-inline">First Name</label>
                            <input type="text" name="contact-fname" placeholder="Please enter your name"
                                id="contact-fname" required>
                        </div>
                        <div class="contact-row">
                            <label for="contact-lname" class="contact-inline">Last Name</label>
                            <input type="text" name="contact-lname" placeholder="Please enter your last name"
                                id="contact-lname" required>
                        </div>
                    </div>
                    <div class="contact-flex02">
                        <div class="contact-row">
                            <label for="contact-email" class="contact-inline">Email</label>
                            <input type="text" name="contact-email" placeholder="Please enter your email"
                                id="contact-email" required>
                        </div>
                        <div class="contact-row">
                            <label for="contact-phonenumber" class="contact-inline">Phone Number</label>
                            <input type="text" name="contact-phonenumber" placeholder="Please enter your number"
                                id="contact-phonenumber" required>
                        </div>
                    </div>
                    <div class="contact-nowrap">
                        <p class="contact-darkblue"><strong>Select Subject</strong></p>
                    </div>
                    <div class="radio-container">
                        <div class="contact-radios">
                            <input type="radio" class="contact-selector" name="contactselect[]" id="contact-inquiry"
                                required>
                            <label for="contact-inquiry">General Inquiry</label>
                        </div>
                        <div class="contact-radios">
                            <input type="radio" class="contact-selector" name="contactselect[]" id="contact-product"
                                required>
                            <label for="contact-product">Product/Service Inquiries</label>
                        </div>
                        <div class="contact-radios">
                            <input type="radio" class="contact-selector" name="contactselect[]"
                                id="contact-collaboration" required>
                            <label for="contact-collaboration">Collaboration Inquiries</label>
                        </div>
                        <div class="contact-radios">
                            <input type="radio" class="contact-selector" name="contactselect[]" id="contact-payment"
                                required>
                            <label for="contact-payment">Billing and Payment Inquiries</label>
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
>>>>>>> 3a68f407afb7adf4e73ad2bc226140fd49da6912
                </div>
            </div>
        </div>
    </main>
<<<<<<< HEAD
</body>

</html>
<?php
ob_end_flush();
?>
=======
    <?php
    include "../sections/footer.html";
    ?>
</body>

</html>
>>>>>>> 3a68f407afb7adf4e73ad2bc226140fd49da6912
