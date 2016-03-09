<!doctype html>
<html lang="pt-br" itemscope itemtype="http://schema.org/Product">
<head>
	<meta charset="UTF-8">
	<title>Agile Express | Transporte Aéreo</title>

	<!--META TAGS-->
	<meta name="title" content="Agile Express | Transporte Aéreo">

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

			<div id="aereo" class="grid">

				<div class="clearfix">

					<h1>Aéreo</h1>

					<section>

						<p>
							Essa modalidade, com cobertura nacional de acordo com a malha aérea disponível, possibilita que sua remessa chegue ao destino no prazo desejado.
						</p>

						<div class="section_servicos section_top">
							<img src="images/icone_standard.png" alt="standard">
							<h2>Standard</h2>
							<p>Serviço convencional com tempo de trânsito entre 48 à 72 horas após a coleta. Disponível nas localidades atendidas por vôos comerciais.</p>
						</div>

						<div class="section_servicos section_right section_top">
							<img src="images/icone_standard.png" alt="standard">
							<h2>Gold</h2>
							<p>Serviço indicado para remessas que necessitam de prioridade moderada, disponibiliza os produtos para entrega no dia seguinte ao da coleta.</p>
						</div >

						<div class="section_servicos section_down">
							<img src="images/icone_standard.png" alt="standard">
							<h2>Master</h2>
							<p>Serviço indicado para remessas com alta prioridade de entrega, embarcadas no primeiro vôo disponível para a localidade solicitada. Possibilita a entrega do produto transportado no mesmo dia da coleta de acordo com as condições comerciais e voos disponíveis.</p>
						</div>

						<div class="section_servicos section_right section_down">
							<img src="images/icone_standard.png" alt="standard">
							<h2>Hot Situation</h2>
							<p>Serviço de atendimento diferenciado, indicado para remessas de altíssima prioridade e/ou produtos de alto valor agregado e que necessitem de entrega com hora marcada. Nosso portador acompanhará sua encomenda e será responsável pela execução total da operação de transporte.</p>
						</div>

					</section>

					<div id="cto_right">
						<?php include "includes/rastreamento.php"; ?>
					</div>
					
				</div> <!-- FECHANDO DIV CLEARFIX -->
				
			</div> <!-- FECHANDO DIV AEREO -->

			
			<?php include "includes/footer.php"; ?>

		</div> <!-- FECHANDO DIV CONTEUDO -->
	



	</main>


	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="script/menu.min.js"></script>
	<script src="script/rastreamento.min.js"></script>
	<script>isMobile();</script>
</body>
</html>

	
