$(document).ready(function(){
	
			$.ajax('confirm.php',{
				success : function(data){
						
						
						var fdetails = $.parseJSON(data);
						$('#ticketno').text(fdetails.ticketno);
						$('#flightid').text(fdetails.flightid);
						$('#time').text(fdetails.time);
						$('#date').text(fdetails.date);
						$('#source').text(fdetails.source);
						$('#destination').text(fdetails.destination);
						$('#deptime').text(fdetails.deptime);
						$('#arrtime').text(fdetails.arrtime);
						$('#class').text(fdetails.class);
						$('#name').text(fdetails.name);
						$('#age').text(fdetails.age);
						$('#gender').text(fdetails.gender);
												
							
						
		}});
		
		$('#printbut').click(function(){
			window.print();
		});
		
		$('#morebookbut').click(function(){
			window.location = "ticketbookingpage.php";
		});
		
		$('#homebut').click(function(){
			window.location = "../loggedinPage/loggedin.php";
		});
		
		});
	