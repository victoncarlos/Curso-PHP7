<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root",""); // conexão com o banco

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 7;

$stmt ->bindParam(":ID",$id);
$stmt->execute();

$id = 8;

$stmt ->bindParam(":ID",$id);
$stmt->execute();

$id = 9;

$stmt ->bindParam(":ID",$id);
$stmt->execute();











?>