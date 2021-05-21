<?php

require_once ("config.php");

/*session_save_path(); local aonde os arquivos estão salvos
session_status();	status da session             */ 

echo session_save_path();
echo "<br>";
var_dump (session_status());

switch(session_status()) {

    case PHP_SESSION_DISABLED:
    echo "Sessões desabilitadas";
    echo "<br>";
    break;

    case PHP_SESSION_NONE:
    echo "Sessões habilitadas, mas não existem";
    echo "<br>";
    break;

    case PHP_SESSION_ACTIVE:
    echo "Sessões habilitadas e existem";
    echo "<br>";
    break;

}

?>