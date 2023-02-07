<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>atividade1</title>
</head>
<body>
    <form method="POST">
        SELECIONE UM NÚMERO DE 1 A 10<br>
        <select name="numeros">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        </select>
        <input type="submit" name="enviar">
</form>
    <?php
    if(!isset($_POST["numeros"])){
        die();
    }
    $numeros = $_POST["numeros"];
    for($i=1; $i <= $numeros; $i ++){
        echo ("<img src='https://i.pinimg.com/564x/85/db/23/85db232a0e2f4d7ec93db9bcedeb97d8.jpg' alt='star' width='50px'>");
    }

    ?>
</body>
</html>