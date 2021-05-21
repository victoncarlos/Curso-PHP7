<?php

class Documento {

    private $numero;

    public function getNumero(){

        return "CPF:" . $this->numero;

    }

    public function setNumero($numero){


        $this->numero = $numero;

    }

  

}

//Duas formas

//Primeira

$cpf = new Documento();
$cpf->setNumero("87867147241");

echo ($cpf->getNumero());



//Segunda
//var_dump(Documento::validarCPF("87867147241"));

?>