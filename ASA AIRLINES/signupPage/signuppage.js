$(document).ready(function(){
	
	$('input').not('#signup_button').not('#home').focus(function(){
		$(this).css('backgroundColor', '#ffffcc')
		
	}).blur(function(){
		$(this).css('backgroundColor', 'white')
	});
	
	$('#name').focus(function(){
		var name = $(this).val();
		if(name == ''){
		$('#name_span').text('Please enter your full name...');}else{
			$('#name_span').text('');
		}
	}).blur(function(){
		$('#name_span').text('');
	});
	
	$('#email').focus(function(){
		var email = $(this).val();
		if(email == ''){
		$('#email_span').text('Please enter your email address...');}else{
			$('#email_span').text('');
		}
	}).blur(function(){
		$('#email_span').text('');
	});
	
	$('#home').click(function(){
		
		window.location = "../index.php";	
	});
	
	$('#contact').focus(function(){
		var contact = $(this).val();
		if(contact == ''){
		$('#contact_span').text('Please enter your Contact No...');}else{
			$('#contact_span').text('');
		}
	}).blur(function(){
		$('#contact_span').text('');
	});
	
	$('#contact').keyup(function(){
		
		 var contactlength = $(this).val().toString().length;
		 var contactval = $(this).val();
				 		
		if(contactlength < 10 || contactlength > 10 || isNaN(contactval)){
			$('#contact_span').text('Please enter a valid No.');
		}else{
			$('#contact_span').text('');
		}
		
		
	});
	
	$('#password').keyup(function(){
		
		var pass = $('#password').val().length;
				 
		 if(pass >= 8){
			 $('#pass_span').text('');
		 }else{
			 $('#pass_span').text('Password length must be 8');
		 }
				
	});
	
	
	
	
	$('#confirm_password').keyup(function(){
		
		 var pass = $('#password').val();
		 var pass2 = $('#confirm_password').val();
		
		if(pass == pass2){
			$('#password_span').text('');
		}else{
			$('#password_span').text('Passwords must be same...');
		}
		
		
	});
	
	$('#confirm_password').focus(function(){
		var pass = $(this).val();
		if(pass == ''){
		$('#password_span').text('Password must be same as above...');}else{
			$('#password_span').text('');
		}
		
	}).blur(function(){
		$('#password_span').text('');
	});
	
	
	
});