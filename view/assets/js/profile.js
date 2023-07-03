$('document').ready(function() {  
    /* handle form validation */  
    $("#profile_form").validate({
        rules:
     {
        uname: {
            required: true,
            minlength: 3
            },
        dealership: {
            required: true,
            minlength: 3
        },
        link: {
            required: true,
            url: true
        },
        vat: {
            required: true
        },
        garage: {
            required: true
        },
        bank: {
            required: true
        },
        n_password: {
            minlength: 8,
            maxlength: 15
            },
        re_password: {
            equalTo: '#n_password'
            },
        uemail: {
            required: true,
            email: true
            },
      },
         messages:
      {
            uname: "Please enter user name",
            dealership: "Please enter dealership name",
            link: "Please enter a valid url address",
            vat: "Please enter Vat registered",
            garage: "Please enter garage code",
            bank: "Please enter bank used",
            n_password:{
                    minlength: "Password at least have 8 characters"
                    },
            uemail: "Please enter a valid email address",
            re_password:{
                    equalTo: "Password doesn't match !"
                    }
         },
      submitHandler: submitForm 
         });  
      /* handle form submit */
      function submitForm() {  
      var data = $("#profile-form").serialize();    
      $.ajax({    
            type : 'POST',
            url  : '../controller/profile.php',
            data : data,
            success :  function(response) {      
                    if(response=="wrong-pass"){         
                        $("#error").fadeIn(1000, function(){
                            $("#error").html('<div class="alert alert-danger">You entered your current password incorrectly</div>');           
                        });                    
                    } else if(response=="updated-PWD"){         
                        setTimeout('$(".form-signin").fadeOut(500, function(){ $(".register_container").load("wel-register.php"); }); ',3000);         
                    } else if(response=="updated-noPWD"){         
                        setTimeout('$(".form-signin").fadeOut(500, function(){ $(".register_container").load("wel-register.php"); }); ',3000);         
                    } else if(response=="noCPWD"){         
                        $("#error").fadeIn(1000, function(){
                            $("#error").html('<div class="alert alert-danger">Please input your current password!</div>');           
                        });                    
                    } else if(response=="noNPWD"){         
                        $("#error").fadeIn(1000, function(){
                            $("#error").html('<div class="alert alert-danger">Please input your new password to change!</div>');           
                        });                    
                    }
                }
            });
            return false;
            }
        });