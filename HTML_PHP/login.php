    <?php
    session_start();
    require_once("../includes/functions.php");
    require_once("../includes/connection.php");
    require_once("../includes/functions.php");
    // start form processing
    if (isset($_POST['submit'])){
        $errors = array();
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        $hashed_password = sha1($password);

        $query = "SELECT id, username ";
        $query .= "FROM users ";
        $query .= "WHERE username = '{$username}' ";
        $query .= "AND hashed_password = '{$hashed_password}' ";
        $query .= "LIMIT 1";
        $result_set = mysqli_query($connection, $query);
        confirm_query($result_set);
        if(mysqli_num_rows($result_set)==1){
            $found_user = mysqli_fetch_array($result_set);
            $_SESSION['user_id']=$found_user['id'];
            $_SESSION['user_name']=$found_user['username'];
            header("location: index.php");
            exit;
        }
        else{
            $message = "Username/ password combination incorrect.<br>Please enter the correct username and password";
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
    <title>Login | InTheZone</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../CSS/style.css">
    <script type="text/javascript" src="../JS/basiccalendar.js"></script>
</head>

<body>

<div class="loginBackground"></div>
<div class="backgroundFilter"></div>
<div class="loginTitle">
        <h1>InTheZone</h1>
</div>

    <div class="loginWrapper">
        <h1>Login to your account</h1>
        <?php
        if(!empty($message)){
            echo "<p class=\"message\">" . $message . "</p>";
        }
        ?>

        <form class="loginForm" action="login.php" method="post">

            <label for="username">Username:</label><br>
            <input type="text" name="username" maxlength="30" value="<?php echo htmlentities($username); ?>">

            <br>

            <label for="password">Password:</label><br>
            <input type="password" name="password" maxlength="30" value="<?php echo htmlentities($password); ?>">

            <br>

            <input type="submit" name="submit" value="Login">

            <br>

            <a class="newUser" href="new_user.php">Create an account</a>
        </form>
    </div>

</body>

</html>