<?php
	//create connection
	$conn = mysqli_connect('localhost','root','avachin7','asaairlines');
	
	//check connection
	
	if(mysqli_connect_errno()){
		
		//connection failed
		echo 'failed to connect to database'.mysqli_connect_errno();
		
	}



?>