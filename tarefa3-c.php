<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>atividade3</title>
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
       
                if($num == 5 or $num == 200 or $num == 400 or $num ==1000){
        
                    echo(" SEU NÚMERO È IGUAL A: $num");
                }elseif($num > 500 and $num < 1000 ){
                    echo("SEU NUMERO É MAIOR QUE 500 E MENOR QUE 1000 ");
                    
                }
                else{
                    echo("Não satisfaz nenhuma das condições anteriores");
                }
            }
        ?>
      
    </body>

</html>