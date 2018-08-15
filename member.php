<?php

session_start();

if($_SESSION['email'])
{
	echo "Welcome!<br><a href='logout.php'>Logout</a><br> ";
include("h.php");
}
else
die ("You must be logged in!");

?>