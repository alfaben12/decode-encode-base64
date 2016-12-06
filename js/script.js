$( document ).ready(function(){

	$('#p_enc').click(function(){
		var dataPlain = $('#val_enc').val();
		$.ajax({
			url : 'base64.php?enc',
			method : 'POST',
			data : {enc : dataPlain},
			cache : false,
			beforeSend : function(){
				$('#p_enc').html('Loading ...');
			},
			success : function(e){
				$('#p_enc').html('Encripsi &nbsp; >>');				
				$('#result_code').html(e);
			}

		});
	});

	$('#p_dec').click(function(){
		var dataPlain = $('#val_enc').val();
		$.ajax({
			url : 'base64.php?dec',
			method : 'POST',
			data : {dec : dataPlain},
			cache : false,
			beforeSend : function(){
				$('#p_dec').html('Loading ...');
			},
			success : function(e){
				$('#p_dec').html('Decripsi >> ');				
				$('#result_code').html(e);
			}

		});
	});
	$('#p_cls').click(function(){
		$('#val_enc').empty();
		$('#result_code').empty();
	});
});