$(function() {
    var base_url = window.location.origin;
    $('#login-form-link').click(function(e) {
        "use strict"
        e.preventDefault();
    	$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');		
	});
    
	$('#register-form-link').click(function(e) {
        "use strict"
        e.preventDefault();
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');		
	});
    
    $('#login-submit').click(function(e) { 
        "use strict"
        e.preventDefault();
        var form = $("#login-form");
        var formData = new FormData(document.querySelector("#login-form"));
        if($("#username").val() == "" || $("#password").val() == ""){
             $.notify("Please provide values to all fields");
        } else {
            $.ajax({
                url: base_url+"/login/authenticate",
                type: "POST",
                data: formData,
                dataType: "json",
                mimeType: "multipart/form-data",
                contentType: false,
                cache: false, 
                processData: false,
                success: function(data){
                    if(data.message == "OK"){
                        $.notify.defaults({ className: "success" });   
                        $.notify("Login successful, Redirecting...");
                        $("#username").val("");
                        $("#password").val("");
                        e.target.setAttribute("disabled", true);
                        setTimeout(function() {
                            window.location =  base_url+"/user/home";
                        }, 3000);                       
                    } else {
                        $.notify("Wrong Username or Password");
                    }
                }
            })
        }        
    });
    
    var username_error, email_error;
    $("#register-user").keyup(function(){
        username_error = false;
        var data = {
            username: $("#register-user").val()
        };
        $.ajax({
            url:  base_url+"/login/check",
            type: "POST",
            data: data,
            cache: false,
            success: function(data){
                if(data.message == "Username Exists"){
                    $("#register-user").notify(
                      "Username already exist", 
                      { position:"right" }
                    );
                    username_error = true;
                } else {
                    username_error = false;
                }
            }
        })
    });
    
    $("#register-email").keyup(function(){
        email_error = false;
        var data = {
            email: $("#register-email").val()
        };
        $.ajax({
            url:  base_url+"/login/check",
            type: "POST",
            data: data,
            cache: false,
            success: function(data){
                if(data.message == "Email Exists"){
                    $("#register-email").notify(
                      "Email has been used", 
                      { position:"right" }
                    );
                    email_error = true;
                } else {
                    email_error = false
                }
            }
        })
    });
    
    $('#register-submit').click(function(e) { 
        "use strict"
        e.preventDefault();
        var form = $("#register-form");
        console.log(username_error);
        var formData = new FormData(document.querySelector("#register-form"));
        var error = false;
        var type_error = [];
        if($("#register-user").val() == "" || $("#register-pass").val() == "" || $("#register-email").val() == "" || $("#confirm-pass").val() == ""){
             $.notify("Please provide values to all fields");
        } else {
            if($("#register-pass").val() != $("#confirm-pass").val()) {
                $("#confirm-pass").notify(
                  "Password doesn't match", 
                  { position:"right" }
                );
                error = true;
            }
            if($("#register-email").val().indexOf("@") < 0) {
                $("#register-email").notify(
                  'Email must contain an "@" ', 
                  { position:"right" }
                );
                error = true;
            }
            if(username_error){
                $("#register-user").notify(
                    "Username already exist", 
                    { position:"right" }
                );
                type_error.push(username_error);
            }
            
            if(email_error){
                $("#register-email").notify(
                    "Email has been used", 
                    { position:"right" }
                );
                type_error.push(email_error);
            } 
            if(error == false && type_error.length < 1){
                $.ajax({
                    url:  base_url+"/login/register",
                    type: "POST",
                    data: formData,
                    dataType: "json",
                    mimeType: "multipart/form-data",
                    contentType: false,
                    cache: false, 
                    processData: false,
                    success: function(data){
                        if(data.message == "OK"){
                            form.find("input[type=text]").val("");
                            form.find("input[type=email]").val("");
                            form.find("input[type=password]").val("");
                            e.target.setAttribute("disabled", true);
                            $.notify.defaults({ className: "success" });   
                            $.notify("Registration successful, Redirecting...");
                            setTimeout(function() {
                                window.location =  base_url+"/user/home";
                            }, 3000);                       
                        } else {
                            $.notify("Wrong Username or Password");
                        }
                    }
                })
            }
        }        
    });
});