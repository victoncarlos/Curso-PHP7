<?php

$conn = new mysqli("localhost","root","","dbphp7"); //indicar o servidor, endereço, ip, usuario e senha

	if ($conn->connect_error){// if para verificar a conexão com o banco.

		echo "Erro de conexão: " . $conn->connect_error;
	}else{

		echo "Conexão Estabelecida";
	}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?)");
//comando para insenir dados no banco de dados através dos códigos
$stmt->bind_param("ss",$login,$senha); 
//ss= cada 's' é uma string, 'user' inserido em deslogin e '123456' em dessenha
$login = "user";
$senha = "123456";
$stmt->execute();

$login = "rickvito";
$senha = "msouza123";
$stmt->execute(); //para adicionar novamente só bastar criar outros atributos e execuar o comando 'execute()'

?>