 <button style="width:100px; height:40px; border: 1px solid rgb(179, 176, 176); border-radius: 5px; font-family: Arial, Helvetica, sans-serif; cursor: pointer; font-size: 15px;" class="botao-voltar" onclick="location.href='index.php'">Voltar</button>
 <br><br>

 <?php
    $nome = addslashes($_POST['nome']);
    $sobrenome = addslashes($_POST['sobrenome']);
    $cpf = addslashes($_POST['cpf']);
    $telefone = addslashes($_POST['telefone']);
    $cidade = addslashes($_POST['cidade']);

    include("conexao.php");

    $query = mysqli_query($conexao, "insert into cadpessoas (cpf, nome, sobrenome, telefone, cidade) values(" . $cpf . ",'" . $nome . "','" . $sobrenome . "'," . $telefone . ",'" . $cidade . "')");
    if (!$query) {
        echo 'ERRO AO CADASTRAR\nErro:' . mysqli_error($conexao) . "\n";
        exit;
    } else {
        echo "CADASTRDO COM SUCESSO!";
    }
    mysqli_close($conexao);
    ?>