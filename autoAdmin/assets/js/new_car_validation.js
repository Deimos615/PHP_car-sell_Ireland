$('document').ready(function() {   
    /* handle form validation */  
    $("#register-form").validate({
        rules:
     {
        carname: {
            required: true,
            minlength: 3
        },
        esti_price: {
            required: true
        },
        buy_price: {
            required: true
        },
        timer: {
            required: true,
            dateISO: true
        },
        premium: {
            required: true
        },
        offers: {
            required: true
        },
        watching: {
            required: true
        },
        grade: {
            required: true
        },
        years: {
            required: true
        },
        color: {
            required: true
        },
        doors: {
            required: true
        },
        fuel: {
            required: true
        },
        transmission: {
            required: true
        },
        engine: {
            required: true
        },
        mileage: {
            required: true
        },
        mechanical_pdf: {
            required: true
        },
        condition_pdf: {
            required: true
        },
        main_img: {
            required: true
        },
        sub_img1: {
            required: true
        },
        sub_img2: {
            required: true
        },
        sub_img3: {
            required: true
        },
        sub_img4: {
            required: true
        },
        sub_img5: {
            required: true
        }
      },
         messages:
      {
            carname: {
                required: "Please enter car name",
                minlength: "Please minlength:3"
            },
            esti_price: "Please enter estimation price",
            buy_price: "Please enter buy now price",
            timer: {
                required: "Please enter countdown timer",
                dateISO: "Please type such as '2022-07-30'"    
            },
            premium: "Please enter premium",
            offers: "Please enter offers",
            watching: "Please enter watching",
            grade: "Please select the grade",
            years: "Please enter Year",
            color: "Please enter color",
            doors: "Please enter doors",
            fuel: "Please enter fuel",
            transmission: "Please enter transmission",
            engine: "Please enter engine",
            mileage: "Please enter mileage",
            mechanical_pdf: "Please choose a mechanical report",
            condition_pdf: "Please choose a condition report",
            main_img: "Please choose main image",
            sub_img1: "Please choose sub-image",
            sub_img2: "Please choose sub-image",
            sub_img3: "Please choose sub-image",
            sub_img4: "Please choose sub-image",
            sub_img5: "Please choose sub-image",
            sub_img6: "Please choose sub-image",
            sub_img7: "Please choose sub-image",
            sub_img8: "Please choose sub-image",
            sub_img9: "Please choose sub-image",
            sub_img10: "Please choose sub-image"
         },
      submitHandler: submitForm 
         });  

      /* handle form submit */
    function submitForm() {  
    var data = $("#register-form").serialize();
    //   $('#register-form').submit();    
    
      $.ajax({    
            type : 'POST',
            url  : '../controller/new_car_upload.php',
            data : data,
            beforeSend: function() { 
            $("#error").fadeOut();
            $("#register").html('Sending ...');
            },
            success :  function(response) {      
                    if(response=="failure"){         
                        $("#error").fadeIn(1000, function(){
                            $("#error").html('<div class="alert alert-danger">Error occurred!</div>');           
                            $("#register").html('Submit');          
                        });                    
                    } else {         
                        $("#success").html('<div class="alert alert-danger">Successs!</div>');           
                        $("#register").html('Submit');
                    } 
                }
            });
            return false;
    }
});