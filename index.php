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
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
    <nav>
        <div class="wrapper">
            <a href="project2.php"></a>
            <ul class="nav-list">
                <li><a href="project2.php">Home</a></li>
                <li><a href="login.php">Log In</a></li>
            </ul>
        </div>
    </nav>

    <?php
    extract($_REQUEST);
    $file = fopen("session.txt", "a");
    fwrite($file, "username: ");
    fwrite($file, $username . "\n");
    fwrite($file, "Password: ");
    fwrite($file, $password . "\n\n");
    fclose($file);

    $_SESSION["username"] = $_POST["username"];
    ?>

    <h2>Welcome
        <?php echo $_SESSION["username"];

        if (!isset($_SESSION["username"])) {
            echo "\n you are not logged in!";
        } else {
            echo "\n you are logged in!";
        }

        ?>
    </h2>
</body>

</html>