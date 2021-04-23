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
		$og_url = "https://www.maxsuelfernandob.000webhostapp.com/portfolio/vamos-mudar-o-mundo/blog";
		$og_type = "website";
		$og_title = "Vamos mudar o mundo - Blog";
		$og_description = "Escritora, empreendedora e criadora do projeto 'Vamos mudar o mundo', tem como missão propagar a Educação Empreendedora através de palestras e produção de conteúdo.";
		$og_image = "https://www.maxsuelfernandob.000webhostapp.com/portfolio/vamos-mudar-o-mundo/img/sections/blog-mobile.png";
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
					<a href="artigos/por-que-devo-ensinar-empreendedorismo-em-minha-escola"><h1 class="titulo-artigo">Por que devo ensinar Empreendedorismo em minha escola?</h1></a>
					<div class="img-artigo">
						<a href="artigos/por-que-devo-ensinar-empreendedorismo-em-minha-escola"><img src="img/artigos/por-que-devo-ensinar-empreendedorismo-em-minha-escola/thumb-por-que-devo-ensinar-empreendedorismo-em-minha-escola.jpg" alt="Por que devo ensinar Empreendedorismo em minha escola?"></a>
					</div>
					<p>Sempre que falo sobre empreendedorismo fica martelando na minha mente: “Poxa, seria tão legal e tão revigorando ver alunos ainda no ensino regular estudando e praticando o empreendedorismo! ”, mas muita gente ainda me questiona sobre os motivos...</i>.</p>
					<div class="continue">
						<a href="artigos/por-que-devo-ensinar-empreendedorismo-em-minha-escola">Continue lendo</a>
					</div>
				</div>

				<div class="artigo">
					<a href="artigos/ingles-e-o-mundo-dos-negocios"><h1 class="titulo-artigo">O Inglês e o Mundo dos Negócios: Qual a relação?</h1></a>
					<div class="img-artigo">
						<a href="artigos/ingles-e-o-mundo-dos-negocios"><img src="img/artigos/ingles-e-o-mundo-dos-negocios/thumb-ingles-e-o-mundo-dos-negocios.jpg" alt="O Inglês e o Mundo dos Negócios: Qual a relação?"></a>
					</div>
					<p>É inegável que ser empreendedor é uma das profissões mais difíceis e que mais exigem da nossa sociedade atualmente, afinal de contas cuidar da própria empresa requer muito conhecimento e, mais ainda, muito esforço. Exatamente por isso, você assim como eu já deve ter ouvido milhares de vezes...</i>.</p>
					<div class="continue">
						<a href="artigos/ingles-e-o-mundo-dos-negocios">Continue lendo</a>
					</div>
				</div>

				<div class="artigo">
					<a href="artigos/ferramentas-para-gerir-e-analisar-seu-negocio-parte-2"><h1 class="titulo-artigo">As melhores ferramentas para gerir e analisar seu negócio! [PARTE 2]</h1></a>
					<div class="img-artigo">
						<a href="artigos/ferramentas-para-gerir-e-analisar-seu-negocio-parte-2"><img src="img/artigos/ferramentas-para-gerir-e-analisar-seu-negocio-parte-2/thumb-ferramentas-para-gerir-e-analisar-seu-negocio-parte-2.jpg" alt="As melhores ferramentas para gerir e analisar seu negócio! [PARTE 2]"></a>
					</div>
					<p>A importância de uma gestão empresarial de qualidade que tenha conhecimento sobre todos os acontecimentos e novidades recorrentes em uma empresa não é novidade, mas quando chega no dia a dia vemos a real dificuldade de gerir um negócio e estar a par de tudo...</p>
					<div class="continue">
						<a href="artigos/ferramentas-para-gerir-e-analisar-seu-negocio-parte-2">Continue lendo</a>
					</div>
				</div>

				<?php
					$pagina = 1; 
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