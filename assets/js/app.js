$(document).ready(function(){
	
	$('#addUsuario').submit(function(e){
		e.preventDefault();
		$.post(
			"welcome/registrarUsuario", 
			$(this).serialize(),
			function(data){
				if(data == 1){
					alert("Insertados");
				}else {
					alert(data);
				}
			}
		);
	});

});