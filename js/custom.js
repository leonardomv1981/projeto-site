$(document).ready(function(){

	// $('#exampleModal').modal();
 
	$("#btn-login").click(function(){
		
		$("#btn-login").html('validando...');
		var data = $("#login-form").serialize();
			
		$.ajax({
			type : 'POST',
			url  : 'action.php',
			data : data,
			dataType: 'json',
			success :  function(response){	
				if (response.codigo) {	
					window.location.href = "home.php";
				} else {								
					$("#btn-login").html('Entrar');
					$("#login-alert").css('display', 'block')
					$("#mensagem").html('<strong>Erro! </strong>' + response.mensagem);
				}
		    }
		});
	});

	$("#btn-insert").click(function(){
		
		$("#btn-insert").html('Aguarde...');
		var data = $("#insert-form").serialize();
		$.ajax({
			type : 'POST',
			url  : 'actionsql.php',
			data : data,
			dataType: 'json',
			success :  function(response){	
				if (response.codigo == 0) {	
					$("#btn-insert").html('Entrar');
					$("#form-alert").css('display', 'block')
					$("#mensagem").html('<div class="alert alert-danger" role="alert"><strong>Erro! </strong>' + response.mensagem + '</div>');
				} else {							
					$("#btn-insert").html('Entrar');
					$("#form-alert").css('display', 'block')
					$("#mensagem").html('<div class="alert alert-success" role="alert">' + response.mensagem + '</div>');
				}
		    }
		});
	});

	$(document).on('click', "#btn-edit", function(){
		$("#btn-edit").html('Aguarde...');
		var data = $("#edit-form").serialize();
		$.ajax({
			type : 'POST',
			url  : 'actionsql.php',
			data : data,
			dataType: 'json',
			success :  function(response){
				$("#btn-insert").html('Entrar');
				$("#form-alert").css('display', 'block')
				$("#dados-usuarios").html('<div class="alert alert-success" role="alert">' + response.mensagem + '</div>');
		    }
		});
	});

	$(document).on('click', ".btn-editar", function(){
		$("btn-editar").html('...');
		var objeto = $(this).data();
		$.ajax({
			type : 'POST',
			url  : 'action-editarsql.php',
			data: {id: objeto.param.id},
			dataType: '',
			success :  function(response){
				$("#dados-usuarios").html(response);
				$("#btn-editar").html('carregar mais');
		    }
		});
	});

	$("#feed-button").click(function(){
		
		$("#feed-button").html('aguarde...');
		var qtdeCaixas = $(".caixa").length - 3;
		console.log(qtdeCaixas);
		$.ajax({
			type : 'POST',
			url  : 'action-posts.php',
			data: {qtde: qtdeCaixas},
			dataType: '',
			success :  function(response){
				if(response){
					$("#posts").append(response);
					$("#feed-button").html('carregar mais');
				} else {	
					$("#feed-button").css('display', 'none')								
				}
		    }
		});
	});

	$(document).on('click', ".modal-button", function(){
		let objeto = $(this).data();
		$("#modal-button").html('aguarde...');
		$.ajax({
			type : 'POST',
			url  : 'action-modal.php',
			data: {param: objeto.param},
			dataType: '',
			success :  function(response){
					$("#modal-contentlg").html(response);
					$('#largeModal').modal();
					$("#modal-button").html('Ler mais...');	
		    }
		});

	});
});
