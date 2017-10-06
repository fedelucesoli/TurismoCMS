$(document).ready(function() {

	var nav = $('.navbar');

	$(window).scroll(function () {
		if ($(this).scrollTop() > 250) {
			nav.addClass("nav-small");
			$('.logo-menu').css('border-radius', '0');
		} else {
			nav.removeClass("nav-small");
			$('.logo-menu').css('border-radius', '0 0 5px 5px');
		}
	});

	$('.form-contacto').submit(function(event){
		 $('.form-group').removeClass('has-error'); // remove the error class
    	 $('.help-block').rede423762emove(); // remove the error text
		 var formData = {
            'nombre'            : $('input[name=nombre]').val(),
            'email'             : $('input[name=email]').val(),
            'consulta'    		: $('#consulta').val()
        };

        // process the form
        $.ajax({
            type        : 'POST',
            url         : 'send-contacto.php',
            data        : formData,
            dataType    : 'json',
            encode      : true
        })

        .done(function(data) {

            if (! data.success) {
            	if (data.errors.nombre) {
	                $('#nombre-grupo').addClass('has-error');
	                $('#nombre-grupo').append('<div class="help-block">' + data.errors.nombre + '</div>');
	            }

	            if (data.errors.email) {
	                $('#email-grupo').addClass('has-error');
	                $('#email-grupo').append('<div class="help-block">' + data.errors.email + '</div>');
	            }

	            if (data.errors.consulta) {
	                $('#consulta-grupo').addClass('has-error');
	                $('#consulta-grupo').append('<div class="help-block">' + data.errors.consulta + '</div>');
	            }
	            if(data.errors.mensaje){
            	 	$('form').prepend('<div class="alert alert-success">' + data.mensaje + '</div>');
	            }

            }else{
            	 $('form').prepend('<div class="alert alert-success">' + data.message + '</div>');
	        }
		})

        .fail(function(data){
        	$('form').prepend('<div class="alert alert-danger text-center">' +'<h4>Ocurrio un error en el servidor.</h4> Intentelo de nuevo en un momento.' + '</div>');
        })

        event.preventDefault();
    });






});
