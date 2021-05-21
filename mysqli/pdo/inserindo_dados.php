<?php
$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root",""); // conexão com o banco

$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin,dessenha) VALUES(:LOGIN, :PASSWORD) ");

$login = "rickvito";
$password = "msouza123";

$stmt ->bindParam(":LOGIN",$login);//ligar os parâmetros passados a címa 
$stmt ->bindParam(":PASSWORD",$password);

$stmt->execute();






?>