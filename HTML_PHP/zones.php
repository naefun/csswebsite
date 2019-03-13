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
    <title>Zones | InTheZone</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../CSS/style.css">
    <script type="text/javascript" src="../JS/basiccalendar.js"></script>
    <script type="text/javascript" src="../JS/zones.js"></script>
</head>

<body>
    <!-- -------------------------------------header starts here---------------------------------------- -->
    <?php include("../includes/header.php"); ?>
    <!-- ------------------------------------------ header ends here ------------------------------------- -->

    <!-- ------------------------------------------ zones.php starts here ------------------------------------- -->

    <div class="zonesWrapper">

        <!-- zone 1 start -->
        <div class="zoneContainer">
            <div class="zoneCover" id="zone1">
                <button class="infoBtn" onclick="zoneInfo('zone1I')"></button>
                <div class="nameWrapper">
                    <h1 class="zoneName">Digbeth Zone</h1>
                </div>
            </div>
            <div id="zone1I">
                <div class="zoneInfo">
                    <div class="zoneLeft zoneSide">
                        <h2>About this Zone</h2>
                        <div class="zoneAbout">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis explicabo velit laborum
                                voluptatibus, cumque assumenda, dolorum incidunt unde dolorem iusto ullam omnis.
                                Pariatur inventore vero nisi soluta ratione, dolorem exercitationem. Lorem ipsum dolor
                                sit amet consectetur adipisicing elit. Ab accusamus labore saepe rerum magni maiores,
                                dolor voluptates sapiente quidem placeat necessitatibus? Deserunt ducimus enim facere
                                dolore rem explicabo harum error.</p>
                        </div>
                        <h2 class="fTitle">Zone Facilities</h2>
                        <div class="facilityContainer">
                            <ul class="fListL">
                                <li>30 High End Gaming PC's</li>
                                <li>5 Xbox one X's</li>
                                <li>5 PS4 Pro's</li>
                                <li>2 VR Stations</li>
                                <li>2 Snooker table's</li>
                                <li>Hardware 4 sale</li>
                            </ul>
                            <ul class="fListR">
                                <li>Sandwich Bar</li>
                                <li>Alcohol Bar</li>
                                <li>3 Vending Machines</li>
                                <li>Games 4 sale</li>
                                <li>Films 4 sale</li>
                                <li>Merch 4 sale</li>
                            </ul>
                        </div>
                    </div>
                    <div class="zoneRight zoneSide">
                        <div class="zoneMap" id="map1">
                            <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1GE3bFgLfWU0aUu2NzXB-9ZwxGkiBif-b"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- zone 1 end -->

        <!-- zone 2 start -->
        <div class="zoneContainer">
            <div class="zoneCover" id="zone2">
                <button class="infoBtn" onclick="zoneInfo('zone2I')"></button>
                <div class="nameWrapper">
                    <h1 class="zoneName">Canary Wharf Zone</h1>
                </div>
            </div>
            <div id="zone2I">
                <div class="zoneInfo">
                    <div class="zoneLeft zoneSide">
                        <h2>About this Zone</h2>
                        <div class="zoneAbout">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis explicabo velit laborum
                                voluptatibus, cumque assumenda, dolorum incidunt unde dolorem iusto ullam omnis.
                                Pariatur inventore vero nisi soluta ratione, dolorem exercitationem. Lorem ipsum dolor
                                sit amet consectetur adipisicing elit. Ab accusamus labore saepe rerum magni maiores,
                                dolor voluptates sapiente quidem placeat necessitatibus? Deserunt ducimus enim facere
                                dolore rem explicabo harum error.</p>
                        </div>
                        <h2 class="fTitle">Zone Facilities</h2>
                        <div class="facilityContainer">
                            <ul class="fListL">
                                <li>30 High End Gaming PC's</li>
                                <li>5 Xbox one X's</li>
                                <li>5 PS4 Pro's</li>
                                <li>2 VR Stations</li>
                                <li>2 Snooker table's</li>
                                <li>Hardware 4 sale</li>
                            </ul>
                            <ul class="fListR">
                                <li>Sandwich Bar</li>
                                <li>Alcohol Bar</li>
                                <li>3 Vending Machines</li>
                                <li>Games 4 sale</li>
                                <li>Films 4 sale</li>
                                <li>Merch 4 sale</li>
                            </ul>
                        </div>
                    </div>
                    <div class="zoneRight zoneSide">
                        <div class="zoneMap" id="map2">
                            <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1EAqsahLmqP132rUHSEZM_drvGVpr9CcC"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- zone 2 end -->

        <!-- zone 3 start -->
        <div class="zoneContainer">
            <div class="zoneCover" id="zone3">
                <button class="infoBtn" onclick="zoneInfo('zone3I')"></button>
                <div class="nameWrapper">
                    <h1 class="zoneName">New York Zone</h1>
                </div>
            </div>
            <div id="zone3I">
                <div class="zoneInfo">
                    <div class="zoneLeft zoneSide">
                        <h2>About this Zone</h2>
                        <div class="zoneAbout">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis explicabo velit laborum
                                voluptatibus, cumque assumenda, dolorum incidunt unde dolorem iusto ullam omnis.
                                Pariatur inventore vero nisi soluta ratione, dolorem exercitationem. Lorem ipsum dolor
                                sit amet consectetur adipisicing elit. Ab accusamus labore saepe rerum magni maiores,
                                dolor voluptates sapiente quidem placeat necessitatibus? Deserunt ducimus enim facere
                                dolore rem explicabo harum error.</p>
                        </div>
                        <h2 class="fTitle">Zone Facilities</h2>
                        <div class="facilityContainer">
                            <ul class="fListL">
                                <li>30 High End Gaming PC's</li>
                                <li>5 Xbox one X's</li>
                                <li>5 PS4 Pro's</li>
                                <li>2 VR Stations</li>
                                <li>2 Snooker table's</li>
                                <li>Hardware 4 sale</li>
                            </ul>
                            <ul class="fListR">
                                <li>Sandwich Bar</li>
                                <li>Alcohol Bar</li>
                                <li>3 Vending Machines</li>
                                <li>Games 4 sale</li>
                                <li>Films 4 sale</li>
                                <li>Merch 4 sale</li>
                            </ul>
                        </div>
                    </div>
                    <div class="zoneRight zoneSide">
                        <div class="zoneMap" id="map3">
                            <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1w7GQdAhGrwRlD5Eas1ExYyiZPKCmsOvZ"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- zone 3 end -->


        <!-- zone 4 start -->
        <div class="zoneContainer">
            <div class="zoneCover" id="zone4">
                <button class="infoBtn" onclick="zoneInfo('zone4I')"></button>
                <div class="nameWrapper">
                    <h1 class="zoneName">Katowice Zone</h1>
                </div>
            </div>
            <div id="zone4I">
                <div class="zoneInfo">
                    <div class="zoneLeft zoneSide">
                        <h2>About this Zone</h2>
                        <div class="zoneAbout">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis explicabo velit laborum
                                voluptatibus, cumque assumenda, dolorum incidunt unde dolorem iusto ullam omnis.
                                Pariatur inventore vero nisi soluta ratione, dolorem exercitationem. Lorem ipsum dolor
                                sit amet consectetur adipisicing elit. Ab accusamus labore saepe rerum magni maiores,
                                dolor voluptates sapiente quidem placeat necessitatibus? Deserunt ducimus enim facere
                                dolore rem explicabo harum error.</p>
                        </div>
                        <h2 class="fTitle">Zone Facilities</h2>
                        <div class="facilityContainer">
                            <ul class="fListL">
                                <li>30 High End Gaming PC's</li>
                                <li>5 Xbox one X's</li>
                                <li>5 PS4 Pro's</li>
                                <li>2 VR Stations</li>
                                <li>2 Snooker table's</li>
                                <li>Hardware 4 sale</li>
                            </ul>
                            <ul class="fListR">
                                <li>Sandwich Bar</li>
                                <li>Alcohol Bar</li>
                                <li>3 Vending Machines</li>
                                <li>Games 4 sale</li>
                                <li>Films 4 sale</li>
                                <li>Merch 4 sale</li>
                            </ul>
                        </div>
                    </div>
                    <div class="zoneRight zoneSide">
                        <div class="zoneMap" id="map3">
                            <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1w7GQdAhGrwRlD5Eas1ExYyiZPKCmsOvZ"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- zone 4 end -->


        <!-- zone 5 start -->
        <div class="zoneContainer">
            <div class="zoneCover" id="zone5">
                <button class="infoBtn" onclick="zoneInfo('zone5I')"></button>
                <div class="nameWrapper">
                    <h1 class="zoneName">Las Angeles Zone</h1>
                </div>
            </div>
            <div id="zone5I">
                <div class="zoneInfo">
                    <div class="zoneLeft zoneSide">
                        <h2>About this Zone</h2>
                        <div class="zoneAbout">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis explicabo velit laborum
                                voluptatibus, cumque assumenda, dolorum incidunt unde dolorem iusto ullam omnis.
                                Pariatur inventore vero nisi soluta ratione, dolorem exercitationem. Lorem ipsum dolor
                                sit amet consectetur adipisicing elit. Ab accusamus labore saepe rerum magni maiores,
                                dolor voluptates sapiente quidem placeat necessitatibus? Deserunt ducimus enim facere
                                dolore rem explicabo harum error.</p>
                        </div>
                        <h2 class="fTitle">Zone Facilities</h2>
                        <div class="facilityContainer">
                            <ul class="fListL">
                                <li>30 High End Gaming PC's</li>
                                <li>5 Xbox one X's</li>
                                <li>5 PS4 Pro's</li>
                                <li>2 VR Stations</li>
                                <li>2 Snooker table's</li>
                                <li>Hardware 4 sale</li>
                            </ul>
                            <ul class="fListR">
                                <li>Sandwich Bar</li>
                                <li>Alcohol Bar</li>
                                <li>3 Vending Machines</li>
                                <li>Games 4 sale</li>
                                <li>Films 4 sale</li>
                                <li>Merch 4 sale</li>
                            </ul>
                        </div>
                    </div>
                    <div class="zoneRight zoneSide">
                        <div class="zoneMap" id="map3">
                            <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1w7GQdAhGrwRlD5Eas1ExYyiZPKCmsOvZ"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- zone 5 end -->


        <!-- zone 6 start -->
        <div class="zoneContainer">
            <div class="zoneCover" id="zone6">
                <button class="infoBtn" onclick="zoneInfo('zone6I')"></button>
                <div class="nameWrapper">
                    <h1 class="zoneName">Las Vegas Zone</h1>
                </div>
            </div>
            <div id="zone6I">
                <div class="zoneInfo">
                    <div class="zoneLeft zoneSide">
                        <h2>About this Zone</h2>
                        <div class="zoneAbout">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis explicabo velit laborum
                                voluptatibus, cumque assumenda, dolorum incidunt unde dolorem iusto ullam omnis.
                                Pariatur inventore vero nisi soluta ratione, dolorem exercitationem. Lorem ipsum dolor
                                sit amet consectetur adipisicing elit. Ab accusamus labore saepe rerum magni maiores,
                                dolor voluptates sapiente quidem placeat necessitatibus? Deserunt ducimus enim facere
                                dolore rem explicabo harum error.</p>
                        </div>
                        <h2 class="fTitle">Zone Facilities</h2>
                        <div class="facilityContainer">
                            <ul class="fListL">
                                <li>30 High End Gaming PC's</li>
                                <li>5 Xbox one X's</li>
                                <li>5 PS4 Pro's</li>
                                <li>2 VR Stations</li>
                                <li>2 Snooker table's</li>
                                <li>Hardware 4 sale</li>
                            </ul>
                            <ul class="fListR">
                                <li>Sandwich Bar</li>
                                <li>Alcohol Bar</li>
                                <li>3 Vending Machines</li>
                                <li>Games 4 sale</li>
                                <li>Films 4 sale</li>
                                <li>Merch 4 sale</li>
                            </ul>
                        </div>
                    </div>
                    <div class="zoneRight zoneSide">
                        <div class="zoneMap" id="map3">
                            <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1w7GQdAhGrwRlD5Eas1ExYyiZPKCmsOvZ"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- zone 6 end -->

    </div>

    <!-- ------------------------------------------ zones.php ends here ------------------------------------- -->

    <!-- ------------------------------------- footer starts here ---------------------------------------- -->
    <?php include("../includes/footer.php"); ?>
    <!-- ------------------------------------- footer ends here ---------------------------------------- -->
</body>

</html>