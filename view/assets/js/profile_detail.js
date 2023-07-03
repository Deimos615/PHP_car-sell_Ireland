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
            uemail: "Please enter a valid email address",
         },
      submitHandler: submitForm 
         });  
      /* handle form submit */
      function submitForm() {  
      var data = $("#profile_form").serialize();    
      $.ajax({    
            type : 'POST',
            url  : '../controller/profile_detail.php',
            data : data,
            success :  function(response) {      
                    // if(response=="updated"){         
                    //     setTimeout('$(".profile-form").fadeOut(500, function(){ $("#success").load("wel-profile.php"); }); ',1000);         
                    // } 
                    if(response=="updated"){         
                        $("#success").fadeIn(1000, function(){
                            $("#success").html('<div class="alert alert-success">Your profile was successfully updated!</div>');           
                        });
                    }
                    else {         
                        $("#error").fadeIn(1000, function(){
                            $("#error").html('<div class="alert alert-danger">Failure!</div>');           
                        });                    
                    }
                }
            });
            return false;
            }
        });