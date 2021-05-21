<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root",""); // conexão com o banco

$conn->beginTransaction();// criando uma transação pelo método passado 'beginTransaction'

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 1;

$stmt ->bindParam(":ID",$id);
$stmt->execute(array($id));

//$conn->rollback();// Reverter as alterações
$conn->commit();//Confirmação das alterações







?>