<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscrição</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<section class="sectionForm">
    <div class="center card">
        <div class="container">
            <div class="titulo">
                <h3>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</h3>
            </div>
            <div class="formulario">
                <form action="./php/script.php" method="post">
                <?php
                $mensagemDeErro = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro'] : '';
                if(!empty($mensagemDeErro)){
                    echo $mensagemDeErro;
                }
                ?>
                    <div class="divNome">
                    <label for="nome">Seu nome:</label>
                    <input type="text" name="nome">
                    </div>
                    <div class="divIdade">
                    <label for="idade">Sua idade:</label>
                    <input type="number" name="idade">
                    </div>
                    <input type="submit" class="btnEnviar">
                </form>
            </div>
        </div>
    </div>
</section>
</body>
</html>