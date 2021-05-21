<?php

class Pessoa{////////////////INICIO CLASSE ////////////////

	public $nome = "Victon Carlos";
	protected $idade = 27;
	private $senha = "12345678";

	public function verDados() {
		echo "CLASSE:" .  get_class($this) . "<br>";// Mostra de qual classe está vindo os dados

		echo $this->nome . "<br/>";
		echo $this->idade . "<br/>";
		echo $this->senha . "<br/>";
		echo "<br>";
	}
}///////////////////FINAL CLASSE/////////////////////////

class Programador extends Pessoa {/////////////INÍCIO CLASSE////////////////
// A CLASSE PROGRAMADOR PEGA TUDO TEM NA CLASSE PESSOA, MENOS O QUE FOR
	public function verDados() {
		echo "CLASSE: " . get_class($this) . "<br>";// Mostra de qual classe está vindo os dados

		echo $this->nome . "<br/>";
		echo $this->idade . "<br/>";
		echo $this->senha . "<br/>";
		echo "<br>";
	}
}////////////FINAL CLASSE//////////////////

$objeto = new Pessoa;
$objeto->verDados();

$objeto2 = new Programador;
$objeto2->verDados();


?>