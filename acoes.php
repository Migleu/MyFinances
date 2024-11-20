<?php
session_start();
require_once('conexao.php');

if (isset($_POST['add_mes'])) {
    $nome = trim($_POST['txtNome']);
    $ano = trim($_POST['anoMes']);

    $sql = "INSERT INTO meses (nome, ano) VALUES('$nome', '$ano')";

    mysqli_query($conn, $sql);

    header('Location: index.php');
    exit();
}
if (isset($_POST['edit_mes'])) {
    $mesId = mysqli_real_escape_string($conn, $_POST['mes_id']);
    $nome = mysqli_real_escape_string($conn, $_POST['txtNome']);
    $ano = mysqli_real_escape_string($conn, $_POST['anoMes']);

    $sql = "UPDATE meses SET nome = '{$nome}', ano = '{$ano}'";

    $sql .= " WHERE id = '{$mesId}'";

    mysqli_query($conn, $sql);


    header("Location: index.php");
    exit;
}
if (isset($_POST['delete_mes'])) {
    $mesId = mysqli_real_escape_string($conn, $_POST['delete_mes']);
    $sql = "DELETE FROM meses WHERE id = '$mesId'";

    mysqli_query($conn, $sql);


    header('Location: index.php');
    exit;
}

if (isset($_POST['add_transacao'])) {
    $data = trim($_POST['dataTransacao']);
    $tipo = trim($_POST['tipoTransacao']);
    $descricao = trim($_POST['descricaoTransacao']);
    $valor = trim($_POST['valorTransacao']);
    $categoria = trim($_POST['categoriaTransacao']);

    $sql = "INSERT INTO transacao (data_transacao, tipo, descricao, valor, categoria_movimentacao) VALUES('$data', '$tipo', '$descricao', '$valor', '$categoria')";

    mysqli_query($conn, $sql);

    header('Location: verFinanca.php');
    exit();
}
if (isset($_POST['delete_transacao'])) {
    $transacaoId = mysqli_real_escape_string($conn, $_POST['delete_transacao']);
    $sql = "DELETE FROM transacao WHERE id = '$transacaoId'";

    mysqli_query($conn, $sql);


    header('Location: verFinanca.php');
    exit;
}
