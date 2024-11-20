<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyFinances - Adicionar transação</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Adicionar transação
                            <a href="./verFinanca.php" class="btn btn-danger float-end">Voltar</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="acoes.php" method="POST">
                            <div class="mb-3">
                                <label for="tipoTransacao">Tipo de transação</label>
                                <select name="tipoTransacao">
                                    <option value="0">Entrada</option>
                                    <option value="1">Saida</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="dataTransacao">Data da transação</label>
                                <input type="date" name="dataTransacao" id="dataTransacao" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="valorTransacao">Valor</label>
                                <input type="decimal" name="valorTransacao" id="valorTransacao" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="descricaoTransacao">Descrição</label>
                                <input type="text" name="descricaoTransacao" id="descricaoTransacao" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="categoriaTransacao">Categoria</label>
                                <select name="categoriaTransacao">
                                    <option value="0">Alimentação</option>
                                    <option value="1">Transporte</option>
                                    <option value="2">Lazer</option>
                                    <option value="3">outro</option>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>