<?php

function salario(){

	return 1050.00;
}


echo "José recebeu 3 salários R$: ". number_format(((salario()*3)),2,",","."); 
?>