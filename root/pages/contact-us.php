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
                </div>
            </div>
        </div>
    </main>
    <?php
    include "../sections/footer.html";
    ?>
</body>

</html>