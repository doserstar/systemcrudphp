<?php include "conexao.php" ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pesquisar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

  <?php 
    if (isset($_POST['search'])) {
      $search = $_POST['search'];
    } else {
      $search = '';
    }
    
    $sql = "SELECT * FROM pessoas WHERE nome LIKE '%$search%'";
    $dados = mysqli_query($conn, $sql);

    ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Pesquisar</h1>
                <nav class="navbar bg-body-tertiary">
                <div class="container-fluid">
                    <form class="d-flex" role="search" action="pesquisa.php" method="POST">
                    <input class="form-control me-3" type="search" placeholder="Nome" aria-label="Pesquisar" name="search" autofocus>
                    <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                    </form>
                </div>
                </nav>

                <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Data de Nascimento</th>
                    <th scope="col">Funções</th>
                    </tr>
                </thead>
                <tbody>

                <?php
                  while ($linha = mysqli_fetch_assoc($dados)) {
                    $cod_pessoa = $linha["cod_pessoa"];
                    $nome = $linha["nome"];
                    $endereco = $linha["endereco"];
                    $telefone = $linha["telefone"];
                    $email = $linha["email"];
                    $data_nascimento = $linha["data_nascimento"];
                    $data_nascimento = reformDate($data_nascimento);

                    echo "<tr> 
                          <th scope='row'>$cod_pessoa</th>
                          <td>$nome</td>
                          <td>$endereco</td>
                          <td>$telefone</td>
                          <td>$email</td>
                          <td>$data_nascimento</td>
                          <td>
                          <a href='edicao.php?id=$cod_pessoa' class='btn btn-link'><i class='bi bi-pen'></i></a>
                          <a href='' class='btn btn-link'><i class='bi bi-trash'></i></a>
                          </td>
                          </tr>
                          ";
                    }
                ?>
                    
                </tbody>
                </table>

                <a href="index.php" class="inline-block"><i class="bi bi-arrow-left"></i>Voltar ao Início</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>