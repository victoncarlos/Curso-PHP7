<?php

class Endereco{//////////////////INÍCIO////////////////

	private $logradouro;
	private $numero;
	private $cidade;


	public function __construct($l, $n, $c){ //forma de fazer um construtor para vários parâmetros, ou seja não precisa fazer todos set e get

		$this->logradouro = $l;
		$this->numero = $n;
		$this->cidade = $c;
	}

	public function __destruct (){// apagar os dados da memória assim que terminar o acesso

		var_dump("DESTRUIR");

	}


	public function __toString(){

		return $this->logradouro.",".$this->numero.",".$this->cidade;//transforma todo conteúdo em uma string intera

	}


}/////////////////////FINAL////////////////////////////

$meuederenco = new Endereco("Parque da Ladeira Grande", "77", "Gandu-BA");
//print_r($meuederenco);

//unset($meuederenco);

echo $meuederenco; //o echo para ser executado precisa de uma string inteira


?>