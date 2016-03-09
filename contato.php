<?php include "includes/enviarcontato.php"; ?>

<!doctype html>
<html lang="pt-br" itemscope itemtype="http://schema.org/Product">
<head>
	<meta charset="UTF-8">
	<title>Agile Express | Contato</title>

	<!--META TAGS-->
	<meta name="title" content="Agile Express | Contato">

	<?php include "includes/head.php"; ?>

</head>
<body onload="initialize()">

	<!--TAG MANAGER-->
	<?php include_once("includes/tagmanager.php") ?>
	
	<!--GOOGLE ANALYTICS-->
	<?php include_once("includes/analyticstracking.php") ?>

	<!-- POP-UP DE ALERTA -->

	<div id="mensagem-falha">

		<div id="background"></div>
				
		<div id="alinha">
			
			<div id="caixa-branca">

				<h1 id="Titulo-Msg">Não foi!<h1>
				<h2 id="Subtitulo-Msg">Algum campo não foi preenchido corretamente.</h2>

				<button id="tentar-novamente">Tentar Novamente</button>

			</div> <!-- Final Div Background Caixa Branca -->

		</div> <!-- Final Div Alinha -->

	</div> <!-- Final Div Pop-up Geral -->

	<!-- FINAL POP-UP DE ALERTA -->

	

	<main>

		<?php include "includes/header.php"; ?>


		<div id="conteudo">

			

			<div id="background">
				<img src="images/background-quemsomos.png">
			</div>

			<div id="contato" class="grid">

				<div class="clearfix">

					<h1>Contato</h1>

					<section>

						<h2>Nós gostariamos de ouvir sua opinião</h2>
						<h3>Preencha o formulário abaixo que entraremos em contato</h3>

						<form method="post" action="<?php echo $PHP_SELF; ?>?enviar=ok" name="contato" id="contato">
							<fieldset>
								<input type="text" name="nome" id="nome" value="Nome*">
								<input type="email" name="email" id="email" value="E-mail*">
								<input type="text" name="assunto" id="assunto" value="Assunto">
								<textarea name="mensagem" id="mensagem">Mensagem*</textarea>
								<p>* Campos obrigatórios</p>
								<button type="submit" id="botao_enviar">Enviar</button>
							</fieldset>
						</form>

					</section>

					<div id="cto_right">
						<div class="end_right">
							<h4>Endereço</h4>
							<p>Av. José Giorgi, 301 - Galpão B5 - Granja Viana II<br>CEP: 06707-100 - Cotia - SP</p>
						</div>
						<div class="end_right">
							<h4>Contatos</h4>
							<p>(11) 3853-8200 <br/> contato@agileexpress.com.br</p>
						</div>
						<div class="end_right trabalhe">
							<h4>Trabalhe Conosco</h4>
							<a href="trabalhe-conosco">Clique Aqui</a>
						</div>
					</div>

					<div id="map_canvas"></div>
					
				</div> <!-- FECHANDO DIV CLEARFIX -->


				
			</div> <!-- FECHANDO DIV CONTATO -->

			
			<?php include "includes/footer.php"; ?>

		</div> <!-- FECHANDO DIV CONTEUDO -->

	</main>

	<!-- SCRIPT GOOGLE MAP -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="script/menu.min.js"></script>
	<script src="https://maps.google.com/maps/api/js?sensor=false"></script>
	<script src="script/contato.min.js"></script>
	<script>isMobile();</script>

</body>
</html>

	
