<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>

    <header>Formulário de Inscrição de Competidores</header>

    <section>
        <form action="script.php" method="post">
        <?php
           echo $mensagemDeErro = isset($_SESSION['mensagem']) ? $_SESSION['mensagem']:'';
        ?>

                <label>Seu nome:  <input type="text" name="nome" /><br/>
                <label>Sua idade: <input type="text" name="idade" /><br/>
                <input type="submit"/>
        </form>
    </section>
    
</body>
</html>