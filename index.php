
<!doctype html>
<html lang="pt-br" itemscope itemtype="http://schema.org/Product">
<head>
	<meta charset="UTF-8">
	<title>Agile Express</title>

	<!--META TAGS-->
	<meta name="title" content="Agile Express">

	<?php include "includes/head.php"; ?>
	
</head>
<body>

	<!--TAG MANAGER-->
	<?php include_once("includes/tagmanager.php") ?>
	
	<!--GOOGLE ANALYTICS-->
	<?php include_once("includes/analyticstracking.php") ?>

	<main>

		<?php include "includes/header.php"; ?>

		<div id="conteudo">

			<figure id="highlight">
				<img src="images/highlight-1.png">
				<figcaption><h2>Agil, Flexível e Seguro.</h2><br/><h3>Uma empresa altamente capacitada para atender suas necessidades.</h3></figcaption>
			</figure>

			<div id="index" class="grid">

				<div class="clearfix">

					<div id="section_left">
						<section>
							<h1><a href="quem-somos">A Agile Express</a></h1>
							<br/>
							<a href="quem-somos"><img src="images/miniatura-agile.png" alt="A Agile Express"></a>
							<p>
								Somos uma empresa que atua no segmento de transporte intermodal, com foco na entrega porta-porta em todo o território nacional, contamos com uma rede de representantes altamente capacitada para atender às necessidades específicas de cada cliente.<a href="quem-somos">+ veja mais</a>
							</p>
						</section>

						<section>
							<h1><a href="rodoviario">Transporte Rodoviário</a></h1>
							<br/>
							<a href="rodoviario"><img src="images/miniatura-rodoviario.png" alt="Nossos Serviços"></a>
							<p>
								Essa modalidade de transporte tem como objetivo ofertar serviços terrestres que atendam todas as necessidades com a melhor relação custo x benefício. Disponibilizamos quatro condições diferenciadas para melhor atendê-los.<br><a href="rodoviario">+ veja mais</a>
							</p>
						</section>

						<section>
							<h1><a href="trabalhe-conosco">Trabalhe Conosco</a></h1>
							<br/>
							<a href="trabalhe-conosco"><img src="images/miniatura-trabalhe-conosco.png" alt="Trabalhe Conosco"></a>
							<p>
								Valorizamos as pessoas. Se você se considera um profissional diferenciado, que pretende se desenvolver e prestar o melhor serviço possível, mande seu currículo.. Teremos enorme prazer em agendar uma entrevista para te conhecer. <a href="trabalhe-conosco">Cadastre aqui</a>.
							</p>
						</section>
						
					</div>

					<div id="section_right">

						<section>
							<h1><a href="tecnologia">Tecnologia</a></h1>
							<br/>
							<a href="tecnologia"><img src="images/miniatura-tecnologia.png" alt="Tecnologia"></a>
							<p>
								Investimos continuamente em busca de novas tecnologias que proporcionem qualidade, eficiência e segurança em nossos serviços. <a href="tecnologia">+ veja mais</a><br><br><br>
							</p>
						</section>

						<section>
							<h1><a href="aereo">Transporte Aéreo</a></h1>
							<br/>
							<a href="aereo"><img src="images/miniatura-aereo.png" alt="Transporte Aéreo"></a>
							<p>
								Essa modalidade garantirá a urgência de sua remessa com cobertura nacional de acordo com a malha aérea disponível. <strong>Standard</strong> (48h à 72h) / <strong>Gold</strong> (próximo dia) / <strong>Master</strong> (próximo vôo) / <strong>Hot Situation</strong> (alta prioridade)<a href="aereo"><br>+ veja mais</a>
							</p>
						</section>
						
						<?php include "includes/rastreamento.php"; ?>
						
					</div> <!-- FECHANDO DIV SECTION_RIGHT -->

				</div> <!-- FECHANDO DIV CLEARFIX -->

			</div> <!-- FECHANDO DIV INDEX -->
			
			<?php include "includes/footer.php"; ?>

		</div> <!-- FECHANDO DIV CONTEUDO -->
		

	</main>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="script/menu.min.js"></script>
	<script src="script/index.min.js"></script>
	<script src="script/rastreamento.min.js"></script>
	<script>isMobile();</script>
</body>
</html>