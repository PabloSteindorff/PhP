<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>atividade1</title>
    </head>
    <body>
        <h1>Calcula valor total de venda</h1>
        <form method="POST">
            <p>VALOR UNITARIO</p>
            <input type="number" name="valorunit">
            <p>QUANTIDADE VENDIDA</p>
            <input type="number" name="quantvend">
            <input type="submit" name="enviar">
        </form> 
     
        <div style="font-size: 20px;"> 
        <?php
        if(!isset($_POST["valorunit"])){
            die();
        }
        echo ("VALOR TOTAL DE VENDAS<br>");
            $valor = $_POST["valorunit"];
            $quantidade = $_POST["quantvend"];
    
            echo ("R$:").$valor*$quantidade;
            if(($valor*$quantidade) > 1000){
                echo ('<div style="color:red;"><br><br>Bonificação de 10% para o vendedor!</div');
            }
            
        ?>
        </div>
    </body>

</html>