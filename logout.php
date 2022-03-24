<?php
include_once("session_start.php");
session_destroy();
file_put_contents("session.txt", "");
header("location: login.php");
echo "You have logged out!";
