$('document').ready(function() {   
    /* handle form validation */  
    $("#register-form").validate({
        rules:
     {
        user_name: {
            required: true,
            minlength: 3
            },
        user_dealer: {
            required: true,
            minlength: 3
        },
        user_link: {
            required: true,
            url: true
        },
        user_vat: {
            required: true
        },
        user_garage: {
            required: true
        },
        user_bank: {
            required: true
        },
        user_pass: {
            required: true,
            minlength: 8,
            maxlength: 15
            },
        user_repass: {
            required: true,
            equalTo: '#login-pass'
            },
        user_email: {
            required: true,
            email: true
            },
      },
         messages:
      {
            user_name: "Please enter user name",
            user_dealer: "Please enter dealership name",
            user_link: "Please enter a valid url address",
            user_vat: "Please enter Vat registered",
            user_garage: "Please enter garage code",
            user_bank: "Please enter bank used",
            user_pass:{
                    required: "Please provide a password",
                    minlength: "Password at least have 8 characters"
                    },
            user_email: "Please enter a valid email address",
            user_repass:{
                    required: "Please retype your password",
                    equalTo: "Password doesn't match !"
                    }
         },
      submitHandler: submitForm 
         });  
      /* handle form submit */
      function submitForm() {  
      var data = $("#register-form").serialize();    
      $.ajax({    
            type : 'POST',
            url  : '../controller/register.php',
            data : data,
            beforeSend: function() { 
            $("#error").fadeOut();
            $("#btn-submit").html('Sending ...');
            },
            success :  function(response) {      
                if(response==1){         
                    $("#error").fadeIn(1000, function(){
                        $("#error").html('<div class="alert alert-danger">Sorry. The email already taken !</div>');           
                        $("#btn-submit").html('Create Account');          
                    });                    
                } 
                else if(response=="registered"){         
                    $("#btn-submit").html('Signing Up ...');
                    setTimeout('$(".form-signin").fadeOut(500, function(){ $(".register_container").load("wel-register.php"); }); ',3000);         
                } 
                else {          
                    $("#error").fadeIn(1000, function(){           
                        $("#error").html('<div class="alert alert-danger">'+data+' !</div>');           
                        $("#btn-submit").html('Create Account');         
                    });           
                }
                }
            });
            return false;
            }
        });