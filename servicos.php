<!doctype html>
<html lang="pt-br" itemscope itemtype="http://schema.org/Product">
<head>
	<meta charset="UTF-8">
	<title>Agile Express | Serviços</title>

	<!--META TAGS-->
	<meta name="title" content="Agile Express | Transporte Rodoviário">

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

			

			<div id="background">
				<img src="images/background-quemsomos.png">
			</div>

			<div id="servicos" class="grid">

				<div class="clearfix">

					<h1>Serviços</h1>

					<section>

						<p>
							Dividimos nossos serviços em dois grupos, transporte e logística.
						</p>

						<div class="section_servicos section_top">
							<img src="images/icone_transporte.png" alt="Transporte">
							<h2>Transporte</h2>
							<p>
								Conforme combinado, sua carga chega em qualquer lugar do Brasil no horário previsto. Escolhemos a melhor opção de entrega de acordo com a sua necessidade.
							</p>
							<ul>
								<li><a href="rodoviario">Rodoviário</a></li>
								<li><a href="aereo">Aéreo</a></li>
							</ul>
						</div>

						<div class="section_servicos section_right section_top">
							<img src="images/icone_logistica.png" alt="Logística">
							<h2>Logística</h2>
							<p>
								Sempre pensando em você, nós analisamos cada detalhe da viagem de sua carga. Desde posicionamento até a chegada ao destino.
							</p>
							<ul>
								<li><a href="logistica">Saiba mais</a></li>
							</ul>
						</div >

					</section>

					<div id="cto_right">
						<?php include "includes/rastreamento.php"; ?>
					</div>
					
				</div> <!-- FECHANDO DIV CLEARFIX -->
				
			</div> <!-- FECHANDO DIV RODOVIARIO -->

			
			<?php include "includes/footer.php"; ?>

		</div> <!-- FECHANDO DIV CONTEUDO -->
	



	</main>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="script/menu.min.js"></script>
	<script src="script/rastreamento.min.js"></script>
	<script>isMobile();</script>
	
</body>
</html>

	
