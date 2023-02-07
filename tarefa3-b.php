<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>atividade2</title>
    </head>
    <body>
        <form method="POST">
            <p>INFORME UM NUMERO</p>
            <input type="number" name="numero">
            <input type="submit" name="enviar">
        </form>
        <?php
        if(isset($_POST["numero"])){
            $num = $_POST["numero"];
            if($num % 3 == 0){
                echo ("É múltiplo de 3");
            }else{
                echo ("Não é múltiplo de 3");
            }
        }
        ?>
      
    </body>

</html>