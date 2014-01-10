<?php

    require_once("menu.php");

    session_start();
    
    $id = $_REQUEST["id"];
    $novoNome = $_REQUEST["nome"];
    $cor = $_REQUEST["cor"];
    $prazo = $_REQUEST["prazo"];
    $detalhes = $_REQUEST["detalhes"];
    $novo = $_REQUEST["novo"];


    
    if(!isset($_SESSION["cadastros"])) {
      echo "Nao existe cadastros para edicao";
    }
    else {
        $cadastros =& $_SESSION["cadastros"];
        
        $produtos = array ("nome" => $novoNome, "cor" => $cor, "novo" => $novo, "prazo" => $prazo, "detalhes" => $detalhes);
        
        $cadastros[$id] = $produtos;
    }

    
    echo "Edicao efeituado com sucesso";
?>
