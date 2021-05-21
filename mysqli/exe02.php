<?php

$conn = new mysqli("localhost","root","","dbphp7"); //indicar o servidor, endereço, ip, usuario e senha

	if ($conn->connect_error){// if para verificar a conexão com o banco.

		echo "Erro de conexão: " . $conn->connect_error;
	}/*else{

		echo "Conexão Estabelecida";
	}*/

$resultado = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");
// comando para fazer uma consulta no banco 'query'

$data = array();//$data é um array sem valor até o momento/

while ($row = $resultado->fetch_array(MYSQLI_ASSOC)){//comando para verificar se existe algum dado na variavel e joga denro de uma variável qualquer//MYSQLI_ASSOC ou usar só o fetch_assoc mostra só os nomes e não os indices juntos


array_push($data,$row);
//array_push atribui todos os valores dentro de um novo array... Sendo que o valor de $data foi atribuido 


}

echo json_encode($data);
// colocar os valores de um array dentro de outro array e mostra na tela, geralmente comando passado aos programadores HTML, CSS



?>