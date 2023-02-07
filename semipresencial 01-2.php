<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>atividade1</title>
</head>
<body>
    <form method="POST">
        NOME:
        <input type="text" name="nome"><br>
        ENDEREÇO:
        <input type="text" name="endereco"><br>
        GÊNERO:
        <select name="sexo">
            <option value="Masculino">MASCULINO</option>
            <option value="Feminino">FEMININO</option>
        </select><br>
        DATA DE NASCIMENTO:
        <input type="date" name="data"><br>
        <label for="Academia">Academia</label>
        <input type="checkbox" value="1" name="n"><br>
        <label for="Dança">Dança</label>
        <input type="checkbox" value="2" name="n"><br>
        <label for="Natação">Natação</label>
        <input type="checkbox" value="3" name="n"><br>
        <label for="Hidroginástica">Hidroginástica</label>
        <input type="checkbox" value="4" name="n"><br>
        <label for="Judô">Judô</label>
        <input type="checkbox" value="5" name="n"><br>
        <input type="submit" name="enviar">
</form>
    <?php
    if(!isset($_POST["nome"])){
        die();
    }
    $data = $_POST["data"];
    $hoje = date('Y');
    $nome = $_POST["nome"];
    $idade = $hoje-$data;
    $vetor = [
        1 => "Academia",
        2 => "Dança",
        3 => "Natação",
        4 => "Hidroginástica",
        5 => "Judô",
    ];

    if ($idade < 16 and $vetor==[1])

    ?>
</body>
</html>