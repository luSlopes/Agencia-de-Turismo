<?php
    require_once "../model/operacoesBD/crudCliente.php";

    $user_cpf = $_GET['cpf']? $_GET['cpf'] : '';
    $search = new crudCliente();
    $result = $search->readCliente($user_cpf); 
    $user_name = $result['nome']; 
    $user_email = $result['email']; 
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/home.css" />
    <link rel="stylesheet" href="css/perfil.css" />
    <title>Meu perfil</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <div class="container">
        <a class="navbar-brand fw-bold" href="index.html">
          <i class="bi bi-water me-2"></i>Rildax Tour
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="loggedInHome.html#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="quem-somos.html">Quem Somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="loggedInHome.html#pacotes">Pacotes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Meu perfil</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container profile">
      <i class="fa-solid fa-user fa-8x icon"></i>
      <div class="container info">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Nome</th>
              <th scope="col">Email</th>
              <th scope="col">CPF</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><?php echo "<p>$user_name</p>";?></td>
              <td><?php echo "<p>$user_email</p>";?></td>
              <td><?php echo "<p>$user_cpf</p>";?></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="alterar">
        <button type="button" class="btn btn-primary"><a href="altNome.html">Alterar Nome</a></button>
        <button type="button" class="btn btn-primary"><a href="altEmail.html">Alterar Email</a></button>
        <button type="button" class="btn btn-primary"><a href="altSenha.html">Alterar Senha</a></button>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://kit.fontawesome.com/de2557c88b.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
