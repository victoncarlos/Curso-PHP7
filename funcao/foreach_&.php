<?php
	$pessoa = array ('nome' => 'Victon',
					'idade' => 30,
					'peso' =>100

	);
	echo "DADOS CLIENTE";
	echo "<br>";
	print_r($pessoa);
	echo "<br>";
	echo "Nome:" . $pessoa['nome'];
	echo "<br>";
	echo "Idade: " . $pessoa['idade'];
	echo "<br>";
	echo "Peso: " . $pessoa['peso'];
	echo "<br>";



	echo "DADOS INSERIDOS";
	echo "<br>";
		foreach ($pessoa as &$value) {
			if (gettype($value) === 'integer') {
				$value += 5;	
				echo $value . "<br>";	
			}
		}

    echo "<br>";
	echo "DADOS ATUALIZADOS";
	echo "<br>";
	print_r($pessoa);
	 echo "<br>";
	echo "Nome:" . $pessoa['nome'];
	echo "<br>";
	echo "Idade: " . $pessoa['idade'];
	echo "<br>";
	echo "Peso: " . $pessoa['peso'];


	
	
	// ao usar o & na frente o $value os valores dentro do array acrescenta aos valores antigo na memória

	


?>