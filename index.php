<?php

print "<HTML>\n";
print "<TITLE>Sistema de Chat On Line</TITLE>\n";

if(!isset($apelido)||$apelido=="") {
	print "<BODY BGCOLOR=#DDDDDD>\n";
	print "<BR><BR>\n";
	print "<FORM METHOD='POST' ACTION='index.php'>\n";
	print "<TABLE BORDER=1 ALIGN=CENTER>\n";
	print "<TR>\n";
	print "<TD>Digite um apelido para voce:</TD>\n";
	print "</TR><TR>\n";
	print "<TD><INPUT TYPE='TEXT' NAME='apelido' SIZE=20 VALUE='$apelido'></TD>\n";
	print "</TR><TR>\n";
	print "<TD><INPUT TYPE='SUBMIT' VALUE='Entrar'></TD>\n";
	print "</TR>\n";
	print "</TABLE>\n";
	print "</FORM>\n";
	print "</BODY>\n";
}

else {
	//Me avisa quando alguem entra no sistema
	if(isset($apelido)&&(!isset($mensagem)))
		mail("admin","Alguem no bate-papo...","\"$apelido\", do host $REMOTE_ADDR","From: memovip@memovip.com.br");

	//Exibe a tela de chat
	print "<FRAMESET ROWS=10%,* BORDER=1>\n";
	print "<FRAME NAME='ferramentas' SRC='ferramentas.php?apelido=$apelido'>\n";
	print "<FRAME NAME='mensagens' SRC='mensagens.php'>\n";
	print "</FRAMESET>\n";
}

print "</HTML>\n";

?>


