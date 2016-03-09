<?php

if(isset($_GET['enviar']) && $_GET['enviar'] == "ok"){

	$emaildestinatario = 'contato@agileexpress.com.br';
	$nomeremetente     = $_POST['nome'];
	$emailremetente    = $_POST['email'];
	$telefone          = $_POST['tel'];
	$cidade            = $_POST['cidade'];
	$estado            = $_POST['estado'];
	$setor             = $_POST['setor'];
	$assunto           = 'Trabalhe Conosco pelo Site';

	$arquivo = isset($_FILES["arquivo"]) ? $_FILES["arquivo"] : FALSE; 
	 
	if(file_exists($arquivo["tmp_name"]) and !empty($arquivo)){ 
	 
		$fp = fopen($_FILES["arquivo"]["tmp_name"],"rb"); 
		$anexo = fread($fp,filesize($_FILES["arquivo"]["tmp_name"])); 
		$anexo = base64_encode($anexo); 
		 
		fclose($fp); 
		 
		$anexo = chunk_split($anexo); 
		 
		 
		$boundary = "XYZ-" . date("dmYis") . "-ZYX"; 
		 
		$mensagemHTML = "--$boundary\n"; 
		$mensagemHTML .= "Content-Transfer-Encoding: 8bits\n"; 
		$mensagemHTML .= "Content-Type: text/html; charset=\"ISO-8859-1\"\n\n"; //plain
		$mensagemHTML .= "<h1>CANDIDATO PARA TRABALHAR NA AGILE EXPRESS</h1>\n";
		$mensagemHTML .= "<p style='font-size:12px'><b>Nome:</b> ".$nomeremetente."</p>\n";
		$mensagemHTML .= "<p style='font-size:12px'><b>E-mail:</b> ".$emailremetente."</p>\n";
		$mensagemHTML .= "<p style='font-size:12px'><b>Telefone:</b> ".$telefone."</p>\n";
		$mensagemHTML .= "<p style='font-size:12px'><b>Cidade:</b> ".$cidade."</p>\n";
		$mensagemHTML .= "<p style='font-size:12px'><b>Estado:</b> ".$estado."</p>\n";
		$mensagemHTML .= "<p style='font-size:12px'><b>Setor:</b> ".$setor."</p>\n";
		$mensagemHTML .= "--$boundary\n"; 
		$mensagemHTML .= "Content-Type: ".$arquivo["type"]."\n"; 
		$mensagemHTML .= "Content-Disposition: attachment; filename=\"".$arquivo["name"]."\"\n"; 
		$mensagemHTML .= "Content-Transfer-Encoding: base64\n\n"; 
		$mensagemHTML .= "$anexo\n"; 
		$mensagemHTML .= "--$boundary--\r\n"; 
		 
		$headers = "MIME-Version: 1.0\r\n"; 
		$headers .= "Content-type: multipart/mixed; boundary=\"$boundary\"\r\n";
		$headers .= "From: $emaildestinatario\r\n"; 
		$headers .= "Return-Path: $emaildestinatario\r\n";
		 
		//envio o email com o anexo 
		$envio = mail($emaildestinatario, $assunto, $mensagemHTML, $headers ,"-r".$emaildestinatario);
 
	} else{

		$mensagemHTML = "<h1>CANDIDATO PARA TRABALHAR NA AGILE EXPRESS</h1>";
		$mensagemHTML .= "<p style='font-size:12px'><b>Nome:</b> ".$nomeremetente."</p>";
		$mensagemHTML .= "<p style='font-size:12px'><b>E-mail:</b> ".$emailremetente."</p>";
		$mensagemHTML .= "<p style='font-size:12px'><b>Telefone:</b> ".$telefone."</p>";
		$mensagemHTML .= "<p style='font-size:12px'><b>Cidade:</b> ".$cidade."</p>";
		$mensagemHTML .= "<p style='font-size:12px'><b>Estado:</b> ".$estado."</p>";
		$mensagemHTML .= "<p style='font-size:12px'><b>Setor:</b> ".$setor."</p>";

		// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
		// O return-path deve ser ser o mesmo e-mail do remetente.
		$headers = "MIME-Version: 1.1\r\n";
		$headers .= "Content-type: text/html; charset=utf-8\r\n";
		$headers .= "From: $emailremetente\r\n"; // remetente
		$headers .= "Return-Path: $emaildestinatario \r\n"; // return-path
		$envio = mail($emaildestinatario, $assunto, $mensagemHTML, $headers ,"-r".$emaildestinatario);
	 
	}

	if($envio){
		/* Montando a mensagem de resposta automatica */
		$mensagem_resposta = '<p>Recebemos o seu e-mail, em breve entraremos em contato<br/><br/>Obrigado<br/><br/><br/>Agile Express</p>';

		$headers_resposta = "MIME-Version: 1.1\r\n";
		$headers_resposta .= "Content-type: text/html; charset=utf-8\r\n";
		$headers_resposta .= "From: $emaildestinatario\r\n"; // remetente
		$headers_resposta .= "Return-Path: $emaildestinatario \r\n"; // return-path
		$envio = mail($emailremetente, $assunto, $mensagemHTML, $headers_resposta ,"-r".$emaildestinatario);

		echo '
				<!-- POP-UP DE ALERTA -->

				<div id="mensagem-ok">

					<div id="background"></div>
							
					<div id="alinha">
						
						<div id="caixa-branca">

							<h1 id="Titulo-Msg">Enviado com Sucesso!<h1>
							<h2 id="Subtitulo-Msg"><span>'.$nomeremetente.'</span>, obrigado por querer fazer parte dessa equipe.</h2>

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
