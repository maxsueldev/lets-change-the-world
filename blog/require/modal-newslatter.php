<div class="modal fade" id="modal_newslatter" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<h2 class="modal-title" id="ModalLabel">Assine nossa Newslatter e receba todas as novidades do Blog por email!</h2>
				<form id="form_blog" action="" method="post" name="form" class="formphp_blog form" onsubmit="enviar.disabled=true;">
								
					<!-- <label for="email_modal">E-mail:</label> -->
					<input type="email" id="email" name="email" placeholder="Email:" required>
					<input type="hidden" name="nome" value="Contato newslatter">
					<input type="hidden" name="assunto" value="Newslatter">
					<input type="hidden" name="mensagem" value="Contato para newslatter">

					<label class="nao-aparece">Se você não é um robô, deixe em branco.</label>
					<input type="text" class="nao-aparece" name="leaveblank" value="">
					<label class="nao-aparece">Se você não é um robô, não mude este campo.</label>
					<input type="text" class="nao-aparece" name="dontchange" value="http://">

					<div class="button-form">
						<button id="enviar_blog" name="enviar" type="submit">Enviar</button>
					</div>
				</form>
							
			</div>
					      
		</div>
	</div>
</div>