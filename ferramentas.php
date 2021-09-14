<?php

print "<HTML>\n";

print "<BODY BGCOLOR=#DDDDDD>\n";

if(isset($apelido)) {
	print "<FORM METHOD='POST' ACTION='ferramentas.php'>\n";
	print "<INPUT TYPE='HIDDEN' NAME='apelido' VALUE='$apelido' SIZE=20>\n";
	print "<FONT SIZE=2><B>$apelido</B>, digite uma mensagem:</FONT>\n";
	print "<INPUT TYPE='TEXT' NAME='mensagem' SIZE=50>\n";
	print "<INPUT TYPE='SUBMIT' VALUE='Enviar'>\n";
	print "</FORM>\n";

	if(isset($mensagem)) {

		$hora = date("H") . ":" . date("i");
		$data = date("d") ."/". date("m") ."/". date("Y");

		//Cria a mensagem no formato necessario para ser lida pelo script mensagem.php
		$linha = "\n";
		$linha .= "<!-- Fim da mensagem";
		$linha .= "\n";
		$linha .= $mensagem;
		$linha .= "\n";
		$linha .= $apelido;
		//$linha .= ", do host $REMOTE_ADDR,";
		$linha .= " disse em $data às $hora hs:";

		if($arquivo = fopen("mensagens.txt","a")) {
			fwrite($arquivo,$linha);
			fclose($arquivo);
		}
	}

}

print "</BODY>\n";

print "</HTML>\n";

?>


