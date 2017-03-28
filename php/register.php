<?php

include 'welcome.php';

if (isset($_GET['fname'])) {
	$get_fname=$_GET['fname'];
	setcookie($cookie_fname,  $get_fname, time() + 200);
}

if (isset($_GET['lname'])) {
	$get_lname=$_GET['lname'];
	setcookie($cookie_lname,  $get_lname, time() + 200);
}

if (isset($_GET['email'])) {
	$get_email=$_GET['email'];
	setcookie($cookie_email,  $get_email, time() + 200);
}

?>
