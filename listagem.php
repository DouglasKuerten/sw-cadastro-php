<?php
include("conexao.php");

$query = mysqli_query($conexao, "select * from cadpessoas order by nome");
if (!$query) {
    echo 'ERRO AO CONSULTAR' . mysqli_error($conexao) . "\n";
    exit;
}

while ($row = mysqli_fetch_assoc($query)) {
    $nome = $row['nome'];
    $sobrenome = $row['sobrenome'];
    $cpf = $row['cpf'];
    $telefone = $row['telefone'];
    $cidade = $row['cidade'];
?>
    <div class="listagem">
        <a class="nome"><?= $nome ?></a>
        <a class="sobrenome"><?= $sobrenome ?></a>
        <a class="cpf"><?= $cpf ?></a>
        <a class="telefone"><?= $telefone ?></a>
        <a class="cidade"><?= $cidade ?></a>
    </div>
<?php
}
?>