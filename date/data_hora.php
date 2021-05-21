<?php

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese"); //1ª padrão - 2ª UTF - 3ª Padrão Windows
echo ucwords (strftime("%A %B"));//pesquisa no google php strfime e tem todas as funções de data OBS: não precisa da vergula para separar
// ucwords server para colocar as primeiras letra maiúscula 


echo "<br>";
echo date ("d/m/y H:i:s", );
//digite no google php date e tem todas as letras que podem usar na função date

echo "<br>";

echo time ();// pega os segundo desde a data 01/01/1970 - 
 
echo "<br>";

$data = strtotime("2010-06-31"); // strtotime pega a data e mostra os segundos( mostra )
// $data = strtotime("2010-06-31"); o comando strtotime aceita expressões EX:strtotime("now") = mostra o dia de hoje
																	  //  EX:strtotime("+1 day") = mostra o dia de amanhã		
																	  //  EX:strtotime("+1 week") = próxima segunda-feira					
echo "O resgistro dos segundos: " .  strtotime("2010-06-30");

echo "<br>";

echo date ("l,d,m,Y " , 1277848800)// converte os segundos no dia, mês, ano





?>