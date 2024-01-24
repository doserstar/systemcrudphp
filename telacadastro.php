<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Cadastro</h1>

        <form action="cadastro_script.php" method="POST">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" placeholder="Nome completo" name="nome" required>
            <label for="nome">Nome completo</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" placeholder="Endereço" name="endereco">
            <label for="endereco">Endereço</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" placeholder="Telefone" name="telefone">
            <label for="telefone">Telefone</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" placeholder="E-mail" name="email">
            <label for="email">E-mail</label>
        </div>
        <div class="form-floating mb-3">
            <input type="date" class="form-control" placeholder="Data de Nascimento<" name="data_nascimento">
            <label for="data_nascimento">Data de Nascimento</label>
        </div>
        <div class="form-floating mb-3">
            <input type="submit" class="btn btn-success">
        </div>
        <a href="index.php" class="inline-block"><i class="bi bi-arrow-left"></i>Voltar ao Início</a>

            </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>