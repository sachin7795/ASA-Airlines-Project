$(document).ready(function(){
	$('#search_button').click(function(){
		window.location = '../searchflightPage/searchflight.php';
		
	});
	
	$('#book_button').click(function(){
		window.location = '../bookingPage/ticketbookingpage.php';
		
	});
	
	$('#print_button').click(function(){
		
		window.location = '../printticket/printticket.php';
		
	});
	
	$('#logout_button').click(function(){
		var check = confirm('Are you sure you want to log out?');
		if(check == true){
		window.location = '../index.php';
		}
	});
	
	
	
	
});