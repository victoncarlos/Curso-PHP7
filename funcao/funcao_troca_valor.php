<?php

	//$a = 10;
	$nome = "Victor NOME INICIAL";


	function troca_valor(&$nome){ // sendo que o valor de A só vai ser acrescentado quando o usuario chama a função
								 // Para alterar ou somar o valor na variavel é preciso colocar o & na frente								
		//$a += 50;
		$nome = " - Victon Carlos é o nome correto - NOME DA FUNÇÃO";
		
		//return ($a);
		return ($nome);


	}

	//echo "O valor de A sem a função é: $a ";
	echo "<br>";
	echo "O nome é $nome";
	echo "<br>";
	//echo troca_valor($a);
	echo troca_valor($nome);
	echo "<br>";
	echo "Adicionado o & na frente da função o nome agora sera somando: '$nome.' Sendo que a variavel (nome) não vai mais exibir o valor inicial e sim o valor acrescentado na função";

	//echo "O valor de A chamando a função é " . troca_valor($a) . ".<br> E o nome corre é: " . troca_valor($nome);

?>