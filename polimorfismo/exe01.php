<?php

abstract class Animal{///////////////////////////////

	public function falar(){

		return "SOM: ";

	}

	public function mover(){

		return "Anda: ";

	}
}/////////////////////////////


class Cachorro extends Animal {////////////////////////
// o metodo polimorfismo é mudar o comportamento do metódo
	public function falar(){

		return "O cachorro Late";

	}

}//////////////////////////////


class Gato extends Animal {/////////////////////////////////////

	public function falar (){

		return "O Gato mia";
	}


}////////////////////////////////////////////////

class Passaro extends Animal {///////////////////////////////

	public function mover (){

		return "O passaro consegue VOAR e " . parent::mover();// comando para pegar o metódo original da classe raiz
	}

}//////////////////////////////////////////////


$tita = new Cachorro();
echo $tita ->falar() . " e " ;
echo $tita ->mover(). " <br>";

echo "------------------------- <br>";

$tito = new Gato();
echo $tito ->falar() . " e ";
echo $tito ->mover(). " <br>";
echo "------------------------- <br>";

$tucano = new Passaro();
echo $tucano ->mover();


?>