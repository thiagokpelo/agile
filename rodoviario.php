<!doctype html>
<html lang="pt-br" itemscope itemtype="http://schema.org/Product">
<head>
	<meta charset="UTF-8">
	<title>Agile Express | Transporte Rodoviário</title>

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

			<div id="rodoviario" class="grid">

				<div class="clearfix">

					<h1>Rodoviário</h1>

					<section>

						<p>
							Essa modalidade de transporte oferece a melhor relação custo x benefício.
							<br><br>
							Esse serviço pode ser adequado a necessidades específicas relacionadas a prazo para a entrega e/ou cuidados adicionais para cargas com alto valor agregado ou importância diferenciada.
							<br><br>
							Existem diferenças que precisam ser observadas para que o serviço contratado atenda as expectativas. A seguir listamos as particularidades de cada serviço:

						</p>

						<div class="section_servicos section_top">
							<img src="images/icone_distribuicao.png" alt="convencional">
							<h2>Convencional</h2>
							<p>
								Serviço indicado para cargas fracionadas, a um custo otimizado. Atendimento em São Paulo e Grande São Paulo em até 48 horas e todo o estado em até 72 horas.
								<br>
								<em>*Outros prazos de entrega por<br>localidades sob consulta.</em>
							</p>
						</div>

						<div class="section_servicos section_right section_top">
							<img src="images/icone_distribuicao.png" alt="expresso">
							<h2>Expresso</h2>
							<p>
								Serviço desenvolvido principalmente para entregas porta a porta, atendendo destinos variados e com tempo de translado entre 24 e 72 horas após a coleta.
								<br>
								<em>*Outros prazos de entrega por<br>localidades sob consulta.</em>
							</p>
						</div >

						<div class="section_servicos section_down">
							<img src="images/icone_distribuicao.png" alt="dedicado">
							<h2>Dedicado</h2>
							<p>
								Serviço indicado para cargas com prioridade de entrega, necessidades exclusivas, ou alto valor agregado, com a utilização de um veículo individualizado desde a origem até o destino. Ficando a escolha do cliente com ou sem escolta armada.
								<br>
								<em>*Prazos de entrega e localidades sob consulta.</em>
							</p>
						</div>

						<div class="section_servicos section_right section_down">
							<img src="images/icone_distribuicao.png" alt="distribuicao">
							<h2>Capital - Interior - Especial</h2>
							<p>
								Carro próprio com dedicação exclusiva, para distribuição de cargas fracionadas em toda a Capital e interior de São Paulo, com prazo máximo de entrega em 72h a partir da data da coleta.
								<br>
								<em>*Prazos de entrega e localidades sob consulta.</em>
							</p>
						</div>

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

	
