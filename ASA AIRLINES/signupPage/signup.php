<?php

	require('connect.php');
		
		if(!empty($_POST['name']) && !empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['contact']) && !empty($_POST['email'])){		
		
			$name = $_POST['name'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			$contact = $_POST['contact'];
			$email = $_POST['email'];
		
		
			//create query
			$query = "INSERT INTO users(username, password, name, email, contact) VALUES ('$username', '$password', '$name', '$email', '$contact')";
			
			if(mysqli_query($conn, $query)){
				
				echo 'Your account has been created successfully.';
			}else{
				
				echo 'There is some problem at server...Please try again';
			}
		}
		
?>


<! DOCTYPE html>
<html>
<head>
	<meta charset = "utf = 8"/>
	<title> ASA Airlines </title>
	<h1> ASA Airlines </h1>
	<link rel = "stylesheet" href = "signuppage.css"/>
	
</head>
<body>
	<div class = "container">
	<div class = "side" >
	<img src = "signuppage.png" alt = "singnup"/><br>
	<input id = "home" type = "button" value = "BACK to HOME"/><br>
	</div>
	<div id = "signup_details">
	
		<h2>Sign Up</h2>
		<form action = "signup.php" method = "post">
		<label>Name</label><br>
		<input id = "name" type = "text" name = "name" required /><br><span id = "name_span"></span><br>
		<label>Username</label><br>
		<input id = "username" type = "text" name = "username" required /><br><div id = "username_span"></div><br>
		<label>Password</label><br>
		<input id = "password" type = "password" name = "password" required /><br><span id = "pass_span"></span><br>
		<label>Confirm Password</label><br>
		<input id = "confirm_password" type = "password" name = "confirm_password" required /><br><span id = "password_span"></span><br>
		<label>Contact No.</label><br>
		<input id = "contact" type = "text" name = "contact" required /><br><span id = "contact_span"></span><br>
		<label>Email Address</label><br>
		<input id = "email" type = "email" name = "email" required /><br><span id = "email_span"></span><br>
		<input id = "signup_button" type = "submit" value = "Sign Up"/><br>
		</form>
	</div>
	</div>
	<footer id = "footer">
		&copy;copywrite ASAairlines.com
	</footer>
	
	<script type = "text/javascript" src = "../js/jquery.js"></script> 
	<script type = "text/javascript" src = "signuppage.js"></script> 
	
	
</body>
</html>