<?php
$conexao = mysqli_connect("localhost", "root", "", "banco_sw_atividade_php");
if (!$conexao) {
    echo "ERRO: Não foi possível conectar em seu banco de dados";
    exit;
}
