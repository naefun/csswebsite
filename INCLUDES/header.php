<header class="documentStart">
        <!-- website navigation -->
        <nav id="web_nav">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="zones.php">Our Zones</a></li>
                <li id="oStore"><a href="store.php">Online Store</a>
                    <div id="storeDrop">
                        <a href="gamesstore.php">Games</a>
                        <a href="hardwarestore.php">Hardware</a>
                        <a href="softwarestore.php">Software</a>
                        <a href="merchstore.php">Merchandise</a>
                    </div>
                </li>
                <li><a href="events.php">Events</a></li>
                <li><a href="findus.php">Find Us</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li id="times_btn"><a href="#"><img src="../IMGS/clock.png"></a>
                    <div id="times_drop">
                        <!-- placeholder id's for opening times script-->
                        <section class="opening_times">
                            <p id="day">Day</p>
                            <p id="times">Times</p>
                            <!-- script allows for opening times -->
                            <script>
                                openTimes();
                            </script>
                        </section>
                    </div>
                </li>
                <li><a href="logout.php">Logout user: <?php echo $_SESSION['user_name']; ?></a></li>
            </ul>
        </nav>
    </header>