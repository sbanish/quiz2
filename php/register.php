<?php
	setcookie('fname', $_POST['fname']);
	setcookie('lname', $_POST['lname']);
	setcookie('email', $_POST['email']);
 
	header('Location: welcome.php');
 ?>
