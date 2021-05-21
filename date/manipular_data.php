<?php

$dt = new DateTime();// DateTime Comando no PHP
$periodo = new DateInterval ("P15D");//DateInterval comando no PHP

echo $dt -> format ("d/m/Y H:i:s");
echo "<br>";


$dt -> add($periodo);// add comando para adicionar 

echo "Data adicionada no objeto Date Interval: " .  $dt -> format ("d/m/Y") . " - 15 dias adicionado";
echo "<br>";



?>