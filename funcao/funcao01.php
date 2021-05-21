<?php

function ola($nome, $idade,$sexo,$peso = "100kg"){ //passando funções por parâmetros  - acrecestamos o nome ou fixamos function ola 																($nome ="VICTON CARLOS")  
									              // podendo passar vários parâmetros	
												  // parâmetros que precisam receber um valor sempre a esquerda
	return "Sr. $nome ,$idade anos, Sexo: $sexo, $peso <br>";

}

echo ola("Victon Carlos","27","Masculino");
echo ola ("Vickson Carlos" ,"55","Masculino" );
echo ola ("Rickson Carlos" ,"34","Masculino" );
?>