<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Out Page</title>
    <link rel="stylesheet" href="../css/global.css" type="text/css">
</head>

<body>
    <?php
        include "../sections/header.html";
    ?>
    <main class="checkout_container">
        <div class="checkout_image_arrow">
            <a href="/link/to/site">
                <img src="../images/arrow.png" alt="Arrow">
            </a>
        </div>
        <div class="checkout_first_side">
            <div class="checkout_header01">
                <p class="header01_paragraph">Personal</p>
                <p class="header01_paragraph">Billing</p>
                <p class="header01_paragraph">Confirmation</p>
            </div>
            <div class="checkout_form">
                <form action="link/to/php">
                    <div class="checkout_flex01">
                        <div class="checkout_half">
                            <label for="checkout_fname" class="checkout_label">First Name*</label>
                            <input type="text" id="checkout_fname" name="checkout_fname" required>
                        </div>
                        <div class="checkout_half">
                            <label for="checkout_lname" class="checkout_label">Last Name*</label>
                            <input type="text" name="checkout_lname" id="checkout_lname" required>
                        </div>
                    </div>
                    <div class="checkout_flex02">
                        <div class="checkout_half">
                            <label for="checkout_email" class="checkout_label">Email Address*</label>
                            <input type="text" name="checkout_email" id="checkout_email" required>
                        </div>
                        <div class="checkout_half">
                            <label for="checkout_phonenumber" class="checkout_label">Phone Number*</label>
                            <input type="text" name="checkout_phonenumber" id="checkout_phonenumber" required>
                        </div>
                    </div>
                    <div class="checkout_flex3">
                        <div class="checkout_flex_full">
                            <label for="checkout_street" class="checkout_label">Street Address*</label>
                            <input type="text" name="checkout_street" id="checkout_street" required>
                        </div>
                        <div class="checkout_flex_full">
                            <label for="checkout_town" class="checkout_label">Town / City*</label>
                            <input type="text" name="checkout_town" id="checkout_town" required>
                        </div>
                        <div class="checkout_flex_full">
                            <label for="checkout_country" class="checkout_label">Country*</label>
                            <input type="text" name="checkout_country" id="checkout_country" required>
                        </div>
                        <div class="checkout_flex_full">
                            <label for="checkout_postcode" class="checkout_label">Postcode / Zip*</label>
                            <input type="text" name="checkout_postcode" id="checkout_postcode" required>
                        </div>
                    </div>
                    <div class="checkoutButton">
                        <input type="submit" class="checkoutButton" value="Proceed to Next Step">
                    </div>
                </form>
            </div>
        </div>
        <div class="checkout_second_side">
            <div class="checkout_header02">
                <p>Card Details</p>
            </div>
            <div class="checkout_row">
                <p>PRODUCT</p>
                <p>VALUE</p>
            </div>
            <hr class="checkout_hr">
            <div class="checkout_row checkout_padding">
                <p>PACKAGE 1</p>
                <p>$180</p>
            </div>
            <hr class="checkout_hr">
            <div class="checkout_row">
                <p>TAXES</p>
                <p>$20</p>
            </div>
            <hr class="checkout_hr">
            <div class="checkout_row checkout_padding">
                <p>Total</p>
                <p><strong>$200</strong></p>
            </div>
        </div>
        </div>
    </main>
    <?php
        include "../sections/footer.html";
    ?>
</body>

</html>