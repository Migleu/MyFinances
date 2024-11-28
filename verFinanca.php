<?php
session_start();
require_once("conexao.php");

$mes = $_GET['id'];

// Modifique a consulta para incluir a categoria
$sql = "SELECT t.*, c.nome AS categoria_nome FROM transacao t
        JOIN categoria c ON t.categoria_movimentacao = c.id
        WHERE t.id_mes = {$mes}";
$transacao = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Css/inicio.css">
    <link rel="stylesheet" href="./NavBar/style.css">
    <link rel="shortcut icon" href="./Icons/calcLogo.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>MyFinances - Minhas Finanças</title>
</head>
<body>
    <?php require_once('./NavBar/navbar.php'); ?>
    <div class="container">
        <div class="title">
            <a href="./index.php"><i class="bi bi-caret-left-fill"></i></a>
            <h2>Suas transações deste mês</h2>
            <p><a href="./addFinanca.php?id=<?php echo $mes; ?>" class="btnAdd">Transação +</a></p>
        </div>
        <div class="mesesTable">
            <table class="table">
                <thead>
                    <tr>
                        <th>Data da Transação</th>
                        <th>Valor</th>
                        <th>Descrição</th>
                        <th>Categoria</th> <!-- Adiciona o cabeçalho para Categoria -->
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($transacao as $finance): ?>
                        <tr>
                            <td><?php echo date('d/m/Y', strtotime($finance['data_transacao'])); ?></td>
                            <td><?=$finance['valor']; ?></td>
                            <td><?=$finance['descricao']; ?></td>
                            <td><?=$finance['categoria_nome']; ?></td> <!-- Exibe o nome da categoria -->
                            <td class="acoes">
                                <form action="acoes.php" method="POST" class="d-inline">
                                    <button onclick="return confirm('Tem certeza que deseja excluir?')" name="delete_transacao" type="submit" value="<?=$finance['id']?>" id="deleteMes"><i class="bi bi-trash-fill"></i></button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>