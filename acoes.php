<?php
session_start();
require_once('conexao.php');

if (isset($_POST['add_mes'])) {

    $codigoMes = trim($_POST['txtNome']);
    if ($codigoMes == 0) {
        $nome = "Janeiro";
    } else if ($codigoMes == 1) {
        $nome = "Fevereiro";
    } else if ($codigoMes == 2) {
        $nome = "Março";
    } else if ($codigoMes == 3) {
        $nome = "Abril";
    } else if ($codigoMes == 4) {
        $nome = "Maio";
    } else if ($codigoMes == 5) {
        $nome = "Junho";
    } else if ($codigoMes == 6) {
         $nome = "Julho";
    } else if ($codigoMes == 7) {
        $nome = "Agosto";
    } else if ($codigoMes == 8) {
        $nome = "Setembro";
    } else if ($codigoMes == 9) {
        $nome = "Outubro";
    } else if ($codigoMes == 10) {
        $nome = "Novembro";
    } else if ($codigoMes ==11) {
        $nome = "Dezembro";
    }

    $ano = trim($_POST['anoMes']);
    $sql = "INSERT INTO meses (nome, ano, codigoMes) VALUES('$nome', '$ano', '$codigoMes')";

    mysqli_query($conn, $sql);

    header('Location: index.php');
    exit();
}
if (isset($_POST['edit_mes'])) {
    $mesId = mysqli_real_escape_string($conn, $_POST['mes_id']);
    $codigoMes = trim($_POST['txtNome']);
    if ($codigoMes == 0) {
        $nome = "Janeiro";
    } else if ($codigoMes == 1) {
        $nome = "Fevereiro";
    } else if ($codigoMes == 2) {
        $nome = "Março";
    } else if ($codigoMes == 3) {
        $nome = "Abril";
    } else if ($codigoMes == 4) {
        $nome = "Maio";
    } else if ($codigoMes == 5) {
        $nome = "Junho";
    } else if ($codigoMes == 6) {
         $nome = "Julho";
    } else if ($codigoMes == 7) {
        $nome = "Agosto";
    } else if ($codigoMes == 8) {
        $nome = "Setembro";
    } else if ($codigoMes == 9) {
        $nome = "Outubro";
    } else if ($codigoMes == 10) {
        $nome = "Novembro";
    } else if ($codigoMes ==11) {
        $nome = "Dezembro";
    }
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
    $mes = trim($_POST['nomeMes']);
    $data = trim($_POST['dataTransacao']);
    $tipo = trim($_POST['tipoTransacao']);
    $descricao = trim($_POST['descricaoTransacao']);
    $valor = trim($_POST['valorTransacao']);
    $categoria = trim($_POST['categoriaTransacao']);

    $sql = "INSERT INTO transacao (data_transacao, tipo, descricao, valor, categoria_movimentacao, id_mes) VALUES('$data', '$tipo', '$descricao', '$valor', '$categoria', '$mes')";

    mysqli_query($conn, $sql);

    header('Location: index.php');
    exit();
}
if (isset($_POST['delete_transacao'])) {
    $transacaoId = mysqli_real_escape_string($conn, $_POST['delete_transacao']);
    $sql = "DELETE FROM transacao WHERE id = '$transacaoId'";

    mysqli_query($conn, $sql);


    header('Location: index.php');
    exit;
}

if (isset($_POST['add_categoria'])) {
    $nome = trim($_POST['nomeCategoria']);
    $descricao = trim($_POST['descricaoCategoria']);

    $sql = "INSERT INTO categoria (nome, descricao) VALUES('$nome', '$descricao')";

    mysqli_query($conn, $sql);

    header('Location: index.php');
    exit();
}