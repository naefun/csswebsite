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

    <!-- ------------------------------------- store.php starts here---------------------------------------- -->

    <div class="storeWrapper">

        <!-- game store start -->
        <div class="storeBlock">
            <!-- change id for bg -->
            <div class="titleBlock" id="gameBlock">
                <div class="titleShade">
                    <h1 class="titleHeader">Games</h1>
                </div>
            </div>
            <div class="blurbBlock">
                <p>This is our games catgeory section. Here you can find the games that are most popular at the
                    moment.</p>
            </div>
            <div class="productBlock">
                <div class="product">
                    <img src="../IMGS/codbo4.jpg" alt="CoD BO 4">
                    <a href="contact.php">Call of Duty Black Ops 4</a>
                </div>

                <div class="product">
                    <img src="../IMGS/fo76.jpg" alt="CoD BO 4">
                    <a href="contact.php">Fallout 76</a>
                </div>
                <div class="product">
                    <img src="../IMGS/spiderman.jpg" alt="CoD BO 4">
                    <a href="contact.php">Spiderman</a>
                </div>
                <div class="product">
                    <img src="../IMGS/rdr2.jpg" alt="CoD BO 4">
                    <a href="contact.php">Red Dead Redmption 2</a>
                </div>
                <div class="product">
                    <img src="../IMGS/fifa19.jpg" alt="CoD BO 4">
                    <a href="contact.php">Fifa 19</a>
                </div>
            </div>
        </div>
        <!-- game store end -->


        <!-- music store start -->
        <div class="storeBlock">
            <!-- change id for bg -->
            <div class="titleBlock" id="musicBlock">
                <div class="titleShade">
                    <h1 class="titleHeader">Music</h1>
                </div>
            </div>
            <div class="blurbBlock">
                <p>This is our music catgeory section. Here you can find the music that is most popular at the
                    moment.</p>
            </div>
            <div class="productBlock">
                <div class="product">
                    <img src="../IMGS/grodt.jpg" alt="CoD BO 4">
                    <a href="contact.php">Get Rich or Die Trying</a>
                </div>

                <div class="product">
                    <img src="../IMGS/sempiternal.jpg" alt="CoD BO 4">
                    <a href="contact.php">Sempiternal</a>
                </div>
                <div class="product">
                    <img src="../IMGS/xxxtentacion.jpg" alt="CoD BO 4">
                    <a href="contact.php">?</a>
                </div>
                <div class="product">
                    <img src="../IMGS/mmlp2.jpg" alt="CoD BO 4">
                    <a href="contact.php">MMLP 2</a>
                </div>
                <div class="product">
                    <img src="../IMGS/tpab.jpg" alt="CoD BO 4">
                    <a href="contact.php">To Pimp A Butterfly</a>
                </div>
            </div>
        </div>
        <!-- music store end -->


        <!-- films store start -->
        <div class="storeBlock">
            <!-- change id for bg -->
            <div class="titleBlock" id="filmsBlock">
                <div class="titleShade">
                    <h1 class="titleHeader">Films</h1>
                </div>
            </div>
            <div class="blurbBlock">
                <p>This is our film catgeory section. Here you can find the films that are most popular at the
                    moment.</p>
            </div>
            <div class="productBlock">
                <div class="product">
                    <img src="../IMGS/mmfr.jpg" alt="CoD BO 4">
                    <a href="contact.php">Mad Max: Fury Road</a>
                </div>

                <div class="product">
                    <img src="../IMGS/ts3.jpg" alt="CoD BO 4">
                    <a href="contact.php">Toy Story: 3</a>
                </div>
                <div class="product">
                    <img src="../IMGS/tsn.jpg" alt="CoD BO 4">
                    <a href="contact.php">The Social Network</a>
                </div>
                <div class="product">
                    <img src="../IMGS/wows.jpg" alt="CoD BO 4">
                    <a href="contact.php">The Wolf Of Wall Street</a>
                </div>
                <div class="product">
                    <img src="../IMGS/inception.jpg" alt="CoD BO 4">
                    <a href="contact.php">Inception</a>
                </div>
            </div>
        </div>
        <!-- films store end -->

    </div>






    <!-- ------------------------------------- store.php ends here---------------------------------------- -->

    <!-- ------------------------------------- footer starts here---------------------------------------- -->
    <?php include("../includes/footer.php"); ?>
    <!-- ------------------------------------- footer ends here ---------------------------------------- -->
</body>

</html>