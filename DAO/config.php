<?php

spl_autoload_register(function($class_name){

$filename = "class" . DIRECTORY_SEPARATOR . $class_name . ".php";// mostra o caminho para procurar o

if (file_exists(($filename))){// condição pare verificar se o arquivo existe, caso exita ele faz a conexão através do require_once
	require_once($filename);
}


});


?>