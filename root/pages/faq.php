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
    <div class="faq">
        <div class="Faq-ask">
            <h2> Ask us anything</h2>
            <h5>Have any questions? We're here to assit you.</h5>
        </div>
        <div class="contain-Faq">

            <div class="grid-container-Faq">
                <div class="intranet">

                    <img src="../images/email2.jpeg" alt="Intranet icon">
                    <p>
                    <h4>What is an intranet?</h4>
                    Intranet means a closed network that resides on a loclal network.
                    An Intranet acts like a website that only authorized users can access and is generally used by
                    organisations who wish to share knowledge, internal communications, and information with their
                    colleagues.</p>
                </div>

                <div class="difference">
                    <img src="../images/Intranet2.jpeg" alt="Intranet icon">
                    <p>
                    <h4>What is the difference between the internet and an intranet?</h4>
                    The main difference between an intranet and the internet is that the former is a closed network, and
                    the latter is a public network.
                    In short, the internet is for all; a company intranet is for a select group of people.</p>
                </div>

                <div class="extranet">
                    <img src="../images/Comment2.jpeg" alt="Comment2 icon">
                    <p>
                    <h4>What is an intranet and an extranet?</h4>
                    An intranet is a closed network designed to allow an organization to share information and corporate
                    communication among its employees.
                    An extranet is similar to an intranet, but allows third-party entry, so vendors or partners can
                    experience full or selected access.</p>
                </div>

                <div class="sites">
                    <img src="../images/Delivery.jpeg" alt="Delivery icon">
                    <p>
                    <h4>What are intranet sites?</h4>
                    Intranet sites are closed internal networks for authorized members of an organization to share
                    information.
                    They act as a company news channel, an internal communications tool, and a collaboration tool.</p>
                </div>

                <div class="applications">
                    <img src="../images/Hand.jpeg" alt="Hand icon">
                    <p>
                    <h4>What are intranet applications?</h4>
                    Intranet applications are software within an intranet like document publishing, communication tools,
                    broadcasts, etc.
                    These applications allow the user to do a range of activities, for example: publish a blog, connect
                    with a colleague, or run employee surveys.</p>
                </div>

                <div class="portal">
                    <img src="../images/Sonic.jpeg" alt="Sonic icon">
                    <p>
                    <h4>What is an intranet portal?</h4>
                    An intranet portal is the access point to the user's company intranet.
                    It is on the intranet portal where the user can access intranet applications as well as external
                    apps, and information and knowledge that is stored within the intranet itself.</p>
                </div>

                <div class="remotely?">
                    <img src="../images/Recycle.jpeg" alt="Recycle icon">
                    <p>
                    <h4>Can an intranet be accessed remotely?</h4>
                    Yes, an intranet can be accessed on a range of devices, regardless of location – all that is
                    required is an internet connection.
                    This is ideal for any organization with dispersed or front-line employees who need communication
                    tools and access to organizational information wherever they are.</p>
                </div>

                <div class="without">
                    <img src="../images/Carrot.jpeg" alt="Carrot icon">
                    <p>
                    <h4>Can an intranet work without the internet?</h4>
                    Former on-premise company intranets could operate without internet.
                    But for a wide range of reasons, the majority of company intranet applications are now cloud-based,
                    so an internet connection is necessary.</p>
                </div>

                <div class="do">
                    <img src="../images/Heart.jpeg" alt="Heart icon">
                    <p>
                    <h4>What does an intranet do?</h4>
                    Offering all types of organizational solutions, intranet software can improve employee engagement,
                    aid communication, and increase collaboration.
                    Modern intranets are now mostly cloud-based which allows global organizations to connect, share
                    knowledge, and broadcast news quickly and easily.</p>
                </div>

            </div>
            <div class="box-question faq-question">
                <p class="contact-darkblue contact-inline"><b>Still have questions?</b></p>
                <p class="contact-darkblue contact-inline">Can't find the answer you're looking for? Please chat to our friendly team.</p>
                <div class="button-question">
                    <a href="./contact-us.php" class="a-href-contact">
                        <p class="contact-darkblue contact-inline"><b>Get answers</b></p>
                    </a>
                </div>
            </div>
        </div>


    </div>

    <?php
    include "../sections/footer.html";
    ob_end_flush();
    ?>

</body>

</html>