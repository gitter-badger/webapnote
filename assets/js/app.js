$(document).ready(function(){

	$.fn.reset = function() {
		$(this).each(function(){ this.reset(); });
	}
	
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
		$('#addUsuario').delay(500).animate({'opacity': '1', 'display': 'inherit'}, 500)
		$('#app-policy').animate({'opacity': '1', 'display': 'inherit'}, 500)
	});

	$('#app-signin').submit(function(e){
		e.preventDefault();
		$.post(
			'welcome/addLogin', 
			$(this).serialize(),
			function(data){
				if(data == 1){
					location.href='dashboard';
				}else {
					alert('BAD');
				}
			}
		);
	});

});