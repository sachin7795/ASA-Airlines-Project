$(document).ready(function(){
	
	$('#cancelbut').click(function(){
		window.location = "../loggedinPage/loggedin.php";
	});
	
	$('input').not('#bookbut').not('#cancelbut').focus(function(){
		
		$(this).css('background','#ffffcc');
	}).blur(function(){
		$(this).css('background','white');
	});
	
	$('#flightid').keyup(function(){
		var flightid = $('#flightid').val();
		
		if(flightid == ''){
			$('#idspan').text('Please enter a valid ID');
						$('#date').attr("value",'');
						$('#source').attr("value",'');
						$('#destination').attr("value",'');
						$('#deptime').attr("value",'');
						$('#arrtime').attr("value",'');
						$('#class').attr("value",'');
						$('#capacity').attr("value",'');
						$('#seatavail').attr("value",'');
						$('#idspan').text('Please enter a valid ID');
		
		}else{
			
			$.ajax({
				url : 'autodetails.php',
				type : 'POST',
				data : 'flightid=' +flightid,						 
				success : function(data){
						
						
						if(data == 'null'){
						
						$('#date').attr("value",'');
						$('#source').attr("value",'');
						$('#destination').attr("value",'');
						$('#deptime').attr("value",'');
						$('#arrtime').attr("value",'');
						$('#class').attr("value",'');
						$('#capacity').attr("value",'');
						$('#seatavail').attr("value",'');
						$('#idspan').text('Please enter a valid ID');
						
						}else{
						
						var fdetails = $.parseJSON(data);	
						$('#date').attr("value",fdetails.date);
						$('#source').attr("value",fdetails.source);
						$('#destination').attr("value",fdetails.destination);
						$('#deptime').attr("value",fdetails.deptime);
						$('#arrtime').attr("value",fdetails.arrtime);
						$('#class').attr("value",fdetails.class);
						$('#capacity').attr("value",fdetails.capacity);
						$('#seatavail').attr("value",fdetails.seatavail);
						$('#idspan').text('');
												
						}	
						
		}});
		}
	});
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
});