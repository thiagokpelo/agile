<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Agile Express | Erro 404</title>

	<!--META TAGS-->
	<meta name="title" content="Agile Express | Erro 404">

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

			<div id="erro" class="grid">

				<div class="clearfix">

					<h1>Erro 404</h1>
					<h2>Essa página não existe =(</h2>

					<p>
						Está parecendo que você tomou um rumo errado.
						<br/>
						<strong>Não se preocupe!!!!</strong> Isso acontece com os melhores de nós.
					</p>

					<nav>
						<ul>
							<li><a href="index.php">HOME</a></li>
							<li><a href="quemo-somos">QUEM SOMOS</a></li>
							<li><a href="nossa-frota">NOSSA FROTA</a></li>
							<li><a href="rodoviario">RODOVIÁRIO</a></li>
							<li><a href="aereo">AÉREO</a></li>
							<li><a href="logistica">LOGÍSTICA</a></li>
							<li><a href="gerenciamento-de-risco">GERENCIAMENTO DE RISCO</a></li>
							<li><a href="unidades">UNIDADES</a></li>
							<li><a href="contato">CONTATO</a></li>
						</ul>
					</nav>

					
				</div> <!-- FECHANDO DIV CLEARFIX -->
				
			</div> <!-- FECHANDO DIV CONTATO -->

			
			<?php include "includes/footer.php"; ?>

		</div> <!-- FECHANDO DIV CONTEUDO -->

	</main>

	<!-- SCRIPT GOOGLE MAP -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="script/menu.js"></script>
	<script>isMobile();</script>

</body>
</html>