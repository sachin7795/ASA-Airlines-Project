<?php
	//create connection
	$conn = mysqli_connect('localhost','root','avachin7','asaairlines');
	
	//check connection
	
	if(mysqli_connect_errno()){
		
		//connection failed
		echo 'failed to connect to database'.mysqli_connect_errno();
		
	}
			session_start();
			
				$username = @mysqli_real_escape_string($conn,$_POST['username']);
				$password = @mysqli_real_escape_string($conn,$_POST['password']);
				
			
			if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
				
			}		
			
			if(isset($_POST['username']) && isset($_POST['password'])){	
				if(!empty($_POST['username']) && !empty($_POST['password'])){
				//create query
				$query = "SELECT username FROM admins WHERE username = '$username' and password = '$password'";
				$result = mysqli_query($conn, $query);
				
				$count = mysqli_num_rows($result);
				if($count == 1){
					$_SESSION['loggedin'] = true;
					
					echo "<script language = \"javascript\"> window.location = \"../adminPage/adminpage.php\"</script>";
				}else{
					
					echo "<div id=\"msg\">".'Please enter correct username and password'."</div>";
				}
			}else{
				echo "<div id=\"msg\">".'Please enter your username and password'."</div>";
			}
		}
		
?>

<! DOCTYPE html>
<html>
<head>
	<meta charset = "utf = 8"/>
	<title> ASA Airlines </title>
	<h1> ASA Airlines </h1>
	<link rel = "stylesheet" href = "adminlogin_page.css"/>
</head>
<body>
	<div class = "container">
		<img id = "adminlogin_image" src = "adminloginpage.png" alt = "adminlogin" />
		
		<div>
			<form id = "form" action = "" method = "post" >
				<h2>Admin LogIn</h2>
				<p class = "label" >Username</p>
				<input class = "text_fields" type = "text" name = "username"/>
				<p class = "label" >Password</p>
				<input class = "text_fields" type = "password" name = "password"/><br>
				<input id = "adminlogin_button" type = "submit" value = "Log In"/><br>
				<input id = "home" type = "button" value = "HOME"/><br>
			</form>
		</div>
		
		
	</div>
	<footer id = "footer">
		&copy;copywrite ASAairlines.com
	</footer>
	
	<script type = "text/javascript" src = "../js/jquery.js"></script> 
	<script type = "text/javascript" src = "adminlogin.js"></script> 
	
	
</body>
</html>