(function ($) {
	"use strict";

    $("form").submit(function(e){
        e.preventDefault(e);

        $.ajax({
            url: 'core/controller.php',
            data: {
                email: $('#inputEmail').val(),
                password: $('#inputPassword').val()
            },
            type: 'GET',
            dataType: 'json',
            success: function(response){
                if(response.success){
                    alert('Welcome!');
                    window.location.replace("index.php");
                }else{
                    alert('Incorrect login or password!');
                }
            },
            error: function(xhr, status) {
                alert('There is a problem');
            }
        });
    });
})(jQuery)