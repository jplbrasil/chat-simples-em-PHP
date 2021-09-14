<?php

print "<HTML>\n";
print "<HEAD>\n";
print "<META HTTP-EQUIV='refresh' content='10'>\n";
print "</HEAD>\n";
print "<BODY BGCOLOR=#EEEEEE>\n";

$cor="BLUE";

if(file_exists("mensagens.txt")) {

	//Joga as mensagens em um array
	if($arquivo=fopen("mensagens.txt","r")) {
		$chave=0;
		while(!feof($arquivo)) {
			$linhas[$chave]=fgets($arquivo,1024);
			$chave++;
		}
		fclose($arquivo);
	}

	//Inverte a ordem das mensagens
	krsort($linhas);

	//Exibe as mensagens na tela
	while(list($chave,$linha)=each($linhas)) {
		print "<FONT SIZE=2 COLOR='$cor' FACE='ARIAL'>$linha</FONT><BR>\n";
		if($linha[0]=="<") {
			if($cor=="BLUE")
				$cor="RED";
			else
				$cor="BLUE";
		}
	}
}


print "</BODY>\n";
print "</HTML>\n";

?>


