<?php
session_start();
require_once('conexao.php');

$finance = [];

if (!isset($_GET['id'])){
    header('Location: index.php');
} else {
    $mesId = mysqli_real_escape_string($conn, $_GET['id']);
    $sql = "SELECT * FROM meses WHERE id = '{$mesId}'";
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
    <title>Editar mes</title>
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
                            Editar mês <i class="bi bi-person-fill-gear"></i>
                            <a href="index.php" class="btn btn-danger float-end ">Voltar</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                        if ($finance):
                        ?>
                        <form action="acoes.php" method="POST">
                        <input type="hidden" name="mes_id" value="<?=$finance['id']?>">
                            <div class="mb-3">
                            <select name="txtNome">
                                    <option value="0" selected>Janeiro</option>
                                    <option value="1">Fevereiro</option>
                                    <option value="2">Março</option>
                                    <option value="3">Abril</option>
                                    <option value="4">Maio</option>
                                    <option value="5">Junho</option>
                                    <option value="6">Julho</option>
                                    <option value="7">Agosto</option>
                                    <option value="8">Setembro</option>
                                    <option value="9">Outubro</option>
                                    <option value="10">Novembro</option>
                                    <option value="11">Dezembro</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="anoMes">Ano</label>
                                <input type="number" name="anoMes" id="anoMes" value="<?=$finance['ano']?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="edit_mes" class="btn btn-primary float-end">Adicionar</button>
                            </div>
                        </form>
                        <?php
                        else:
                        ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            Usuário não encontrado
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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