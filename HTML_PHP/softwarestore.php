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




    <!-- ------------------------------------- footer starts here---------------------------------------- -->
    <?php include("../includes/footer.php"); ?>
    <!-- ------------------------------------- footer ends here ---------------------------------------- -->
</body>

</html>