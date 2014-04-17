$(document).ready(function(){
	
	$('#addUsuario').submit(function(e){
		var nom = $('#nom').val();
		var use = $('#use').val();
		var ema = $('#ema').val();
		var pas = $('#pas').val();
		$.ajax({
			url : 'http://localhost/webapnote/welcome/registrarUsuario',
			dataType: 'json',
			type: 'POST',
			crossDomain: true,
			data: {nombre: nom, username: use, email: ema, passwr: pas}, 
			complete: function(xhr, statusText){ 
        console.log(xhr.responseText);
      },
      success:  function(result){
      	alert(result);
      }, 
      error: function(req, status, err){
      	alert(req+" "+status+" "+err);
      }
		});
		return false;
 	});

});