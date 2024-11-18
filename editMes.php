<?php
session_start();
require_once('conexao.php');

$finance = [];

if (!isset($_GET['id'])){
    header('Location: index.php');
} else {
    $mesId = mysqli_real_escape_string($conn, $_GET['id']);
    $sql = "SELECT * FROM usuarios WHERE id = '{$mesId}'";
    $query = mysqli_query($conn, $sql);
    if (mysqli_num_rows($query) > 0){
        $finance = mysqli_fetch_array($query);
    }
    
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar - usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Editar usuario <i class="bi bi-person-fill-gear"></i>
                            <a href="index.php" class="btn btn-danger float-end ">Voltar</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                        if ($usuario):
                        ?>
                        <form action="acoes.php" method="POST">
                            <div class="mb-3">
                                <label for="txtNome">Nome</label>
                                <input type="text" name="txtNome" id="txtNome" value="<?=$usuario['nome']?>" class="form-control">
                            </div>
                        </form>
                        <?php
                        else:
                        ?>
                        <div class="<?=$typeCss?>" role="alert">
                            <?php echo $_SESSION['message']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></but>
                        </div>
                        <?php
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>   
</body>
</html>