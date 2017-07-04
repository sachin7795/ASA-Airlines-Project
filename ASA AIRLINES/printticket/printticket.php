<?php
	require('../connect.php');
	session_start();
	if(isset($_POST['ticketno'])){
		$ticketno = $_POST['ticketno'];
		
		if(!empty($ticketno)){
			
			$sql = "SELECT flightid FROM booked WHERE ticketno = $ticketno";
			$result = @mysqli_query($conn,$sql);
			$row = mysqli_num_rows($result);
			if($row !=0){
			$_SESSION['ticketno'] = $ticketno;
			
			echo "<script language=\"javascript\">window.location=\"../bookingPage/confirm.html\"</script>";
			}else{
				echo "<div class=\"msg\">Please enter valid Ticket Number</div>";
			}
	}else{
		echo "<div class=\"msg\">Please enter Ticket Number</div>";
	}
	}
?>



<!DOCTYPE html>
<html>
<head>
	<meta cahrset utf="8"/>
	<title>ASA Airlines</title>
	<h1>ASA Airlines</h1>
	<link rel="stylesheet" href="printticket.css"/>
</head>
<body>
<div class="container">
	<h2>Print your Ticket</h2>
	<div id="searchdiv">
	<form action="printticket.php" method="post" >
	<label>Ticket Number : </label><br>
	<input type="number" id="ticketno" name="ticketno" required /><br>
	<input type="submit" id="okbut" value="OK" />
	<input type="button" id="cancelbut" value="Cancel" />
	</form>
	</div>
</div>
<footer id = "footer">
		&copy;copywrite ASAairlines.com
</footer>
	
<script type=text/javascript src="../js/jquery.js"></script>
<script type=text/javascript src="printicket.js"></script>

</body>
</html>