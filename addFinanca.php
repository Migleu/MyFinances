<?php
session_start();
require_once('conexao.php');


$meses = "SELECT * FROM meses";
$mes = mysqli_query($conn, $meses);

$sql = "SELECT * FROM categoria";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyFinances - Adicionar Transação</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Adicionar Transação
                            <a href="./" class="btn btn-danger float-end">Voltar</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="acoes.php" method="POST">
                            <input type="hidden" name="mes_id" value="<?php echo $mesId; ?>"> <!-- Passando o id do mês -->
                            <div class="mb-3">
                                <label for="nomeMes">Em qual mês vai adicionar a transação</label>
                                <select name="nomeMes" class="form-control">
                                    <?php while ($meses = mysqli_fetch_assoc($mes)): ?>
                                        <option value="<?php echo $meses['id']; ?>"><?php echo $meses['nome']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="tipoTransacao">Tipo de Transação</label>
                                <select name="tipoTransacao" class="form-control">
                                    <option value="0">Entrada</option>
                                    <option value="1">Saída</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="dataTransacao">Data da Transação</label>
                                <input type="date" name="dataTransacao" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="valorTransacao">Valor</label>
                                <input type="number" name="valorTransacao" class="form-control" step="0.01" required>
                            </div>
                            <div class="mb-3">
                                <label for="descricaoTransacao">Descrição</label>
                                <input type="text" name="descricaoTransacao" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="categoriaTransacao">Categoria</label>
                                <select name="categoriaTransacao" class="form-control">
                                    <?php while ($categoria = mysqli_fetch_assoc($result)): ?>
                                        <option value="<?php echo $categoria['id']; ?>"><?php echo $categoria['nome']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="add_transacao" class="btn btn-primary float-end">Adicionar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>