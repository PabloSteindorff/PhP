<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>tarefa1</title>
</head>
<body>
    <form method="POST">
        <p>Número de entrada</p>
        <input type="number" name="n1">
        <p>Número de parada</p>
        <input type="number" name="n2">
        <input type="submit" name="enviar">
</form>
    <?php
     if(!isset($_POST["n1"])){
        die();
    }
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $g;
        echo("Resultado esperados: ");
    for($i = $n1; $i <= $n2; $i++){
        if($i%2==0){
            echo ("".$i++." , ");
            $g=$i/2;
        }
    }
    echo ("<br> Total de números pares no intervalo: ".$g-0.5);


    ?>
</body>
</html>