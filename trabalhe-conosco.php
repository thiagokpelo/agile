<?php include "includes/enviarcurriculo.php"; ?>

<!doctype html>
<html lang="pt-br" itemscope itemtype="http://schema.org/Product">
<head>
	<meta charset="UTF-8">
	<title>Agile Express | Trabalhe Conosco</title>

	<!--META TAGS-->
	<meta name="title" content="Agile Express | Trabalhe Conosco">

	<?php include "includes/head.php"; ?>

</head>
<body>

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

			<div id="trabalhe-conosco" class="grid">

				<div class="clearfix">

					<h1>Trabalhe Conosco</h1>

					<section>

						<h2>Deseja fazer parte da nossa equipe?</h2>
						<h3>Deixe no formulário abaixo seus dados, seu currículo e o setor em que deseja trabalhar para analisarmos seu perfil.</h3>

						<form method="post" action="<?php echo $PHP_SELF; ?>?enviar=ok" name="form_trabalhe_conosco" id="form_trabalhe_conosco" enctype="multipart/form-data">
							<fieldset>
								<h4>Seus Dados</h4>
								<input name="nome" type="text" id="nome" value="Nome">
								<input name="email" type="email" id="email" value="E-mail">
								<input name="tel" type="tel" id="tel" value="Telefone">
								<input name="cidade" type="text" class="input_cidade" id="cidade" value="Cidade">
								<input name="estado" type="text" class="input_estado" id="estado" value="Estado">
							</fieldset>

							<fieldset>
								<h4>Setor</h4>
								<input name="setor" type="text"  id="setor" value="Digite o setor, cargo ou área em que trabalha...">
							</fieldset>

							<fieldset>
								<h4>Arquivo do Currículo (.pdf, .doc ou .docx)</h4>
								<input name="nome-arquivo" type="text" id="nome-arquivo" value="Currículo">
								<div class="btn-selecionar-arquivo">
									<input id="arquivo" name="arquivo" type="file">
									<button type="button">Selecionar Arquivo</button>
								</div>
							</fieldset>

							<button type="submit" id="botao_enviar">Enviar Dados</button>
						</form>

					</section>

					<div id="cto_right">
						
					</div>
						
					
				</div> <!-- FECHANDO DIV CLEARFIX -->

				
			</div> <!-- FECHANDO DIV TRABALHE CONOSCO -->

			
			<?php include "includes/footer.php"; ?>

		</div> <!-- FECHANDO DIV CONTEUDO -->

	</main>

	<!-- SCRIPT GOOGLE MAP -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="script/menu.js"></script>
	<script src="script/trabalhe-conosco.js"></script>
	<script src="script/rastreamento.js"></script>
	<script>isMobile();</script>

</body>
</html>

	
