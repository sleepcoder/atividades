<?php
    
    require_once("menu.php");
    
    session_start();
    
    $nome = $_REQUEST["nome"];
    $cor = $_REQUEST["cor"];
    $prazo = $_REQUEST["prazo"];
    $detalhes = $_REQUEST["detalhes"];
    
    
    $novo = false;
    if(isset($_REQUEST["novo"])){
    $novo = true;
        
    }
    if(!isset($_SESSION["cadastros"])) {
        $_SESSION["cadastros"] = array();
    }
    $produtos = array ("nome" => $nome, "novo" => $novo, "cor" => $cor , "prazo" => $prazo, "detalhes" => $detalhes);
    
    array_push($_SESSION["cadastros"], $produtos);
    
    echo "Cadastro efeituado com sucesso";


?>

    
