<?php

class Documento{///////////INÍCIO///////////////

	private $numero;

	public function getNumero(){

		return $this->numero;
	}

	public function setNumero($n){

		$this->numero = $n;

	}

}//////////////FIM////////////////////////


class CPF extends Documento{////////////////INÍCIO///////////////////


	public function validarCPf(){
		//validar CPF
		return true;
	}
}//////////////////FIM////////////////////////////


$doc = new CPF();
$doc-> setNumero("01764485513"); // Set atribui o valor ao CPF
var_dump($doc-> validarCPf());// retorna o valor dentro da função validarCPF

echo $doc->getNumero();//Get pega o numero



?>