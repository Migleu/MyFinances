    <?php
    $usuarios = array(
        array(
            "id" => 1,
            "nome" => "Joãozinho",
            "email" => "joao@unimar.br",
            "senha" => "12345",
            "data_nascimento" => "2004-10-01"
        ),
        array(
            "id" => 2,
            "nome" => "Mariazinha",
            "email" => "maria@unimar.br",
            "senha" => "54321",
            "data_nascimento" => "2000-08-10"
        )
    );
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
        <title>Inicio' Minhas finanças</title>
    </head>
    <body>
        <?php
        require_once('./NavBar/navbar.php');
        ?>

        <body>
            <div class="container">
                <div class="title">
                    <h2>Seus meses adicionados</h2>
                    <p><a href="./addMeses.php" id="addMeses">Mês +</a></p>
                </div>
                <div class="recentesTable">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Data de Nascimento</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($usuarios as $usuario): ?>
                                <tr>
                                    <td><?php echo $usuario['id']; ?></td>
                                    <td><?php echo $usuario['nome']; ?></td>
                                    <td><?php echo $usuario['email']; ?></td>
                                    <td><?php echo date('d/m/Y', strtotime($usuario['data_nascimento'])); ?></td>
                                    <td class="acoes">
                                        <a href="#" id="editInfo"><i class="bi bi-pencil-fill"></i></a>
                                        <form action="acoes.php" method="POST" class="d-inline">
                                            <button id="deleteInfo"><i class="bi bi-trash-fill"></i></button>
                                            <!-- <button onclick="return confirm('Tem certeza que deseja deletar esse usuario?')" name="delete_info" type="submit" value="<?= $usuario['id'] ?>" class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i></button> -->
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