<?php

class Documento {

    private $numero;

    public function getNumero(){

        return $this->numero;

    }

    public function setNumero($numero){

        

        

        $this->numero = $numero;

    }

  

}

//Duas formas

//Primeira

$cpf = new Documento();
$cpf->setNumero("87867147241");

var_dump($cpf->getNumero());



//Segunda
//var_dump(Documento::validarCPF("87867147241"));

?>