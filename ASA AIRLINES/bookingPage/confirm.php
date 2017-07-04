<?php
	require('connect.php');
	session_start();
	$ticketno = $_SESSION['ticketno'];
	

	$query = "SELECT booked.ticketno,booked.name,booked.age,booked.gender,booked.time,flights.flightid,flights.source,flights.destination,flights.deptime,flights.arrtime,flights.class,flights.date 
			 FROM booked LEFT JOIN flights 
			 ON booked.flightid = flights.flightid 
			 WHERE ticketno = '$ticketno'";
			 
			 $result = mysqli_query($conn,$query);
			 $data = JSON_encode(mysqli_fetch_assoc($result));
			echo ("$data");
?>

