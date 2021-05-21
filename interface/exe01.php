<?php

interface Veiculo{
	public function acelerrar($velocidade);
	public function freiar($velocidade);
	public function trocarmarcha($marcha);
}



class Civic implements Veiculo{/////////////INÍCIO///////////////

	public function acelerrar ($velocidade){

		echo "Velocidade atual: " . $velocidade . "Km/h <br>";

	}

	public function freiar ($velocidade){

		echo "Frenagem até " . $velocidade . "Km/h<br>";
	}


	public function trocarmarcha ($marcha){

		echo "Enagou a " . $marcha . "<br>";
	}


}////////////////FIM//////////////////////


$carro = new Civic();
$carro->trocarmarcha(5);
$carro->acelerrar(100);





?>