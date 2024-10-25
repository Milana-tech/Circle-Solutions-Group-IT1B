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
    include "../sections/header.html";
    $total = isset($_GET['price']) ? $_GET['price'] : 0;
    $taxes = 20;
    $price = $total - $taxes;
    $name = isset($_GET['name']) ? $_GET['name'] : "ERROR";
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
            <div class="checkout_form form-group">
                <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
                    <div class="checkout_flex01">
                        <div class="checkout_half">
                            <label for="checkout_fname" class="checkout_label">First name*</label>
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
                            <input type="text" name="checkout_phonenumber" maxlength="10" id="checkout_phonenumber" required>
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
                            <input type="text" name="checkout_postcode" id="checkout_postcode" maxlength="7" required>
                        </div>
                    </div>
                    <div class="checkoutButton">
                        <input type="submit" class="checkoutButton" value="Proceed to Next Step">
                    </div>
                </form>

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $email = filter_input(INPUT_POST, "checkout_email", FILTER_VALIDATE_EMAIL);

                    if (!empty($email)) {
                        echo "Purchase completed!";
                    } else {
                        echo "<p class='errors'> Error. Invalid email. </p>";
                    }
                }
                ?>

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
                <p><?php echo $name ?></p>
                <p>&#8364; <?php echo number_format($price, 2); ?></p>
            </div>
            <hr class="checkout_hr">
            <div class="checkout_row">
                <p>TAXES</p>
                <p>&#8364; <?php echo number_format($taxes, 2); ?></p>
            </div>
            <hr class="checkout_hr">
            <div class="checkout_row checkout_padding">
                <p>Total</p>
                <p><strong>&#8364; <?php echo number_format($total, 2); ?></strong></p>
            </div>
        </div>
        </div>
    </main>
    <?php
    include "../sections/footer.html";
    ?>
</body>

</html>