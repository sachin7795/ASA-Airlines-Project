$(document).ready(function(){
	
	$('#addbut').click(function(){
		var flightid = $('#flightid').val();
		var date = $('#date').val();
		var  source = $('#source').val();
		var  destination = $('#destination').val();
		var deptime = $('#deptime').val();
		var arrtime = $('#arrtime').val();
		var clas = $('#class').val();
		var  capacity = $('#capacity').val();
		var seatavail = $('#seatavail').val();
		
		if(flightid == '' || date == '' || source == '' || destination == '' || deptime == '' || arrtime == '' || clas == '' || capacity == '' || seatavail == ''){
			$('#msgSpan').text("Please enter all fields");
		}else{
			
			$.ajax({
				url : 'add.php',
				type : 'POST',
				data : {flightid : flightid,
						date : date,
						source : source,
						destination : destination,
						deptime : deptime,
						arrtime : arrtime,
						clas : clas,
						capacity : capacity,
						seatavail : seatavail}, 
				success : function(data){
						$('#msgSpan').html(data);
		}});
		}
	});
	
	$('#updatebut').click(function(){
		var flightid = $('#flightid').val();
		var date = $('#date').val();
		var  source = $('#source').val();
		var  destination = $('#destination').val();
		var deptime = $('#deptime').val();
		var arrtime = $('#arrtime').val();
		var clas = $('#class').val();
		var  capacity = $('#capacity').val();
		var seatavail = $('#seatavail').val();
		
		if(flightid == '' || date == '' || source == '' || destination == '' || deptime == '' || arrtime == '' || clas == '' || capacity == '' || seatavail == ''){
			$('#msgSpan').text("Please enter all fields");
		}else{
			
			$.ajax({
				url : 'update.php',
				type : 'POST',
				data : {flightid : flightid,
						date : date,
						source : source,
						destination : destination,
						deptime : deptime,
						arrtime : arrtime,
						clas : clas,
						capacity : capacity,
						seatavail : seatavail}, 
				success : function(data){
						$('#msgSpan').html(data);
		}});
		}
	});
	
	$('#deletebut').click(function(){
		var flightid = $('#flightid').val();
		var date = $('#date').val();
		var  source = $('#source').val();
		var  destination = $('#destination').val();
		var deptime = $('#deptime').val();
		var arrtime = $('#arrtime').val();
		var clas = $('#class').val();
		var  capacity = $('#capacity').val();
		var seatavail = $('#seatavail').val();
		
		if(flightid == '' || date == '' || source == '' || destination == '' || deptime == '' || arrtime == '' || clas == '' || capacity == '' || seatavail == ''){
			$('#msgSpan').text("Please enter all fields");
		}else{
			
			$.ajax({
				url : 'delete.php',
				type : 'POST',
				data : {flightid : flightid,
						date : date,
						source : source,
						destination : destination,
						deptime : deptime,
						arrtime : arrtime,
						clas : clas,
						capacity : capacity,
						seatavail : seatavail}, 
				success : function(data){
						$('#msgSpan').html(data);
		}});
		}
	});
	
	$('#homebut').click(function(){
		window.location = "../index.php";
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