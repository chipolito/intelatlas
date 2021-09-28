(function ($) {
	"use strict";

    $("form").submit(function(e){
        e.preventDefault(e);

        $.ajax({
            url: 'core/controller.php',
            data: {
                name: $('#inputName').val(),
                email: $('#inputEmail').val(),
                password: $('#inputPassword').val()
            },
            type: 'POST',
            dataType: 'json',
            success: function(response){
                if(response.success){
                    alert('Request successful');
                    window.location.replace("login.html");
                }else{
                    alert('An error in your request!');
                }                
            },
            error: function(xhr, status) {
                alert('There is a problem');
            }
        });
    });
})(jQuery)