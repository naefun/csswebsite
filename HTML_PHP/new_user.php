<?php
require_once("../includes/connection.php");
require_once("../includes/functions.php");
// start form processing
if (isset($_POST['submit'])){
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $hashed_password = sha1($password);

    $query = "INSERT INTO users (username, hashed_password) VALUES ('{$username}', '{$hashed_password}')";
    $result = mysqli_query($connection, $query);
    if($result){
        $message = "The user was successfully created.";
    }
    else{
        $message = "The user could not be created.";
        $message .="<br/>" . mysqli_error();
    }
}
else{
    $username = "";
    $password = "";
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

<body class="loginBody">

<div class="loginWrapper">
    <h1>Create an account</h1>
    <?php
    if (!empty($message)){
        echo"<p class=\"message\">" . $message . "</p>";
    }
    ?>

    <form class="loginForm" action="new_user.php" method="post">
        <label for="username">Username:</label><br>
        <input type="text" name="username" maxlength="30" value="<?php echo htmlentities($username); ?>">

        <br>

        <label for="password">Password:</label><br>
        <input type="password" name="password" maxlength="30" value="<?php echo htmlentities($password); ?>">

        <br>

        <input type="submit" name="submit" value="Create user">

        <br>

        <a class="newUser" href="login.php">Back to Login</a>
    </form>
</div>

</body>

</html>