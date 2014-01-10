<?php

    require_once("menu.php");

    session_start();
    
    $id = $_REQUEST["id"];
    
    
    if(!isset($_SESSION["cadastros"])) {
      echo "Nao existe cadastros para remover";
    }
    else {
        $cadastros =& $_SESSION["cadastros"];
        $cadastros[$id] = null;
    }

    
    echo "Remocao efetuado com sucesso";
?>
