<?php

require_once ("config.php");


/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);//COMANDO Para selecionar tudo da tabela */
//////



/*$r = new Usuario();
$r -> loadById(2);// carrega somente um usúario
echo ($r);*/


/*$lista = Usuario::getList();//lista todos os usuarios
echo json_encode($lista);*/

/*$search = Usuario::search("c");// faz uma busca no banco por uma letra que tenha no login, detalhada no comando do select
echo json_encode($search);*/

//lista os dados usando o login e senha corretos
/*$usuario = new Usuario();
$usuario->login("rickvito","msouza123");
echo $usuario;*/


/*$aluno = new Usuario("VictonCarlos","Msouza123");//inserindo um novo usuário

$aluno->insert();

echo $aluno;*/

//up

$usuario = new Usuario();
$usuario->loadById(10);
$usuario->update("professor","!@#$%¨&");

echo $usuario;

?>