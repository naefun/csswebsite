<?php
session_start();
require_once("../includes/functions.php");
if(!isset($_SESSION['user_id'])){
    header("location: login.php");
    exit;
}
?>

<!doctype html>
<html>

<head>
    <title>Contact | InTheZone</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../CSS/style.css">
    <script type="text/javascript" src="../JS/basiccalendar.js"></script>
</head>

<body>
    <!-- -------------------------------------header starts here---------------------------------------- -->
    <?php include("../includes/header.php"); ?>
    <!-- ------------------------------------------header ends here------------------------------------- -->

    <!-- ------------------------------------- contact.php starts here ------------------------------------------ -->

    <div class="contactWrapper">
        <div class="contactInfo">
            <div class="cInfo" id="email">
                <img src="../IMGS/email.png" alt="Email Address" class="infoImg">
                <div class="infoDetails">
                    <p class="detail">inthezone<br>@email.com</p>
                </div>
            </div>
            <div class="cInfo" id="phone">
                <img src="../IMGS/phone.png" alt="Phone Number" class="infoImg">
                <div class="infoDetails">
                    <p class="detail">0800 912977<br>Lines are open:<br><span class="wk">Weekdays</span><br>08:00 -
                        17:30<br><span class="wk">Weekends</span><br>10:00 - 14:00</p>
                </div>
            </div>
            <div class="cInfo" id="socialMedia">
                <img src="../IMGS/social.png" alt="Social Media" class="infoImg">
                <div class="infoDetails">
                    <ul class="socialMedias">
                        <li><a id="m1" href="https://www.facebook.com" target="_blank" class="linkDetail detail">Facebook</a></li>
                        <li><a id="m2" href="https://www.twitter.com" target="_blank" class="linkDetail detail">Twitter</a></li>
                        <li><a id="m3" href="https://www.instagram.com" target="_blank" class="linkDetail detail">Instagram</a></li>
                    </ul>
                </div>
            </div>
            <div class="cInfo" id="hqAddress">
                <img src="../IMGS/mail.png" alt="Headquarters Address" class="infoImg">
                <div class="infoDetails">
                    <p class="detail">31 Inthezone Avenue<br> B23 5IZ<br> Birmingham</p>
                </div>
            </div>
        </div>

        <div class="contactForm">
            <form action="#" class="formWrapper">
                <label for="fName">Full Name</label>
                <input type="text" id="fName" name="fullName" placeholder="Your full name...">

                <label for="email">Email</label>
                <input type="text" id="email" name="userEmail" placeholder="Your email address...">

                <label for="phoneNumber">Phone Number</label>
                <input type="text" id="phoneNumber" name="userPhone" placeholder="Your phone number...">

                <label for="contactPreference">Contact Preference</label><br>
                <ul class="radioList">
                    <li><input type="radio" name="contactPref" value="Phone" checked> Phone</li>
                    <li><input type="radio" name="contactPref" value="Email"> Email</li>
                    <li><input type="radio" name="contactPref" value="Either"> Any</li>
                </ul>

                <label for="message">What's your message</label>
                <br><textarea name="message" id="message" placeholder="Write something..."></textarea><br>

                <input type="submit" value="Submit">
            </form>
        </div>
    </div>

    <!-- ------------------------------------- contact.php ends here ------------------------------------------ -->

    <!-- ------------------------------------- footer starts here---------------------------------------- -->
    <?php include("../includes/footer.php"); ?>
    <!-- ------------------------------------- footer ends here ---------------------------------------- -->
</body>

</html>