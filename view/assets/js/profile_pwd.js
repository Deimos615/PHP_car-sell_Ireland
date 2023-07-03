$('document').ready(function() {  
    /* handle form validation */  
    $("#pwd_form").validate({
        rules:
     {
        c_password: {
            required: true
            },
        n_password: {
            required: true,
            minlength: 8,
            maxlength: 15
            },
        re_password: {
            required: true,
            equalTo: '#n_password'
            }
      },
         messages:
      {
            n_password:{
                    required: "Please enter new password",
                    minlength: "Password at least have 8 characters"
                    },
            c_password: "Please enter current password",
            re_password:{
                    required: "Please enter confirm password",
                    equalTo: "Password doesn't match !"
                    }
         },
      submitHandler: submitForm 
         });  
      /* handle form submit */
      function submitForm() {  
      var data = $("#pwd_form").serialize();    
      $.ajax({    
            type : 'POST',
            url  : '../controller/profile_pwd.php',
            data : data,
            success :  function(response) {      
                    if(response=="updated"){         
                        $("#p_success").fadeIn(1000, function(){
                            $("#p_success").html('<div class="alert alert-success">Your password was successfully updated!</div>');           
                        });
                    }
                    else if(response=="wrong-pass") {         
                        $("#p_error").fadeIn(1000, function(){
                            $("#p_error").html('<div class="alert alert-danger">You inputed current password incorrectly.</div>');           
                        });                    
                    }
                    else {         
                        $("#p_error").fadeIn(1000, function(){
                            $("#p_error").html('<div class="alert alert-danger">Failure!</div>');           
                        });                    
                    }
                }
            });
            return false;
            }
        });