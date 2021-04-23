<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Vamos mudar o mundo - Blog</title>
	<link rel="shortcut icon" href="../img/favicon.ico">
	<meta charset="UTF-8">
	<meta name="description" content="Apaixonada por tecnologia e inovação, ministra palestras empreendedoras e motivacionais em todo o estado de Alagoas - Blog">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="fb:app_id" content="264497177355344" />	

	<?php
		$og_url = "https://maxsuelfernandob.000webhostapp.com/portfolio/vamos-mudar-o-mundo/blog";
		$og_type = "website";
		$og_title = "Vamos mudar o mundo - Blog";
		$og_description = "Escritora, empreendedora e criadora do projeto 'Vamos mudar o mundo', tem como missão propagar a Educação Empreendedora através de palestras e produção de conteúdo.";
		$og_image = "https://maxsuelfernandob.000webhostapp.com/portfolio/vamos-mudar-o-mundo/img/sections/blog-mobile.png";
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

	<?php 
    	require_once 'require/load_analytics.html';
    ?>
</head>
<body>

	<?php
		$ativo = "inicio";
		require_once 'require/nav-menu.php';
	?>
    
   	<section class="intro">
		<div class="frase-intro container">
			<h1 class="titulo-intro">Vamos mudar o mundo!</h1>
		</div>
	</section>
	
	<?php 
		$section_newslatter_action = '../';
		require_once 'require/section_newslatter.php';
	?>

	<section class="content">
		<div class="container">
			<div class="grid-12 content-conteudo">

				<div class="artigo">
					<a href="artigos/ferramentas-para-gerir-e-analisar-seu-negocio-parte-1"><h1 class="titulo-artigo">As melhores ferramentas para gerir e analisar seu negócio! [PARTE 1]</h1></a>
					<div class="img-artigo">
						<a href="artigos/ferramentas-para-gerir-e-analisar-seu-negocio-parte-1"><img src="img/artigos/ferramentas-para-gerir-e-analisar-seu-negocio-parte-1/thumb-ferramentas-para-gerir-e-analisar-seu-negocio-parte-1.jpg" alt="As melhores ferramentas para gerir e analisar seu negócio! [PARTE 1]"></a>
					</div>
					<p>Gerir o próprio negócio nunca foi tarefa fácil e ao contrário do que se parece, não tem experiência do mundo que a torne melhor. É sempre necessário estar planejando, analisando, se adaptando as novidades do mercado, criando, pivotando e trazendo constantes inovações para fidelizar...</p>
					<div class="continue">
						<a href="artigos/ferramentas-para-gerir-e-analisar-seu-negocio-parte-1">Continue lendo</a>
					</div>
				</div>

				<div class="artigo">
					<a href="artigos/como-abrir-meu-primeiro-negocio"><h1 class="titulo-artigo">Como abrir meu primeiro negócio: 6 dicas que podem te ajudar!</h1></a>
					<div class="img-artigo">
						<a href="artigos/como-abrir-meu-primeiro-negocio"><img src="img/artigos/como-abrir-meu-primeiro-negocio/thumb-como-abrir-meu-primeiro-negocio.jpg" alt="Como abrir meu primeiro negócio"></a>
					</div>
					<p>Se analisarmos nosso cotidiano e todas as questões econômicas que o Brasil está enfrentando, perceberemos que está se tornando cada vez mais comum vermos novos negócios nascendo e mais pessoas começando a investir no mercado empreendedor. O problema de todo esse crescimento...</p>
					<div class="continue">
						<a href="artigos/como-abrir-meu-primeiro-negocio">Continue lendo</a>
					</div>
				</div>

				<?php
					$pagina = 2; 
					require_once 'require/paginacao.php';
				?>			

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