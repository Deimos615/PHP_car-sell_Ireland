$('document').ready(function() { 
	/* handling form validation */
	$("#login-form").validate({
		rules: {
			user_pass: {
				required: true,
			},
			user_email: {
				required: true,
				email: true
			},
		},
		messages: {
			user_pass:{
			  required: "Please enter your password"
			 },
			user_email: "Please enter your email address",
		},
		submitHandler: submitForm	
	});	   
	/* Handling login functionality */
	function submitForm() {		
		var data = $("#login-form").serialize();				
		$.ajax({				
			type : 'POST',
			url  : '../controller/login.php',
			data : data,
			beforeSend: function(){	
				$("#error").fadeOut();
				$("#login_button").html('Sending ...');
			},
			success : function(response){	
				if(response=="waiting"){
					$("#error").fadeIn(1000, function(){
						$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Your account is in review yet. Please wait for a while!</div>');
						$("#login_button").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In');
					});
				}	
				else if(response=="inactive"){
					$("#error").fadeIn(1000, function(){
						$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Your account was deactivate. Please contact admins!</div>');
						$("#login_button").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In');
					});
				}				
				else if(response=="ok"){			
					$("#login_button").html('Signing In ...');
					setTimeout(' window.location.href = "dashboard.php"; ',3000);
				}
				else {									
					$("#error").fadeIn(1000, function(){
						$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+'!</div>');
						$("#login_button").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In');
					});
				}
			}
		});
		return false;
	}   
});