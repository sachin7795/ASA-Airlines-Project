<?php
session_start();
	require "connect.php";
	if(isset($_POST['flightid']) && isset($_POST['pname']) && isset($_POST['page']) && isset($_POST['pgender']) && isset($_POST['pfather'])){
		$flightid = $_POST['flightid'];
		$pname = $_POST['pname'];
		$page = $_POST['page'];
		$pgender = $_POST['pgender'];
		$pfather = $_POST['pfather'];
		if(!empty($flightid) && !empty($pname) && !empty($page) && !empty($pgender) && !empty($pfather)){
			
			$sql2 = "SELECT seatavail FROM flights WHERE flightid = '$flightid'";
			$result2 = mysqli_query($conn,$sql2);
			$roww = mysqli_fetch_array($result2,MYSQLI_NUM);
			if($roww[0] != 0){
			
			$sql = "INSERT INTO booked(name,father,age,gender,flightid) VALUES ('$pname','$pfather','$page','$pgender','$flightid')";
			
			if(mysqli_query($conn,$sql)){
				$sql1 = "UPDATE flights SET seatavail=seatavail-1 WHERE flightid = '$flightid'";
				if(mysqli_query($conn,$sql1)){
					
					$sql3 = "SELECT ticketno FROM booked WHERE flightid = '$flightid' AND father = '$pfather' AND name = '$pname' AND age = '$page'";
					$result = mysqli_query($conn,$sql3);
					$row = mysqli_fetch_array($result,MYSQLI_NUM);
					$_SESSION['ticketno'] = $row[0];
					
					
				echo "<script language = \"javascript\"> window.location = \"confirm.html\"</script>";
			}
			}else{
				echo "<div class=\"msg\">There is some problem connecting to server, Please try again later...</div>"; 
			}}else{
				echo "<div class=\"msg\">Seats not available</div>";
			}
						
		}else{
			echo "<div class=\"msg\">Please fillup all the details</div>";
		}
	}
?>



<!DOCTYPE html>
<html>
<head>
	<meta cahrset utf="8"/>
	<title>ASA Airlines</title>
	<h1>ASA Airlines</h1>
	<link rel="stylesheet" href="ticketbookingpage.css"/>
</head>
<body>
<div class="container">
<h2>Book Tickets</h2>
<div id = "idspan"><span></span></div>
		<form id="bookform" action="ticketbookingpage.php" method="post">
		<fieldset id = "fieldsetid" >
		<legend>Flight Details</legend>
		<div id = "flight_details">
			<label>Flight ID</label>
			<input type = "text" name = "flightid" id = "flightid" required />
			
			<label>Date</label>
			<input type = 'date' id = "date" name = "date" disabled = "disabled" />
			<label>Source</label>
			<input type = "text" id = "source"  name = "source" disabled = "disabled" />
			<label>Destination</label>
			<input type = "text" id = "destination" name = "destination"  disabled = "disabled" />
			<label>Departure Time</label>
			<input type = "time" id = "deptime"  name = "deptime" disabled = "disabled" />
			<label>Arrival Time</label>
			<input type = "time" id = "arrtime" name = "arrtime"  disabled = "disabled" />
			<label id="classlabel">Class</label>
			<input type = "text" id = "class"  name = "class" disabled = "disabled" />
			<label>Capacity</label>
			<input type = "number" id = "capacity"  name = "capacity" disabled = "disabled" />
			<label>Seats Avaliable</label>
			<input type = "number" id = "seatavail" name = "seatavail"  disabled = "disabled" />
		</div>
		</fieldset>
		<fieldset id = "fieldsetidp" >
		<legend>Passenger Details</legend>
		<div id="passenger_details">
			
			<label>Name:</label><input type="text" id="pname"  name="pname" required />
			<div  id="pfatherlabel">Father/Husband's Name:</div><input type="text"  id="pfather" name="pfather" required /><br><br><br>
			<label>Age:</label><input type="number"  id="page" name="page" required />
			<label>Gender:</label>
			<select id="pgender" name="pgender" required >
			
			<option value="male">Male</option>
			<option value="female">Female</option>
			</select>			
			
		</div>
		</fieldset>
			<input type="submit" value="BOOK" id="bookbut"/>
			<input type="button" value="CANCEL" id="cancelbut"/>
		<form>
</div>
<footer id = "footer">
		&copy;copywrite ASAairlines.com
</footer>
	
<script type=text/javascript src="../js/jquery.js"></script>
<script type=text/javascript src="ticketbookingpage.js"></script>

</body>
</html>