<html>
    <head>
        <title> Remover</title>
        <link rel="stylesheet" type="text/css" href="estilos.css">
    </head>
    <body>
        
            <?php
            require("menu.php");
            ?>
            
        <form action="remover.php" method="post" >
            <label> Remover o codigo da pessoa</label>
            <br/>
            <input type="text"  name="id" />
            <input type="submit"    value="Remover" />

        </form>
    </body>
    
</html>

<?php

    session_start();
    if(isset($_SESSION["cadastros"])) {
        $cadastros = $_SESSION["cadastros"];
        
        foreach($cadastros as $id => $produtos) {
            if ($produtos != null) {
              echo "[$id] => " . $produtos["nome"] .  "<br />"; 
                
            }
            
        }
    }
    else {
        echo "Nao existe pessoas cadastradas";
    }
?>
