// // Mudando o header quando rola o scroll //

// $(window).scroll(function() {
// if ($(this).scrollTop() > 1){  
//     $('header').addClass("sticky");
//   }
//   else{
//     $('header').removeClass("sticky");
//   }
// });

// ///////////////////////////////////////////

$(document).ready(function(){
	
	// Site principal e newsllater
	var form = document.getElementById("form_contato");
	var send = $("#enviar");

	$(form).submit(function(event){
  		if (form.checkValidity()) {
    	send.attr('disabled', 'disabled');
    	$(send).css("cursor", "wait");
  		}
	});

	// Contato do Blog (contato.php)
	var form_blog = document.getElementById("form_blog");
	var send_blog = $("#enviar_blog");

	$(form_blog).submit(function(event){
  		if (form_blog.checkValidity()) {
    	send_blog.attr('disabled', 'disabled');
    	$(send_blog).css("cursor", "wait");
  		}
	});
});

// Formulário site principal e newsllater

// $('.formphp').on('submit', function() {
// 	var emailContato = "#"; //Escrever o email 

// 	var that = $(this),
// 		url = that.attr('action'),
// 		type = that.attr('method'),
// 		data = {};

// 	that.find('[name]').each(function(index, value) {
// 		var that = $(this),
// 			name = that.attr('name'),
// 			value = that.val();

// 		data[name] = value;
// 	});

// 	$.ajax({
// 		url: url,
// 		type: type,
// 		data: data,
// 		success: function(response) {

// 			if($('[name="leaveblank"]').val().length != 0) {
// 				$('.formphp').html("<div id='form-erro'></div>");
// 				$('#form-erro').html("<span>Falha no envio! Você pode tentar novamente, ou enviar direto para " + emailContato + " </span>")
// 				.hide()
// 				.fadeIn(1500, function() {
// 					$('#form-erro');
// 				});
// 			} else {
// 				$('.formphp').html("<div id='form-send'></div>");
// 				$('#form-send').html("<span>Mensagem enviada! Em breve entrarei em contato!</span>")
// 				.hide()
// 				.fadeIn(1500, function() {
// 					$('#form-send');
// 				});
// 			};
// 		},
// 		error: function(response) {
// 			$('.formphp').html("<div id='form-erro'></div>");
// 				$('#form-erro').html("<span>Falha no envio! Você pode tentar novamente, ou enviar direto para " + emailContato + " </span>")
// 				.hide()
// 				.fadeIn(1500, function() {
// 					$('#form-erro');
// 				});
// 		}
// 	});

// 	return false;
// });

// Formulário contato Blog (contato.php)

// $('.formphp_blog').on('submit', function() {
// 	var emailContato = "#"; //Escrever o email 

// 	var that = $(this),
// 		url = that.attr('action'),
// 		type = that.attr('method'),
// 		data = {};

// 	that.find('[name]').each(function(index, value) {
// 		var that = $(this),
// 			name = that.attr('name'),
// 			value = that.val();

// 		data[name] = value;
// 	});

// 	$.ajax({
// 		url: url,
// 		type: type,
// 		data: data,
// 		success: function(response) {

// 			if($('[name="leaveblank"]').val().length != 0) {
// 				$('.formphp_blog').html("<div id='form-erro_blog'></div>");
// 				$('#form-erro_blog').html("<span>Falha no envio! Você pode tentar novamente, ou enviar direto para " + emailContato + " </span>")
// 				.hide()
// 				.fadeIn(1500, function() {
// 					$('#form-erro_blog');
// 				});
// 			} else {
// 				$('.formphp_blog').html("<div id='form-send_blog'></div>");
// 				$('#form-send_blog').html("<span>Mensagem enviada! Em breve entrarei em contato!</span>")
// 				.hide()
// 				.fadeIn(1500, function() {
// 					$('#form-send_blog');
// 				});
// 			};
// 		},
// 		error: function(response) {
// 			$('.formphp_blog').html("<div id='form-erro_blog'></div>");
// 				$('#form-erro_blog').html("<span>Falha no envio! Você pode tentar novamente, ou enviar direto para " + emailContato + " </span>")
// 				.hide()
// 				.fadeIn(1500, function() {
// 					$('#form-erro_blog');
// 				});
// 		}
// 	});

// 	return false;
// });
