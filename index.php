<?php
session_start();
require_once("conexao.php");

$sql = "SELECT * FROM meses";
$meses = mysqli_query($conn, $sql);
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
        <title>MyFinances - Inicio</title>
    </head>
    <body>
        <?php
        require_once('./NavBar/navbar.php');
        ?>

        <body>
            <div class="container">
                <div class="title">
                    <p><a href="./addCategoria.php" class="btnAdd">Categoria +</a></p>
                    <h2>Seus meses adicionados</h2>
                    <p><a href="./addMes.php" class="btnAdd">Mês +</a></p>
                </div>
                <div class="mesesTable">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Ano</th>
                                <th></th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($meses as $finance): ?>
                                <tr>
                                    <td><?=$finance['nome']; ?></td>
                                    <td><?=$finance['ano']; ?></td>
                                    <div class="addFinanca">
                                        <td class="btnFinanca"><a href="verFinanca.php?id=<?=$finance['id']?>">Ver minha finança</a></td>  <!-- Termine isso -->
                                    </div>
                                    <td class="acoes">
                                        <a href="editMes.php?id=<?=$finance['id']?>" id="editMes"><i class="bi bi-pencil-fill"></i></a>
                                        <form action="acoes.php" method="POST" class="d-inline">
                                            <button onclick="return confirm('Tem certeza que deseja excluir?')" name="delete_mes" type="submit" value="<?=$finance['id']?>" id="deleteMes"><i class="bi bi-trash-fill"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach;  ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </body>

    </html>
    </body>

    </html>