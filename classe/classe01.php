<?php

//////////////////////////////// INÍCIO CLASSE /////////////////////////////////////
class NovaClasse {

	public $nome;// criação de atributo
	public $idade; // criação de atributo 
	
			public function falar() {// fuction é um método // dentro do método se escreve $this-> e o nome do atributo
				return "Meu nome é: ".$this->nome . "<br>" . "Minha idade é: ".$this->idade;
				
			}
}//////////////////////////////  FIM CLASSE ////////////////////////////////////////

$victon = new NovaClasse();
$victon -> nome = "Victon Carlos";
$victon -> idade = 27;
echo $victon -> falar();



?>