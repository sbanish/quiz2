<!doctype html>
	<head>
		<title>Welcome</title>
		<meta name "viewport" content="width=device-width, initial-scale=1">
		<meta charset="uft-8">
		<link rel="stylesheet" href="../css/register.css">
	</head>
	
	<body>
		<h1>Join my mailing list to learn more about the Pittsburgh Steelers!</h1>
			<div class="contact">
				<form action = "register.php" class="contact" name="form" method="post">
					<label for="fname">First Name</label><br>
						<input class="text" name="fname" id="fname" type="text"/>
							<br><br>
							
					<label for="fname">Last Name</label><br>
						<input class="text" name="lname" id="lname" type="text"/>
							<br><br>
								
					<label for="email">Email</label><br>
						<input class="text" name="email" id="email" type="text"/>
							<br><br>
								
					<input class="submit" name="submit" type="submit" value="Submit"/>
				</form>
			</div>
			
	<?php
		if(isset($_COOKIE['fname']) && isset($_COOKIE['email']))
		{
			echo "<p>Hello, " . $_COOKIE['fname'] . ", you recently signed up with the email address: " . $_COOKIE['email'] . "</p>";
		}
	?>
	</body>
</html>