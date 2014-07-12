$(document).ready(function(){

	$.fn.reset = function() {
		$(this).each(function(){ this.reset(); });
	};
	
	$('#addUsuario').submit(function(e){
		e.preventDefault();
		$.post(
			"welcome/registrarUsuario", 
			$(this).serialize(),
			function(data){
				if(data == 1){
					//alert(data);
					$('#addUsuario').animate({'opacity': '0','display': 'none'}, 500);
					$('#app-policy').animate({'opacity': '0', 'display' : 'none'}, 500);
					$('#app-success-msg').delay(300).animate({'opacity': '1', 'display': 'inherit', 'z-index': '9999'}, 500).delay(2000);
					$('#register-modal').delay(5000).foundation('reveal', 'close');
					$('#addUsuario').reset();
					$('#app-success-msg').delay(5000).animate({'opacity': '0', 'display': 'none', 'z-index': '0'}, 500);
					$('#addUsuario').delay(5000).animate({'opacity': '1', 'display': 'inherit'}, 500);
					$('#app-policy').delay(5000).animate({'opacity': '1', 'display': 'inherit'}, 500);
				}else{
					$('.app-error-data').html(data);
					$('#addUsuario').animate({'opacity': '0','display': 'none'}, 500);
					$('#app-policy').animate({'opacity': '0', 'display' : 'none'}, 500);
					$('#app-error-msg').delay(300).animate({'opacity': '1', 'display': 'inherit', 'z-index': '9999'}, 500);
				}
			}
		);
	});

	$('.close-error-msg').click(function(){
		$('#app-error-msg').animate({'opacity': '0', 'display': 'none'}, 500).css('z-index', '0');
		$('#addUsuario').delay(500).animate({'opacity': '1', 'display': 'inherit'}, 500);
		$('#app-policy').animate({'opacity': '1', 'display': 'inherit'}, 500);
	});

	// Login ;
	$('#app-signin').submit(function(e){
		e.preventDefault();
		$.post(
			'welcome/addLogin', 
			$(this).serialize(),
			function(data){
				if(data == 1){
					location.href='dashboard';
				}else {
					$('.bad').slideDown(500).delay(1500).slideUp(500);
				}
			}
		);
	});

	$('html').click(function(){
		$('.app-icon-widget').removeClass('app-icon-widget-base');
	});	

	// Form de Organizaciones ;
	$('#add-form-org').submit(function(e){
		e.preventDefault();
		var errors;
		$.ajax({
			type: 'POST',
			url: 'organizaciones/addO',
			data: $(this).serialize(),
			dataType: 'json',
			success: function(data) {
				errors = 0;
				console.log(data);
				for(var i=0;i<data.length;i++){
					if(data[i].error === ""){
						$('#'+data[i].campo+' .span-error').html('').removeClass('show').addClass('hide');
					}else{
						$('#'+data[i].campo+' .span-error').html(data[i].error).removeClass('hide').addClass('show');
						errors = errors + 1;
					}
				}

				console.log(errors);

				if(errors === 0){
					$('#app-add-org').foundation('reveal', 'close');
					$('#add-form-org').reset();
					alert('Registro Correcto');
					location.href = 'organizaciones';
				}
			}
		});
	});

	$('.close-error-msg-org').click(function(){
		$('#app-error-msg-org').animate({'opacity': '0', 'display': 'none'}, 500).css('z-index', '0');
		$('#add-form-org').delay(500).animate({'opacity': '1', 'display': 'inherit'}, 500);
		$('.error-title').animate({'opacity': '1', 'display': 'inherit'}, 500);
	});

	$('#reg-user-t').click(function(){
		//$('#add-user-te').fadeIn(500);
		$('#add-user-te').slideToggle('slow');
	});

	$('#cancel-team').click(function(){
		//$('#add-user-te').fadeOut(500);
		$('#add-user-te').slideToggle('slow');

	});

	$('#org-options').change(function(){
		var blue = "";
		var url = "";
		$('#org-options option:selected').each(function(){
			blue += $(this).val()+"";
			if(blue === 0){
				console.log(blue);
			}else{
				url = 'proyectos/selected/'+blue;
				location.href=url;
			}
		});
	});

	$('#btn-open-pro').click(function(){
		$('#panel-form-id').slideToggle('slow');
	});

	//Validaciones de Campos;
	$('#phone-edit').validations('0123456789');
	$('#phone-input').validations('0123456789');

});