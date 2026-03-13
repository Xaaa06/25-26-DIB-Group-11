<?php

session_start();
session_destroy();

// send back to the login page (now index.php)
header("Location: index.php");

?>