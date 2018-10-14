<?php
session_start();
include 'navbar.php';
echo '<center>You have been logged out</center>';
session_destroy();
echo '<center><a href="index.html">Click Here to go Home</a></center>';
?>