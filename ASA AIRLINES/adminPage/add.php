<?php

	require('connect.php');
	
			$flightid = $_POST['flightid'];
			$date = $_POST['date'];
			$source = $_POST['source'];
			$destination = $_POST['destination'];
			$deptime = $_POST['deptime'];
			$arrtime = $_POST['arrtime'];
			$clas = $_POST['clas'];
			$capacity = $_POST['capacity'];
			$seatavail = $_POST['seatavail'];
			
			if(!empty($flightid) && !empty($date) && !empty($source) && !empty($destination) && !empty($deptime) && !empty($arrtime)
				 && !empty($clas) && !empty($capacity) && !empty($seatavail)){		
			
							
				//create query
				$query = "INSERT INTO flights(flightid,date,source,destination,deptime,arrtime,class,capacity,seatavail) 
						  VALUES('$flightid','$date','$source','$destination','$deptime','$arrtime','$clas','$capacity','$seatavail')";
				
				if(mysqli_query($conn, $query)){
					
					echo 'Flight has been added successfully.';
				}else{
					
					echo 'There is some problem at server...Please try again';
				}
			}else{
				echo 'Please fill up all the fields';
			}
	

?>
