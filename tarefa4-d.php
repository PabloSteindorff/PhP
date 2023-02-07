<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>tarefa4</title>
</head>
<body>
    <form method="POST">
        <p>Informe um número</p>
        <input type="number" name="n">
        <input type="submit" name="enviar">
</form>
    <?php
     if(!isset($_POST["n"])){
        die();
    }
    $n = $_POST["n"];
    echo("Número de entrada: ");
    for($i = 1; $i <= $n; $i++){
        
       echo("".$i);
    }
    echo("<br>");
    echo("Resultado esperado: ");
    for($i = $n; $i >= 1; $i--){
        
        echo("".$i);
     }
    
    ?>
</body>
</html>