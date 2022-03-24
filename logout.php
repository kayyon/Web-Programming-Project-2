<?php
include_once("session_start.php");
session_destroy();
header("location: login.php");
echo "You have logged out!";
