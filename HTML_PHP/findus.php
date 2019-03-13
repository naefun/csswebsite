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
    <title>Home | InTheZone</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../CSS/style.css">
    <script type="text/javascript" src="../JS/basiccalendar.js"></script>
</head>

<body>
    <!-- -------------------------------------header starts here---------------------------------------- -->
    <?php include("../includes/header.php"); ?>
    <!-- ------------------------------------------header ends here------------------------------------- -->
    <div class="findusWrapper">

        <div class="zonesMap">
            <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1kxiR2mhcx9Jsx7nZ_mvO4pPdlBpkaG-7"></iframe>
        </div>

        <div class="zonesInfo">

            <div class="zoneWindow">
                <h2>InTheZone Digbeth</h2>
                <p>0121 328 3829</p>
                <p>81 zone road, B12 3AB, Birmingham</p>
                <ul><span class="OTT">Zone Opening Times</span>
                    <li>Monday: 08:00 - 20:00</li>
                    <li>Tuesday: 08:00 - 20:00</li>
                    <li>Wednesday: 08:00 - 20:00</li>
                    <li>Thursday: 08:00 - 20:00</li>
                    <li>Friday: 08:00 - 20:00</li>
                    <li>Saturday: 08:00 - 20:00</li>
                    <li>Sunday: Closed</li>
                </ul>
            </div>

            <div class="zoneWindow">
                <h2>InTheZone New York</h2>
                <p>212-432-1871</p>
                <p>86 Trinity Pl, New York</p>
                <ul><span class="OTT">Zone Opening Times</span>
                    <li>Monday: 08:00 - 20:00</li>
                    <li>Tuesday: 08:00 - 20:00</li>
                    <li>Wednesday: 08:00 - 20:00</li>
                    <li>Thursday: 08:00 - 20:00</li>
                    <li>Friday: 08:00 - 20:00</li>
                    <li>Saturday: 08:00 - 20:00</li>
                    <li>Sunday: Closed</li>
                </ul>
            </div>

            <div class="zoneWindow">
                <h2>InTheZone Canary Wharf</h2>
                <p>020 09367892</p>
                <p>Cabot Square, Canary Wharf, London E14 4QT</p>
                <ul><span class="OTT">Zone Opening Times</span>
                    <li>Monday: 08:00 - 20:00</li>
                    <li>Tuesday: 08:00 - 20:00</li>
                    <li>Wednesday: 08:00 - 20:00</li>
                    <li>Thursday: 08:00 - 20:00</li>
                    <li>Friday: 08:00 - 20:00</li>
                    <li>Saturday: 08:00 - 20:00</li>
                    <li>Sunday: Closed</li>
                </ul>
            </div>

            <div class="zoneWindow">
                <h2>InTheZone Katowice</h2>
                <p>(+48)32/2004444</p>
                <p>Al. Rozdzienskiego 16 40 202 KATOWICE</p>
                <ul><span class="OTT">Zone Opening Times</span>
                    <li>Monday: 08:00 - 20:00</li>
                    <li>Tuesday: 08:00 - 20:00</li>
                    <li>Wednesday: 08:00 - 20:00</li>
                    <li>Thursday: 08:00 - 20:00</li>
                    <li>Friday: 08:00 - 20:00</li>
                    <li>Saturday: 08:00 - 20:00</li>
                    <li>Sunday: Closed</li>
                </ul>
            </div>

            <div class="zoneWindow">
                <h2>InTheZone Las Angeles</h2>
                <p>318-495-1837</p>
                <p>523 Rose Ave, Venice, CA 90291</p>
                <ul><span class="OTT">Zone Opening Times</span>
                    <li>Monday: 08:00 - 20:00</li>
                    <li>Tuesday: 08:00 - 20:00</li>
                    <li>Wednesday: 08:00 - 20:00</li>
                    <li>Thursday: 08:00 - 20:00</li>
                    <li>Friday: 08:00 - 20:00</li>
                    <li>Saturday: 08:00 - 20:00</li>
                    <li>Sunday: Closed</li>
                </ul>
            </div>

            <div class="zoneWindow">
                <h2>InTheZone Las Vegas</h2>
                <p>(702) 367-5555</p>
                <p>202 Fremont St, Las Vegas, NV 89101</p>
                <ul><span class="OTT">Zone Opening Times</span>
                    <li>Monday: 08:00 - 20:00</li>
                    <li>Tuesday: 08:00 - 20:00</li>
                    <li>Wednesday: 08:00 - 20:00</li>
                    <li>Thursday: 08:00 - 20:00</li>
                    <li>Friday: 08:00 - 20:00</li>
                    <li>Saturday: 08:00 - 20:00</li>
                    <li>Sunday: Closed</li>
                </ul>
            </div>

        </div>
    </div>





    <!-- ------------------------------------- footer starts here---------------------------------------- -->
    <?php include("../includes/footer.php"); ?>
    <!-- ------------------------------------- footer ends here ---------------------------------------- -->
</body>

</html>