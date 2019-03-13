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
    <script type="text/javascript" src="../JS/banner.js"></script>
    <script src="../JS/zones.js"></script>
</head>

<body>
    <!-- -------------------------------------header starts here---------------------------------------- -->
    <?php include("../includes/header.php"); ?>
    <!-- ------------------------------------------header ends here------------------------------------- -->

    <!-- -------------------------------------- events.php starts here ------------------------------- -->
    <!-- container for events page -->
    <div class="eventContainer">

        <!-- info about page -->
        <div class="eventBlurb">
            <p>Each of our Zones have events happening all throughout the year, this page will give you information
                about all the events happening. So check them out and see if theres one happening near you!</p>
        </div>

        <!-- main content wrapper -->
        <div class="eventWrapper">

            <!-- image banner -->
            <div class="eventBanner">
                <!-- slide 1 -->
                <div class="mySlides" id="slide1">
                    <p class="bannerInfo" id="bannerText">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab
                        sunt vitae accusantium quis eum! Deserunt, eos exercitationem. Corrupti odio atque sequi
                        accusamus nobis rerum quaerat dicta laborum incidunt? Unde, nihil.</p>
                </div>
                <!-- slide 2 -->
                <div class="mySlides" id="slide2">
                    <p class="bannerInfo" id="bannerText">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Dicta corrupti animi quo? Veniam tenetur nam ratione, hic similique distinctio iure doloribus
                        explicabo exercitationem deleniti at, repudiandae quo error maiores? Totam!</p>
                </div>
                <!-- slide 3 -->
                <div class="mySlides" id="slide3">
                    <p class="bannerInfo" id="bannerText">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet
                        deleniti quidem aspernatur! Vitae, error! Eveniet quibusdam, alias voluptatum accusamus
                        veritatis ipsa repudiandae ipsum modi, corporis, quod totam officia iusto quidem?</p>
                </div>

                <!-- buttons to change slides -->
                <button class="bannerButton" id="leftButton" onclick="plusDivs(-1)">&#10094;</button>
                <button class="bannerButton" id="rightButton" onclick="plusDivs(1)">&#10095;</button>
            </div>

            <!-- wrapper for event info & calendar -->
            <div class="eventShowcase">
                <!-- calender script wrapper -->
                <div class="eventCalendar">
                    <script>
                        var todaydate = new Date()
                        var curmonth = todaydate.getMonth() + 1 //get current month (1-12)
                        var curyear = todaydate.getFullYear() //get current year
                        var day = todaydate.getDay() //get current day (0-6)

                        document.write(buildCal(curmonth, curyear, "main", "month", "daysofweek", "days", 1));
                    </script>
                </div>

                <!-- event showcase wrapper -->
                <div class="showcaseInfo">

                    <h3 class="showcaseBlurb">Click an event below to find out more info!</h3>
                    <!-- event 1 -->
                    <div class="eventBlock" id="event1">
                        <h2 onclick="eventInfo('eventInfo1')" class="eventName">CoD Blackout Tournament</h2>
                        <div class="eventInfo" id="eventInfo1">
                            <p id="eventLocation">Digbeth Zone</p>
                            <p id="eventDate">09/01/2019</p>
                            <p id="eventTime">12:00 - 17:00</p>
                            <p id="eventDetails">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste
                                voluptatibus
                                esse tempore libero ipsa tempora possimus eligendi quaerat ratione nihil consectetur,
                                perspiciatis aliquid ipsam minima neque ut totam aperiam quasi?</p>
                            <a href="contact.php" class="enquire">Enquire</a>
                        </div>
                    </div>
                    <!-- event 2 -->
                    <div class="eventBlock" id="event2">
                        <h2 onclick="eventInfo('eventInfo2')" class="eventName">Fortnite LAN Party</h2>
                        <div class="eventInfo" id="eventInfo2">
                            <p id="eventLocation">New York Zone</p>
                            <p id="eventDate">08/03/2019</p>
                            <p id="eventTime">09:00 - 19:00</p>
                            <p id="eventDetails">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste
                                voluptatibus
                                esse tempore libero ipsa tempora possimus eligendi quaerat ratione nihil consectetur,
                                perspiciatis aliquid ipsam minima neque ut totam aperiam quasi?</p>
                            <a href="contact.php" class="enquire">Enquire</a>
                        </div>
                    </div>
                    <!-- event 3 -->
                    <div class="eventBlock" id="event3">
                        <h2 onclick="eventInfo('eventInfo3')" class="eventName">Rainbow 6 Siege Tournament</h2>
                        <div class="eventInfo" id="eventInfo3">
                            <p id="eventLocation">Canary Wharf Zone</p>
                            <p id="eventDate">08/04/2019</p>
                            <p id="eventTime">12:00 - 18:00</p>
                            <p id="eventDetails">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste
                                voluptatibus
                                esse tempore libero ipsa tempora possimus eligendi quaerat ratione nihil consectetur,
                                perspiciatis aliquid ipsam minima neque ut totam aperiam quasi?</p>
                            <a href="contact.php" class="enquire">Enquire</a>
                        </div>
                    </div>
                    <!-- event 4 -->
                    <div class="eventBlock" id="event4">
                        <h2 onclick="eventInfo('eventInfo4')" class="eventName">Pro LoL Player Meet & Greet</h2>
                        <div class="eventInfo" id="eventInfo4">
                            <p id="eventLocation">New York Zone</p>
                            <p id="eventDate">23/04/2019</p>
                            <p id="eventTime">10:00 - 14:00</p>
                            <p id="eventDetails">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste
                                voluptatibus
                                esse tempore libero ipsa tempora possimus eligendi quaerat ratione nihil consectetur,
                                perspiciatis aliquid ipsam minima neque ut totam aperiam quasi?</p>
                            <a href="contact.php" class="enquire">Enquire</a>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- -------------------------------------- events.php starts here ------------------------------- -->


    <!-- ------------------------------------- footer starts here---------------------------------------- -->
    <?php include("../includes/footer.php"); ?>
    <!-- ------------------------------------- footer ends here ---------------------------------------- -->
</body>

</html>