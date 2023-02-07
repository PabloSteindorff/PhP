<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>tarefa3</title>
</head>
<body>
    <form method="POST">
        <p>Informe um número de 2 a 15</p>
        <input type="number" name="n">
        <input type="submit" name="enviar">
</form>
    <?php
     if(!isset($_POST["n"])){
        die();
    }
    $n = $_POST["n"];
    $j=1;
    if($n >=2 AND $n <=15){
    for($i= 1; $i <= $n; $i++){
        for($y=1;$y<=$j;$y++){
            echo "$y";
        }
        echo "<br>";
        ++$j;
        
    }
}
   
    ?>
</body>
</html>