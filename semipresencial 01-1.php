<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>atividade1</title>
</head>
<body>
    <form method="POST">
        INFORME SEU PESO:
        <input type="number" name="peso"><br>
        INFORME SUA ALTURA:
        <input type="number" name="altura"><br>
        <select name="sexo">
            <option value="Masculino">MASCULINO</option>
            <option value="Feminino">FEMININO</option>
        </select>
        <input type="submit" name="enviar">
</form>
    <?php
    if(!isset($_POST["peso"])){
        die();
    }
    $peso = $_POST["peso"];
    $altura = $_POST["altura"]/100;
    $sexo = $_POST["sexo"];
    $imcger = $peso/($altura*$altura);

        $imc = (72.7*$altura)-58;
        if($sexo == "Masculino"){
            echo ("Peso ideal Homem: $imc<br>");
            echo ("Você está saudável<br>");
            echo ("O valor é acima de tudo um indicador, já que há aspectos
            relacionadas a distribuição de peso e massa muscular que também devem ser considerados.<br>");
        }else if ($imcger > 25){
            echo ("Seu peso está fora do IMC ideal<br>");
        }

        $imc2 = (62.1*$altura)-44.7;
        if($sexo == "Feminino"){
            
            echo ("Peso ideal Mulher: $imc2<br>");
            echo ("Você está saudável<br>");
            echo ("O valor é acima de tudo um indicador, já que há aspectos
            relacionadas a distribuição de peso e massa muscular que também devem ser considerados.<br>");
        }else  if ($imcger > 25){
            echo ("Seu peso está fora do IMC ideal<br>");
        }
       
    

    ?>
</body>
</html>