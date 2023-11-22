<?php

if (isset($_POST['submit'])) {

    // print_r($_POST['nome']);

    // print_r($_POST['email']);

    // print_r($_POST['mensagem']);

    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    $result = mysqli_query($conn, "INSERT INTO usuarios(nome,email,mensagem) VALUES ('$nome','$email','$mensagem')");

}

?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulário</title>
</head>

<body>
    <main>
        <div class="segura-fomrulario">

            <form action="formulario.php" method="POST">
                <div>
                    <label for="name">Nome:</label>
                    <input type="text" name="nome" id="name" class="name" required />
                </div>
                <div>
                    <label for="email">E-mail:</label>
                    <input type="email" name="email" id="email" class="email" required />
                </div>
                <div>
                    <label for="mensagem">Mensagem:</label>
                    <textarea id="mensagem" name="mensagem" class="mensagem" required></textarea>
                </div>
                <div class="button">
                    <input type="submit" name="submit" value="Enviar Mensagem">
                </div>
            </form>

        </div>



    </main>

</body>

</html>