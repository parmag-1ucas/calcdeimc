<?php
$resposta = "";
        if (isset($_POST["peso"])){
            $h = $_POST["altura"];
            $peso = $_POST["peso"];
        if(!is_numeric($peso) || !is_numeric($h)){
            $resposta = "Por favor, insira apenas números.";
        }else{
            $imc = $peso / $h ** 2;

        if ($imc <= 16.9){
            $resposta = "Seu IMC é: " . number_format($imc, 1, ",", "") ."<br>" . "Você está muito abaixo do peso ideal.";
        }
        else if ($imc >= 17 && $imc <= 18.4){
            $resposta = "Seu IMC é: " . number_format($imc, 1, ",", "") . "<br>" . "Você está abaixo do peso ideal.";
        }
        else if ($imc >= 18.5 && $imc <= 24.9){
            $resposta = "Seu IMC é: " . number_format($imc, 1, ",", "") . "<br>" . "Você está no peso ideal.";
        }
        else if ($imc >= 25 && $imc <= 29.9){
            $resposta = "Seu IMC é: " . number_format($imc, 1, ",", "") . "<br>" . "Você está acima do peso ideal.";
        }
        else if ($imc >= 30 && $imc <= 34.9){
            $resposta = "Seu IMC é: " . number_format($imc, 1, ",", "") . "<br>" . "Você está com Obesidade grau 1.";
        }  
        else if ($imc >= 35 && $imc <= 39.9){
            $resposta = "Seu IMC é: " . number_format($imc, 1, ",", "") . "<br>" . "Você está com Obesidade grau 2.";
        }else{ 
            $resposta = "Seu IMC é: " . number_format($imc, 1, ",", "") . "<br>" . "Você está com Obesidade grau 3.";
            }
            
        }
        
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Calculadora de IMC</title>
   <link rel="stylesheet" type="text/css" href="style.css"/> 
   <link rel="shortcut icon" type="imagex/png" href="./icone.ico">
   <script>
        window.onload = function () {
            if (performance.navigation.type === 1) {
                window.location.href = window.location.href.split('?')[0];
            }
        };
    </script>
</head>
<body>
    <section class="calculadora">
        <br><h2>Calculadora de IMC</h2>
        <h1>(Índice de Massa Corporal)</h1><br>
        <form method="post" action="">
            <div id="form-container">
                <input type="text" name="peso" placeholder="Insira seu Peso" autocomplete="off" required><br>
                <input type="text" name="altura" placeholder="Insira sua Altura" autocomplete="off" required><br>
                <button type="submit">Calcular</button>
            </div>
            <p><?=$resposta?></p><br>
        </form>
    </section> 
</body>
</html>