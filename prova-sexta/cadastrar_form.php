<html>
    <head>
        <link rel="stylesheet" type="text/css" href="estilos.css">
        <title> Cadastro</title>
    </head>
    <body>
        
            <?php
            require_once("menu.php");
            
            ?>
            
        <form action="cadastrar.php" method="post" >
            <?php require_once("campo.php"); ?>
            
            <br/>
            
            <input type="submit" value="Enviar" class="enviar"/>
            
        </form>
    </body>
    
</html>
