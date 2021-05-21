<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root",""); // conexão com o banco

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "celmodas";
$password = "cel123";
$id = 3;


$stmt ->bindParam(":LOGIN",$login);//ligar os parâmetros passados a címa 
$stmt ->bindParam(":PASSWORD",$password);
$stmt ->bindParam(":ID",$id);
$stmt->execute();


$login = "rickson";
$password = "rickson123";
$id = 4;

$stmt ->bindParam(":LOGIN",$login);//ligar os parâmetros passados a címa 
$stmt ->bindParam(":PASSWORD",$password);
$stmt ->bindParam(":ID",$id);
$stmt->execute();

$login = "anasofia";
$password = "ana123";
$id = 5;

$stmt ->bindParam(":LOGIN",$login);//ligar os parâmetros passados a címa 
$stmt ->bindParam(":PASSWORD",$password);
$stmt ->bindParam(":ID",$id);
$stmt->execute();

$login = "vick";
$password = "poca urna";
$id = 6;



$stmt ->bindParam(":LOGIN",$login);//ligar os parâmetros passados a címa 
$stmt ->bindParam(":PASSWORD",$password);
$stmt ->bindParam(":ID",$id);
$stmt->execute();




?>