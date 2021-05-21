<?php

class Carro {///////////////////////////////INICIO CLASSE //////////////////////////////////////

	private $modelo;
	private $motor;
	private $ano;

		public function getModelo(){ //pegar o valor do $modelo  'get'
									 //GET PEGA O VALOR  	
			return $this->modelo;
		} 
		public function setModelo($modelo){ // receber o valor de $modelo. Valor dentro do parametro pode ser ualquer um
											// ATRIBUI O VALOR DENTRO DE $this->
			$this->modelo = $modelo; //$this-> recebe o valor da variavel $modelo. são diferentes os dois
		}
		public function getMotor(){
			return $this -> motor;
		}
		public function setMotor ($motor){
			$this->motor = $motor;
		}
		public function getAno():int{
			return $this->ano;
		}
		public function setAno($ano){
			$this -> ano = $ano;
		}

		public function exibir(){//função exibiri irá todos valores de uma vez por um array

			return array ("modelo" => $this-> getModelo(),
						  "motor" => $this-> getMotor(), 
						  "ano" => $this-> getAno()
			             );

		}

}//////////////////////////// FIM CLASSE ///////////////////////////////////

	$corola = new Carro();
	$corola -> setModelo("AUTOMÁTICO"); //pelo fatod de uma variável privada, teremos que usar o set
	$corola -> setMotor("2.0");
	$corola -> setAno("2012");
	print_r($corola -> exibir()); //usar o print_r pois é um array


	



?>