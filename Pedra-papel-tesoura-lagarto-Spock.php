<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Pedra-papel-tesoura-lagarto-Spock</title>
    </head>
    <body>
        <form method="POST">
        <img src="https://andreciobezerra.github.io/jokenpo/images/rock.png" alt="pedra">
        <label for="1">Pedra</label>
        <input type="radio" value="1" name="p" id="1">
        <img src="https://andreciobezerra.github.io/jokenpo/images/paper.png" alt="papel">
        <label for="2">Papel</label>
        <input type="radio" value="2" name="p" id="2">
        <img src="https://andreciobezerra.github.io/jokenpo/images/scissors.png" alt="tesoura" >
        <label for="3">Tesoura</label>
        <input type="radio" value="3" name="p" id="3">
        <img src="https://apprecs.org/gp/images/app-icons/300/20/cc.spock.ui.jpg" alt="spock" height="175" width="175">
        <label for="4">Spock</label>
        <input type="radio" value="4" name="p" id="4">
        <img src="https://images.emojiterra.com/google/noto-emoji/v2.034/128px/1f98e.png" alt="lagarto" height="175" width="175">
        <label for="5">Lag</label>
        <input type="radio" value="5" name="p" id="5"><br>
        <br><div style="text-align: center;"><input type="submit" name="enviar"></div>
        </form>

        <?php
        if(!isset($_POST["p"])){
            die();
        }
           $j1= $_POST["p"];
           $j2= rand(1,5);
           
           if ($j1 == $j2) {
            echo "<br>Empate!";
        }
        elseif ($j1 == 1){
            if($j2 == 2){
                echo "Derrota!";
                echo "<br> Papel cobre a pedra";
            }
            elseif($j2 == 3){
                echo "Vitoria!";
                echo "<br> Pedra quebra a tesoura.";
            }
            elseif($j2 == 4){
                echo "Derrota!";
                echo "<br> Spock vaporizou pedra.";
            }
            elseif($j2 == 5){
                echo "Vitoria!";
                echo "<br> A pedra esmaga o lagarto. ";
            }
        }

        elseif ($j1 == 2){
            if($j2 == 1){
                echo "Vitoria!";
                echo "<br> Papel cobre a pedra";
            }
            elseif($j2 == 3){
                echo "Derrota!";
                echo "<br> A tesoura corta papel.";
            }
            elseif($j2 == 4){
                echo "Vitoria!";
                echo "<br> Papel refuta o Spock.";
            }
            elseif($j2 == 5){
                echo "Derrota!";
                echo "<br> O lagarto come o papel. ";
            }
        }
        elseif ($j1 == 3){
            if($j2 == 1){
                echo "Derrota!";
                echo "<br> A pedra quebra a tesoura";
            }
            elseif($j2 == 2){
                echo "Vitoria!";
                echo "<br> A tesoura corta o papel.";
            }
            elseif($j2 == 4){
                echo "Derrota!";
                echo "<br> O Spock quebra a tesoura.";
            }
            elseif($j2 == 5){
                echo "Vitoria!";
                echo "<br> A tesoura mata o lagarto. ";
            }
        }
        elseif ($j1 == 4){
            if($j2 == 1){
                echo "Vitoria!";
                echo "<br> Spock vaporizou pedra.";
            }
            elseif($j2 == 2){
                echo "Derrota!";
                echo "<br> O papel refuta o Spock.";
            }
            elseif($j2 == 3){
                echo "Vitoria!!";
                echo "<br> Spock quebra a tesoura.";
            }
            elseif($j2 == 5){
                echo "Derrota!";
                echo "<br> O lagarto evenena o Spock. ";
            }
        }
        elseif ($j1 == 5){
            if($j2 == 1){
                echo "Derrota!";
                echo "<br> Pedra esmaga lagarto.";
            }
            elseif($j2 == 2){
                echo "Vitoria!";
                echo "<br> Lagarto come papel.";
            }
            elseif($j2 == 3){
                echo "Derrota!";
                echo "<br> Tesoura mata lagarto.";
            }
            elseif($j2 == 4){
                echo "Vitoria!";
                echo "<br> O lagarto envenena o Spock. ";
            }
        }
        ?>
      
    </body>

</html>