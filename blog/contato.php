<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Vamos mudar o mundo/Blog - Contato</title>
	<link rel="shortcut icon" href="../img/favicon.ico">
	<meta charset="UTF-8">
	<meta name="description" content="Apaixonada por tecnologia e inovação, ministra palestras empreendedoras e motivacionais em todo o estado de Alagoas - Blog">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php
		$og_url = "https://maxsuelfernandob.000webhostapp.com/portfolio/vamos-mudar-o-mundo/blog/contato";
		$og_type = "website";
		$og_title = "Vamos mudar o mundo/Blog - Contato";
		$og_description = "Escritora, empreendedora e criadora do projeto 'Vamos mudar o mundo', tem como missão propagar a Educação Empreendedora através de palestras e produção de conteúdo.";
		$og_image = "https://maxsuelfernandob.000webhostapp.com/portfolio/vamos-mudar-o-mundo/img/sections/proposta-mobile.png";
		$og_image_type = "image/png"; 

		require_once 'require/meta_og.php';
	?>

	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- <link rel="stylesheet" type="text/css" href="../css/normalize.css">
	<link rel="stylesheet" type="text/css" href="../css/reset.css">
	<link rel="stylesheet" type="text/css" href="../css/grid.css">
	<link rel="stylesheet" type="text/css" href="css/style-raw.css">
	<link rel="stylesheet" type="text/css" href="css/responsivo.css"> -->

	<link rel="stylesheet" type="text/css" href="css/style.css?id=<?php echo time();?>">
	<link rel="stylesheet" type="text/css" href="css/sobre.css?id=<?php echo time();?>"> <!-- Mesma imagem de intro -->

	<?php 
    	require_once 'require/load_analytics.html';
    ?>
</head>
<body>
	<?php 
		$ativo = "contato";
		require_once 'require/nav-menu.php';
	?>
    
   	<section class="intro-artigo">
		
	</section>
	<?php 
		$section_newslatter_action = '../';
		require_once 'require/section_newslatter.php';
	?>

	<section class="content">
		<div class="container">
			<div class="grid-12 content-conteudo contato">	
				<h1 class="titulo"> <!-- Mesmo tamanho --> Contato</h1>
				<div class="conteudo">
					<p>Se interessou no projeto, quer tirar alguma dúvida ou tem alguma crítica ou sugestão? Então entre em contato que em breve falaremos com você!</p>

					<form id="form_blog" action="" method="post" name="form" class="formphp_blog form" onsubmit="enviar.disabled=true;">
						
							<label for="nome">Nome:</label>
							<input type="text" id="nome" name="nome" required>
							<label for="email">E-mail:</label>
							<input type="email" id="email" name="email" required>
							<label for="assunto">Assunto:</label>
							<input type="text" id="assunto" name="assunto">
						
							<label class="nao-aparece">Se você não é um robô, deixe em branco.</label>
							<input type="text" class="nao-aparece" name="leaveblank" value="">
							<label class="nao-aparece">Se você não é um robô, não mude este campo.</label>
							<input type="text" class="nao-aparece" name="dontchange" value="http://">
						
							<label for="mensagem">Mensagem:</label>
							<textarea name="mensagem" id="mensagem" required></textarea>
						
						<div class="button-form">
							<button id="enviar_blog" name="enviar" type="submit">Enviar</button>
						</div>
					</form>
				</div>
			</div>
			<div class="grid-4 content-lateral">
				<?php 
					require_once 'require/perfil-ipsum.html';

					
					$artigos_populares_href = 'artigos/';
					require_once 'require/artigos-populares.php';
				?>
			</div>	
		</div>
	</section>
	
	<?php 
		$section_redes_sociais_src = '';
		require_once 'require/section_redes-sociais.php';
		
		require_once 'require/footer.html';
	?>

    <script src="../js/jquery-1.9.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
    
</body>
</html>