<?php

if(isset($_GET['enviar']) && $_GET['enviar'] == "ok"){

	$nomeremetente     = $_POST['nome'];
	$emailremetente    = $_POST['email'];
	$emaildestinatario = 'contato@agileexpress.com.br'; // Digite seu e-mail aqui, lembrando que o e-mail deve estar em seu servidor web
	$mensagem          = $_POST['mensagem'];
	$assunto_input     = $_POST['assunto'];
	 
	/* Montando a mensagem a ser enviada no corpo do e-mail. */
	$mensagemHTML = '<h1>CONTATO PELO SITE</h1>
	<p style="font-size:12px"><b>Nome:</b> '.$nomeremetente.'
	<p style="font-size:12px"><b>E-Mail:</b> '.$emailremetente.'
	<p style="font-size:12px"><b>Mensagem:</b> '.$mensagem.'</p>';

	// Verficando se o usuário colocou um assunto pelo formulário
	if ($assunto_input == 'Assunto' || $assunto_input == '') {
		$assunto = 'Contato pelo site';
	}else{
		$assunto = $assunto_input;
	}

	// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
	// O return-path deve ser ser o mesmo e-mail do remetente.
	$headers = "MIME-Version: 1.1\r\n";
	$headers .= "Content-type: text/html; charset=utf-8\r\n";
	$headers .= "From: $emailremetente\r\n"; // remetente
	$headers .= "Return-Path: $emaildestinatario \r\n"; // return-path
	$envio = mail($emaildestinatario, $assunto, $mensagemHTML, $headers ,"-r".$emaildestinatario);
	 
	if($envio){
		/* Montando a mensagem de resposta automatica */
		$mensagem_resposta = '<p>Recebemos o seu e-mail, em breve entraremos em contato<br/><br/>Obrigado<br/><br/><br/>Agile Express</p>';

		$headers_resposta = "MIME-Version: 1.1\r\n";
		$headers_resposta .= "Content-type: text/html; charset=utf-8\r\n";
		$headers_resposta .= "From: $emailremetente\r\n"; // remetente
		$headers_resposta .= "Return-Path: $emaildestinatario \r\n"; // return-path
		$envio = mail($emailremetente, $assunto, $mensagemHTML, $headers_resposta ,"-r".$emailremetente);

		echo '
				<!-- POP-UP DE ALERTA -->

				<div id="mensagem-ok">

					<div id="background"></div>
							
					<div id="alinha">
						
						<div id="caixa-branca">

							<h1 id="Titulo-Msg">Enviado com Sucesso!<h1>
							<h2 id="Subtitulo-Msg"><span>'.$nomeremetente.'</span>, em breve entraremos em contato com você.</h2>

							<button id="msg-ok">OK</button>

						</div> <!-- Final Div Background Caixa Branca -->

					</div> <!-- Final Div Alinha -->

				</div> <!-- Final Div Pop-up Geral -->

				<!-- FINAL POP-UP DE ALERTA -->
			';

	}else{
		echo '<script>alert("Problema no E-mail")</script>';
	}
}

?>
