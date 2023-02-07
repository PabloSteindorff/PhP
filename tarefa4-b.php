<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>tarefa2</title>
</head>
<body>
    <form method="POST">
        <p>Número de parada do programa</p>
        <input type="number" name="parada">
        <input type="submit" name="enviar">
</form>
    <?php
     if(!isset($_POST["parada"])){
        die();
    }
    $parada = $_POST["parada"];
    for($i = 1; $i <= $parada; $i++){
        echo("".$i."pol --- ".$i*2.54."cm<br>");
    }
    
    ?>
</body>
</html>