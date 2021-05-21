<?php

class Pessoa{////////////////INICIO CLASSE ////////////////

	public $nome = "Victon Carlos";
	protected $idade = 27;
	private $senha = "12345678";


	public function verDados() {

		echo $this->nome . "<br/>";
		echo $this->idade . "<br/>";
		echo $this->senha . "<br/>";
	}

}///////////////////FINAL CLASSE/////////////////////////

$objeto = new Pessoa;

//echo $objeto->nome;

$objeto->verDados();


?>