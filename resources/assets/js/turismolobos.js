$(document).ready(function() {

	var data = null;

	var xhr = new XMLHttpRequest();
	xhr.withCredentials = true;

	xhr.addEventListener("readystatechange", function () {
	  if (this.readyState === 4) {
	    console.log(this.responseText);
	  }
	});

	xhr.open("get", "http://localhost:8000/api/agenda");
	xhr.setRequestHeader("cache-control", "no-cache");
	xhr.setRequestHeader("Access-Control-Allow-Origin", "http://localhost:3000");
	// xhr.setRequestHeader("postman-token", "c94d4e5a-b672-b2a0-1eb6-6ad951294500");

	xhr.send(data);




	var nav = $('.navbar');

	$(window).scroll(function () {
		if ($(this).scrollTop() > 250) {
			nav.addClass("nav-small");
		} else {
			nav.removeClass("nav-small");
		}
	});

	$('.form-contacto').submit(function(event){
		 $('.form-group').removeClass('has-error'); // remove the error class
    	 $('.help-block').remove(); // remove the error text
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
