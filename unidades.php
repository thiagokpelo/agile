<!doctype html>
<html lang="pt-br" itemscope itemtype="http://schema.org/Product">
<head>
	<meta charset="UTF-8">
	<title>Agile Express | Unidades</title>

	<!--META TAGS-->
	<meta name="title" content="Agile Express | Unidades">

	<?php include "includes/head.php"; ?>
	
</head>
<body onload="initialize()">

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

			<div id="unidades" class="grid">

				<div class="clearfix">

					<h1>Unidades</h1>

					<p>
						A Agile Express possui bases operacionais em todo o estado de São Paulo e possui parceiros cadastrados em todo o Brasil, dessa forma cobrimos todo o país de maneira a melhor atender sua necessidade.
						<br><br>
						Estamos constantemente procurando parceiros melhores e ampliando nossa rede de relacionamento para melhor atendê-los, por essa razão, nossas bases são atualizadas com frequência. Caso tenha alguma localidade de seu interesse que não tenha conseguido localizar aqui, <a href="mailto:contato@agileexpress.com.br?subject=Unidades" >envie um e-mail pra gente</a>, teremos enorme prazer em atendê-lo.
					</p>
					<br><br>

					<form name="buscaCep">
						<legend>Busque uma unidade ou representante mais próximo.</legend>
						<input type="text" name="myAddress" id="myAddress" value="Procurar por endereço"/>
						<input type="button" id="trace_route" value="Buscar">
					</form>

					<div id="legendas">
						<figure>
							<img src="images/map.png">
							<figcaption>Simboliza as <strong>Unidades</strong> da Agile Express</figcaption>
						</figure>
						<figure>
							<img src="images/pin-azul.png">
							<figcaption>Simboliza os <strong>Representantes</strong> da Agile Express</figcaption>
						</figure>
					</div>

					<div id="map_canvas"></div> <!-- AQUI EXIBE O MAPA -->
						
					
				</div> <!-- FECHANDO DIV CLEARFIX -->

				
			</div> <!-- FECHANDO DIV UNIDADES -->

			
			<?php include "includes/footer.php"; ?>


		</div> <!-- FECHANDO DIV CONTEUDO -->


	</main>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="script/menu.min.js"></script>
	<script src="https://maps.google.com/maps/api/js?sensor=false"></script>
	<script src="script/unidades.min.js"></script>
	<script>isMobile();</script>
	
</body>
</html>

	
