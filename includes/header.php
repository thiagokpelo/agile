<?php
$end = explode('/',$_SERVER['PHP_SELF']);
$url = end($end);
?>

<header>

	<div class="grid">

		<h1><a href="./">Agile Express</a></h1>

		<nav>
			<ul class="menu-top">
				<li class="menu-principal"><a href="./" <?php if($url == 'index.php'){echo 'class="ativo"';}?>>Home</a></li>
				<li class="menu-pipe">|</li>
				<li class="menu-principal"><a href="quem-somos" <?php if($url == 'quem-somos.php'){echo 'class="ativo"';}?>>Quem Somos</a></li>
				<li class="menu-pipe">|</li>
				<li class="menu-principal"><a href="tecnologia" <?php if($url == 'tecnologia.php'){echo 'class="ativo"';}?>>Tecnologia</a></li>
				<li class="menu-pipe">|</li>
				<li class="menu-principal"><a href="gerenciamento-de-risco" <?php if($url == 'gerenciamento-de-risco.php'){echo 'class="ativo"';}?>>Gerenciamento de Risco</a></li>
				<li class="menu-pipe">|</li>
				<li class="menu-principal"><a href="nossa-equipe" <?php if($url == 'nossa-equipe.php'){echo 'class="ativo"';}?>>Nossa Equipe</a></li>
				<li class="menu-pipe">|</li>
				<li class="dropdown">
					<a id="menu-principal-dropdown" href="servicos" <?php if($url == 'servicos.php' || $url == 'rodoviario.php' || $url == 'aereo.php' || $url == 'logistica.php'){echo 'class="ativo"';}?>>Serviços</a>
					<ul class="menu-dropdown">
						<li id="item-transporte">
							<a href="#">Transportes</a> <img src="images/seta-menu.png"> 
							<ul class="menu-principal-dropdown sub-menu">
								<li><a href="rodoviario">Rodoviário</a></li>
								<li><a href="aereo">Aéreo</a></li>
							</ul>
						</li>
						<li class="menu-item-meio"><a href="logistica">Logística</a></li>
					</ul>
				</li>
				<li class="menu-pipe">|</li>
				<li class="menu-principal"><a href="unidades" <?php if($url == 'unidades.php'){echo 'class="ativo"';}?>>Unidades</a></li>
				<li class="menu-pipe">|</li>
				<li class="menu-principal"><a href="contato" <?php if($url == 'contato.php'){echo 'class="ativo"';}?>>Contato</a></li>
			</ul>

			<form id="search" action="busca.php" method="post" name="form-busca">
				<div id="navbar-search-wrapper">
					<span class="icon-fechar"><img src="images/icon-fechar.png"></span>
					<input type="text" name="texto-busca" id="texto-busca" value="Digite aqui sua busca...">
				</div>
				<button type="submit" class="icon-search"><img src="images/icon-search.png"></button>
			</form>

		</nav>
		
	</div>
</header>