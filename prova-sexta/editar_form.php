<html>
<head>
        <title> Editar</title>
        <link rel="stylesheet" type="text/css" href="estilos.css">
    </head>
    <body>
        
            <?php
            require("menu.php");
            ?>
            
        <form action="editar.php" method="post" >
            <label> Remover o codido da pessoa para remover</label>
            <br/>
            <input type="text"  name="id" /><br/>
            <br />
            <?php require_once("campo.php"); ?>
            
            <input type="submit"    value="Editar" class="editar" />

        </form>
    </body>
    
</html>

<?php

    session_start();
    if(isset($_SESSION["cadastros"])) {
        $cadastros = $_SESSION["cadastros"];
        
        foreach($cadastros as $id => $produtos) {
            if ($produtos != null) {
              echo "[$id] =>" . $produtos["nome"] .  "<br />"; 
                
            }
            
        }
    }
    else {
        echo "Nao existe pessoas cadastradas";
    }
?>
