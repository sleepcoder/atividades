<?php   

require_once("menu.php");

    session_start();
    if(isset($_SESSION["cadastros"])) {
        $cadastros = $_SESSION["cadastros"];
        
        echo "<dl>";
        
        foreach($cadastros as $produtos) {
            if($produtos != null) {
                $nome = $produtos["nome"];
                $cor = $produtos["cor"];
                $novo = $produtos["novo"];
                $prazo = $produtos["prazo"];
                $detalhes = $produtos["detalhes"];
                
                
                echo "<dt class='$cor'>" . $produtos["nome"] . "</dt>";
                echo "<dd>Prazo:" . $prazo . "</dd>";
                echo "<dd>Cor:" . $cor . "</dd>";
                echo "<dd>Detalhes do Prodruto:" . $detalhes .  "</dd>";
                echo "<dd> Produto Novo:";
                
                
                if($novo){
                    echo "sim";
                    
                }
                else {
                    echo "Nao";
                }
                echo "</dd>";
            }
            
        }
        echo "</dl>";
    }
    else {
        echo "Nao existe pessoas cadastradas";
    }
?>
    
