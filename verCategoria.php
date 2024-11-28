<?php
session_start();
require_once("conexao.php");

// Consulta para buscar as categorias
$sql = "SELECT * FROM categoria";
$result = mysqli_query($conn, $sql);
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
    <title>MyFinances - Categorias</title>
</head>
<body>
    <?php require_once('./NavBar/navbar.php'); ?>
    <div class="container">
        <div class="title">
            <h2>Categorias Criadas</h2>
            <p><a href="./addCategoria.php" class="btnAdd">Adicionar Categoria +</a></p>
        </div>
        <div class="categoriasTable">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome da Categoria</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($categoria = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><?php echo $categoria['id']; ?></td>
                            <td><?php echo $categoria['nome']; ?></td>

                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>