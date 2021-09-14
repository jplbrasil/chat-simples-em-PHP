<?php

if($Apagar) {
	if(file_exists("../mensagens.txt"))
		unlink("../mensagens.txt");
}

print "<HTML>\n";
print "<TITLE>Sistema de Chat On Line</TITLE>\n";
print "<BODY BGCOLOR=#DDDDDD LINK'BLUE' ALINK='BLUE' VLINK='BLUE'>\n";
print "<FORM METHOD='POST' ACTION='index.php'>\n";
print "<BR>\n";
print "Esta página apaga o arquivo de mensagens, iniciando um novo bate papo!\n";
print "<BR>\n";
print "<BR>\n";
print "<INPUT TYPE='SUBMIT' VALUE='Continuar' NAME='Apagar'>\n";
print "</FORM>\n";

print "<BR>\n";
print "<BR>\n";
print "<A HREF='../index.php'>Ir para o chat!</A>\n";

print "</BODY>\n";
print "</HTML>\n";

?>


