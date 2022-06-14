<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Cadastro de usuários</title>
</head>

<body>

    <section class="content">
        <div class="cadastro">
            <h3 class="titulo">Cadastro de pessoas</h3>
            <form class="form" method="post" action="cadastro.php">

                <input class="input" type="text" name="nome" placeholder="Nome">
                <input class="input" type="text" name="sobrenome" placeholder="Sobrenome">
                <input class="input" type="number" name="cpf" placeholder="CPF">
                <input class="input" type="number" name="telefone" placeholder="Telefone">
                <input class="input" type="text" name="cidade" placeholder="Cidade">
                <input class="input" type="submit">
            </form>
        </div>
    </section>

    <div class="dados-banco">
        <h3>CADASTROS NO BANCO DE DADOS</h3>
        <div class="listagem">
            <a class="nome"><Strong>Nome</Strong></a>
            <a class="sobrenome"><Strong>Sobrenome</Strong></a>
            <a class="cpf"><Strong>CPF</Strong></a>
            <a class="telefone"><Strong>Telefone</Strong></a>
            <a class="cidade"><Strong>Cidade</Strong></a>
        </div>
        <?php include('listagem.php') ?>
    </div>
</body>

</html>
<?php
mysqli_close($conexao);
?>