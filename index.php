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
    extract($_REQUEST);
    $file = fopen("session.txt", "a");
    fwrite($file, "username: ");
    fwrite($file, $username . "\n");
    fwrite($file, "Password: ");
    fwrite($file, $password . "\n");
    fclose($file);

    $_SESSION["username"] = $_POST["username"];
    $_SESSION["guess_word"] = $_POST["guess_word"]
    ?>

    <h2>Welcome
        <?php

        if (!isset($_POST["username"])) {
            echo "User, ";
        } else {
            echo $_SESSION["username"];
        }

        if (!isset($_SESSION["username"])) {
            echo "\n you are not logged in!";
        } else {
            echo "\n you are logged in!";
        }

        ?>
    </h2>

    <?php
    $five_words = file("five_words.txt") or die("Unable to open file!");
    $select_word = $five_words[array_rand($five_words)];
    $_SESSION["selected_word"] = $select_word;
    print_r(str_split($select_word));

    function guess_word($guess_word)
    {
        if (isset($_POST["guess_word"])) {
            $file = fopen("session.txt", "a");
            fwrite($file, "guessed word: ");
            fwrite($file, $guess_word . "\n");
            echo $guess_word;
        } else {
            echo "No words have been guessed";
        }
    }

    guess_word($_SESSION["guess_word"]);
    ?>

    <div class="box">
        <h2>Input a word!</h2>
        <form action="index.php" method="POST">
            <div class="input-box">
                <input type="text" name="guess_word" autocomplete="off" required>
                <label for="">Word</label>
            </div>
            <input type="submit" value="Submit">
        </form>
    </div>

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