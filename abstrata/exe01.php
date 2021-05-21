<?php
interface Veiculo{
	public function acelerrar($velocidade);
	public function freiar($velocidade);
	public function trocarmarcha($marcha);
}



abstract class Automovel implements Veiculo{/////////////INÍCIO///////////////

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


class DelRey extends Automovel{///////////////ÍNÍCIO///////////////

	public function empurrar (){


	}

}///////////////FIM//////////////////


$carro = new DelRey();
$carro->acelerrar(200);




?>