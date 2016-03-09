<!doctype html>
<html lang="pt-br" itemscope itemtype="http://schema.org/Product">
<head>
	<meta charset="UTF-8">
	<title>Agile Express | Resultado de Pesquisa</title>

	<!--META TAGS-->
	<meta name="title" content="Agile Express | Resultado de Pesquisa">

	<?php include "includes/head.php"; ?>
	
</head>
<body>

	<!--TAG MANAGER-->
	<?php include_once("includes/tagmanager.php"); ?>
	
	<!--GOOGLE ANALYTICS-->
	<?php include_once("includes/analyticstracking.php"); ?>

	<main>

		<?php include "includes/header.php"; ?>


		<div id="conteudo">

			

			<div id="background">
				<img src="images/background-quemsomos.png">
			</div>

			<div id="busca" class="grid">

				<div class="clearfix">

					<h1>Resultado da Busca</h1>

					<section>

						<?php

							// Verificando se foi feita alguma busca
							$pesq = (isset($_POST['texto-busca'])) ? trim($_POST['texto-busca']) : '';


							// Se não existir nenhuma palavra, imprimi na tela que é para digitar no campo de busca
							if (empty($pesq)) {
								echo 'Digite no campo de Busca';
							}else{

								// Iniciando as variáveis da pastas da raíz que vão ser procuradas
								$pasta = "agile";
								$atual = "../$pasta/busca.php";
								$busca = glob("../$pasta/*.php", GLOB_BRACE);

								// Percorrendo as Urls para  busca
								foreach ($busca as $item) {
									if ($item !== $atual && $item !== "../$pasta/404.php") {
										// Abrindo o arquivo apenas para leitura
										$abrir = fopen($item, "r");
										// Lendo o arquivo até o final
										while (!feof($abrir)) {
											$lendo = fgets($abrir);
											// Retirando tudo que for linguagem de programação ou marcação
											$lendo = strip_tags($lendo);
											// Se achar a palavra buscada dentro do arquivo atual
											if (stristr($lendo, $pesq) == true) {
												// Substituindo a extensão do arquivo e qualquer hífen que conter no nome
												$retirar = array(".php", "-");
												$incluir = array("", " ");
												$dados = str_replace($retirar, $incluir, $item);
												$dados = basename($dados);
												// Trocando o nome INDEX por HOME
												if ($item == "../$pasta/index.php") $dados = "HOME";
												// Pegando um texto de resumo da palavra buscada
												$texto = stristr($lendo, $pesq);
												// Resultado da pesquisa
												$results[] = '<a href="'.str_replace($incluir, $retirar, $item).'">'.$dados.'</a><p>'.$texto.'<a class="veja-mais" href="'.str_replace($incluir, $retirar, $item).'">+ Veja mais</a></p><hr>';
												unset($dados); // Apagando a variável Dados
											}
											unset($lendo); // Apagando a variável do arquivo
										}
										fclose($abrir); // Fechando o arquivo
									}
								}

								/* IMPRIMIR O RESULTADO */

								if (isset($results) && count($results) > 0) {
									echo '<h2>Sua busca - "'.$pesq.'" - <span>retornou '.count($results).' resultados:</span></h2><br><br>';
									$results = array_unique($results);
									echo "<ul>";
									foreach ($results as $link ) {
										echo "<li>".$link."</li>";
									}
									echo "</ul>";
								}else{
									echo '<h2>Sua busca - "'.$pesq.'" - <span>não retornou nenhum resultado.</span></h2><br><br>';
								}
							}

						?>
						

					</section>

					<div id="cto_right">
						<?php include "includes/rastreamento.php"; ?>
					</div>
					
				</div> <!-- FECHANDO DIV CLEARFIX -->
				
			</div> <!-- FECHANDO DIV BUSCA -->

			
			<?php include "includes/footer.php"; ?>

		</div> <!-- FECHANDO DIV CONTEUDO -->
	



	</main>


	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="script/menu.js"></script>
	<script src="script/rastreamento.js"></script>
	<script>isMobile();</script>
</body>
</html>

	
