<?php

 spl_autoload_registe(function($nomeClasse){

	var_dump($nomeClasse);

	require_once("$nomeClasse.php");

}

$carro = new DelRey();

$carro->acelerar(70);

?>