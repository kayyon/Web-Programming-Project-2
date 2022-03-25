<!DOCTYPE html>

<?php
require_once("session_start.php");
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wordle with PHP!</title>
    <link type="text/css" rel="stylesheet" href="./static/style.css?version=51">
    <link type="text/css" rel="stylesheet" href="wordle.css?version=51">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
    <nav>
        <div class="wrapper">
            <a href="project2.php"></a>
            <ul class="nav-list">
                <li><a href="project2.php">Home</a></li>
                <li><a href="login.php">Log In</a></li>
                <li><a href="logout.php">Log Out</a></li>
            </ul>
        </div>
    </nav>

    <?php

    function check_for_login()
    {
        if (isset($_SESSION["username"])) {
            if (isset($_SESSION["username"])) {
                echo "Welcome! " . $_SESSION["username"] . ", you are logged in!";
            } else {
                echo "User, you are not logged in!";
            }
        } else {
            extract($_REQUEST);
            $file = fopen("session.txt", "a");
            fwrite($file, "username: ");
            fwrite($file, $username . "\n");
            fwrite($file, "Password: ");
            fwrite($file, $password . "\n");
            fclose($file);
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["guess_word"] = $_POST["guess_word"];

            echo "Welcome! " . $_SESSION["username"] . ", you are logged in!";
        }
    }
    ?>

    <h2>
        <?php check_for_login(); ?>
    </h2>

    <a href="./templates/easylevel.html">
        <div class="levelbox">Easy</div>
    </a>
    <a href="./templates/mediumlevel.html">
        <div class="levelbox">Medium</div>
    </a>
    <a href="./templates/hardlevel.html">
        <div class="levelbox">Hard</div>
    </a>
</body>

</html>