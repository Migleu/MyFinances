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
    // array(
    //     "id" => 3,
    //     "nome" => "Mariazinha",
    //     "email" => "maria@unimar.br",
    //     "senha" => "54321",
    //     "data_nascimento" => "2000-08-10"
    // ),
    // array(
    //     "id" => 3,
    //     "nome" => "Mariazinha",
    //     "email" => "maria@unimar.br",
    //     "senha" => "54321",
    //     "data_nascimento" => "2000-08-10"
    // )
);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../../AllStyle.css">
    <link rel="shortcut icon" href="./Icons/calcLogo.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Inicio' Minhas finanças</title>
</head>

<body>
    <!-- Navbar -->
    <div class="Navbar">
        <div class="logo">
            <img id="calc" src="../../Componentes/Icons/IconCalc.svg" alt="">
            <h2>MyFinances</h2>
        </div>
        <div class="linkBar">
            <ul>
                <li>Inicio</li>
                <li>Finanças</a></li>
                <li>Sobre nós</li>
            </ul>
        </div>
        <!-- Centralize dps -->
        <p>
            <!-- <img id="calendar" src="../../Componentes/Icons/IconCalendar.svg" alt=""> -->
            Meses
        </p>
    </div>
    <hr>
    <!-- ///////////////////////// -->

    <div class="container">
        <h2>Recentes</h2>
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
                            <a href="#" class="btn btn-secondary btn-sm"><i class="bi bi-pencil-fill"></i></a>
                            <form action="acoes.php" method="POST" class="d-inline">
                                <button onclick="return confirm('Tem certeza que deseja deletar esse usuario?')" name="delete_usuario" type="submit" value="<?= $usuario['id'] ?>" class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i></button>
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