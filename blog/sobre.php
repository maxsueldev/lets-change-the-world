<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Vamos mudar o mundo/Blog - Sobre</title>
	<link rel="shortcut icon" href="../img/favicon.ico">
	<meta charset="UTF-8">
	<meta name="description" content="Apaixonada por tecnologia e inovação, ministra palestras empreendedoras e motivacionais em todo o estado de Alagoas - Blog">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php
		$og_url = "https://maxsuelfernandob.000webhostapp.com/portfolio/vamos-mudar-o-mundo/blog/sobre";
		$og_type = "website";
		$og_title = "Vamos mudar o mundo/Blog - Sobre";
		$og_description = "Escritora, empreendedora e criadora do projeto 'Vamos mudar o mundo', tem como missão propagar a Educação Empreendedora através de palestras e produção de conteúdo.";
		$og_image = "https://maxsuelfernandob.000webhostapp.com/portfolio/vamos-mudar-o-mundo/blog/img/sections/sobre-mobile.png";
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
	<link rel="stylesheet" type="text/css" href="css/sobre.css?id=<?php echo time();?>">

	<?php 
    	require_once 'require/load_analytics.html';
    ?>
</head>
<body>
	<?php 
		$ativo = "sobre";
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
			<div class="grid-12 content-conteudo sobre">	
				<h1 class="titulo">Mudar o mundo é mais que frase de efeito!</h1>
				<div class="conteudo">
					<p>O projeto "Vamos mudar o mundo" surgiu no ano de 2017 com o objetivo principal de propagar a Educação Empreendedora como ferramenta de incentivo para o jovem iniciar-se na vida adulta entendendo qual seu papel na sociedade.</p>
					<p>Idealizado por uma empreendedora apaixonada por criatividade, o projeto é a compilação de quatro anos de muito sonho, estudo e aprendizado vivido no ecossistema de empreendedorismo alagoano.</p>
					<p>Para a construção do projeto e alcance do objetivo principal anteriormente citado, nossa metodologia conta com produção de conteúdo através deste blog e palestras com abordagens divertidas e práticas que auxiliam os jovens a sentirem-se mais interados neste meio.</p>
					<p>Gostou? Então continue devorando nosso conteúdo e não deixe de conhecer todo o projeto em nosso site: <a href="https://maxsuelfernandob.000webhostapp.com/portfolio/vamos-mudar-o-mundo" target="_blank">Vamos mudar o mundo! </a></p>
					<p>Muito obrigada!</p>
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