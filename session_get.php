<?php
//start the session and get the data
session_start();
echo "Welcome ".$_SESSION['username'];
echo "<br> Your favourite category is ".$_SESSION['favcat'];
echo "<br";
?>