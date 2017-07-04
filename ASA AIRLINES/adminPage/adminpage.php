<! DOCTYPE html>
<html>
<head>
	<meta charset = "utf = 8"/>
	<title> ASA Airlines </title>
	<h1> ASA Airlines </h1>
	<link rel = "stylesheet" href = "admin_page.css"/>
</head>
<body>
	<div class = "container">
		<h2>Edit Flight Details</h2>
		<form>
		<div id = "left_col">
			<label>Flight ID</label><br>
			<input type = "text" id = "flightid"/><br>
			<div class = "third"><span id = "idspan"></span></div>
			<label>Date</label><br>
			<input type = 'date' id = "date"/><br>
			<label>Source</label><br>
			<input type = "text" id = "source"/><br>
			<label>Destination</label><br>
			<input type = "text" id = "destination"/><br>
			<label>Departure Time</label><br>
			<input type = "time" id = "deptime"/><br>
			<label>Arrival Time</label><br>
			<input type = "time" id = "arrtime"/><br>
			
		</div>
		<div id = "right_col">
			<label>Class</label><br>
			<input type = "text" id = "class"/><br>
			<label>Capacity</label><br>
			<input type = "number" id = "capacity"/><br>
			<label>Seats Avaliable</label><br>
			<input type = "number" id = "seatavail"/><br>
			<div class = "third"><span id = "msgSpan"></span></div>
			<input id = "addbut" type = "button" value = "Add"/><br>
			<input id = "deletebut" type = "button" value = "Delete"/><br>
			<input id = "updatebut" type = "button" value = "Update"/><br>
			<input id = "homebut" type = "button" value = "HOME"/><br>
		</div>
		<div id = "bottom">
			
		</div>
		
		</form><br><br><br><br>
		<p> NOTE : If you'll go to HOME then you'll be logged out automatically.</p>
	</div>
	<footer id = "footer">
		&copy;copywrite ASAairlines.com
	</footer>
	
	<script type = "text/javascript" src = "../js/jquery.js"></script> 
	<script type = "text/javascript" src = "adminpage.js"></script> 
	
	
</body>
</html>