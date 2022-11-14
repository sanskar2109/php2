<?php
//what is a session?
//Used to manage information across difference pages

//Verify the user login info
session_start();
$_SESSION['username']="sanskar";
$_SESSION['favcat']="Books";
echo "we have saved your session";
?>