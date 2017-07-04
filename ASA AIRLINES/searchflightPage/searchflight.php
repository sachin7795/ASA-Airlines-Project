<?php

	$conn = mysqli_connect('localhost','root','avachin7','asaairlines');
		if($conn){
			
			
			if(isset($_POST['source']) && isset($_POST['destination']) && isset($_POST['date'])){
				
				$source = $_POST['source'];
				$destination = $_POST['destination'];
				$date = $_POST['date'];
				
				if(!empty($source) && !empty($destination) && !empty($date)){
					
					$query = "SELECT * FROM flights WHERE source= '$source' AND destination = '$destination' AND date = '$date'";
					$result = $conn->query($query);
					
					if($result->num_rows > 0){
						echo "<table align=\"center\" id=\"table\" border=\"1\" bgcolor=\"#ffffe0\" cellpadding=\"10px\" width=\"800px\" >"; 
						echo "<thead  bgcolor=\"#d2691e\">";  
						echo "<td>".'Flight ID'."</td>";
						echo "<td>".'Date'."</td>";
						echo "<td>".'Source'."</td>";
						echo "<td>".'Destination'."</td>";
						echo "<td>".'Departure Time'."</td>";
						echo "<td>".'Arrival Time'."</td>";
						echo "<td>".'Class'."</td>";
						echo "<td>".'Capacity'."</td>";
						echo "<td>".'Seat Avaliable'."</td>";
						echo "</thead>";
						while($row = $result->fetch_assoc()){
							echo "<tr>";
							echo "<td>".$row["flightid"]."</td>";
							echo "<td>".$row["date"]."</td>";
							echo "<td>".$row["source"]."</td>";
							echo "<td>".$row["destination"]."</td>";
							echo "<td>".$row["deptime"]."</td>";
							echo "<td>".$row["arrtime"]."</td>";
							echo "<td>".$row["class"]."</td>";
							echo "<td>".$row["capacity"]."</td>";
							echo "<td>".$row["seatavail"]."</td>";
							echo "</tr>";
							
							//echo $row["flightid"]. " " .$row["date"]. " " .$row["source"]. " " .$row["destination"]. " " .$row["deptime"]. " " .$row["arrtime"].
								// " " .$row["class"]. " " .$row["capacity"]. " " .$row["seatavail"]."<br>";
							}
							echo "</table>";
							}else{
						echo "<div class=\"divmsg\">".'No Flights found...'."</div>";
					}
					mysqli_free_result($result);
					
				}else{
					
					echo "<div class=\"divmsg\">".'Please fill up all the fields...'."</div>";
				}
				
				
			}
			
			
		}else{
			echo "<div class=\"divmsg\">".'There is some problem connecting to the server...Please try again...'."</div>";
		}


?>

<! DOCTYPE html>
<html>
<head>
	<meta charset = "utf = 8"/>
	<title> ASA Airlines </title>
	<h1> ASA Airlines </h1>
	<link rel = "stylesheet" href = "searchflight.css"/>
</head>
<body>
	<div class = "container">
	<input id = "backbut" type = "button" value = "BACK"/>
	<input id = "bookbut" type = "button" value = "BOOK TICKETS"/>
	<h2>Search Flights</h2>
		<div id = "search">
		<form action = "searchflight.php" method = "post" >
		<label>Source : </label><input type = "text" name = "source"/>
		<label>Destination : </label><input type = "text" name = "destination"/>
		<label>Date : </label><input type = "date" name = "date"/>
		<input id = "searchbut" type = "submit" value = "Search"/>
		</form>
		</div><br><br>
		<p>NOTE : Note the FlightID, You will need it while Ticket Booking.</p>
		<p>Make sure capslock is off.</p>
	</div>
	<footer id = "footer">
		&copy;copywrite ASAairlines.com
	</footer>
	
	<script type = "text/javascript" src = "../js/jquery.js"></script> 
	<script type = "text/javascript" src = "searchflight.js"></script> 
	
	
</body>
</html>