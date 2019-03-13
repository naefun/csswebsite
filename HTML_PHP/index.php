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

    <!-- ----------------------------------------- index.phpphp starts here ------------------------------ -->
    <div class="home_container">
        <!-- start of banner section -->
        <section class="image_banner" id="store_banner"></section>
        <section class="image_gradient"></section>
        <section class="banner_title">
            <h1>InTheZone</h1>
        </section>
        <!-- end of banner section -->

        <!-- start of features section -->
        <section class="feature_container">
            <section class="feature_layout">
                <!-- feature 1 -->
                <article id="feature1">
                    <!-- feature logo -->
                    <header>
                        <img src="../IMGS/lan.png">
                    </header>
                    <!-- feature content -->
                    <summary>
                        <p>
                            Each of our Zones boast top of the range gaming computers and gaming consoles ready for
                            online or local play, both casual and competitive gamers are welcome!
                        </p>
                        <h3 class="subtitle">Our range includes</h3>
                        <ul class="subList">
                            <li>PS4 PRO's</li>
                            <li>Xbox One X's</li>
                            <li>VR Hubs</li>
                            <li>GTX 1080Ti PC's</li>
                        </ul>
                    </summary>
                </article>
                <!-- feature 2 -->
                <article id="feature2">
                    <!-- feature logo -->
                    <header>
                        <a href="#"><img src="../IMGS/drink.png"></a>
                    </header>
                    <!-- feature content -->
                    <summary>
                        <p>
                            Each of our Zones feature multiple vending machines and a cafeteria where you can purchase
                            freshly made sandwiches and hot drinks.
                        </p>
                        <h3 class="subtitle">Popular choices include</h3>
                        <ul class="subList">
                            <li>Monster energy drinks</li>
                            <li>Bacon sandwich</li>
                            <li>BLT sandwich</li>
                            <li>Full English Breakfast</li>
                            <li>Cappuccino</li>
                        </ul>
                    </summary>
                </article>
                <!-- feature 3 -->
                <article id="feature3">
                    <!-- feature logo -->
                    <header>
                        <img src="../IMGS/cart.png">
                    </header>
                    <!-- feature content -->
                    <summary>
                        <p>
                            Each of our Zones also provide an in house one stop shop for all your gaming and
                            entertainment needs, fancy a new game or piece of hardware, then look no further!
                        </p>
                        <h3 class="subtitle">Items we stock include</h3>
                        <ul class="subList">
                            <li>Console Games</li>
                            <li>Graphics Cards</li>
                            <li>InTheZone Merch</li>
                            <li>
                                <h4>And more!!</h4>
                            </li>
                        </ul>
                    </summary>
                </article>
            </section>
        </section>
        <!-- end of features section -->

        <!-- start of business section -->
        <section class="business_section">
            <div class="business_bg">
                <div class="business_fade"></div>
                <div class="business_container">
                    <div id="title_area">
                        <h1 id="business_title">About <span id="ITZ">InTheZone</span></h1>
                    </div>
                    <article id="business_article">
                        <div id="article_bg">
                            <p>InTheZone is focused on providing the best hubs available for gamers and tech
                                enthusiasts
                                alike.<br><br>We strive to provide fun, relaxing tech spots where you and your friends
                                can
                                hang out and play computer games competetively... or casually.</p><br><br>
                            <p class="bookSpot">Book your spot <a class="hereLink" href="contact.php">HERE</a></p>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <!-- end of business section -->

        <!-- start of business section -->
        <section class="store_section">
            <div class="store_bg">
                <div class="store_fade"></div>
                <div class="store_container">
                    <div id="s_title_area">
                        <h1 id="store_title"><span id="ITZ">InTheZone</span> Store</h1>
                    </div>
                    <article id="store_article">
                        <div id="s_article_bg">
                            <p>InTheZone is focused on providing the best hubs available for gamers and tech
                                enthusiasts
                                alike.<br><br>We strive to provide fun, relaxing tech spots where you and your friends
                                can
                                hang out and play computer games competetively... or casually.</p><br><br>
                            <p class="bookSpot">Visit our online store <a class="hereLink" href="store.php">HERE</a></p>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <!-- end of business section -->

    </div>

    <!-- ----------------------------------------- index.phpphp ends here ------------------------------ -->

    <!-- ------------------------------------- footer starts here---------------------------------------- -->
    <?php include("../includes/footer.php"); ?>
    <!-- ------------------------------------- footer ends here ---------------------------------------- -->
</body>

</html>