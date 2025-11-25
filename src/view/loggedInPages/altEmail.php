<?php 
  $user_cpf = $_GET["cpf"];
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
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="../css/style.css" />
    <title>Cadastro</title>
  </head>
  <body class="cadastro-bg">
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
      crossorigin="anonymous"
    ></script>

    <header>
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
          <a class="navbar-brand fw-bold" href="loggedInHome.php?cpf=<?php echo $user_cpf?>">
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
                <a class="nav-link" href="loggedInHome.html?cpf=<?php echo $user_cpf?>#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="quem-somosLoggedIn.html?cpf=<?php echo $user_cpf?>">Quem Somos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="loggedInHome.php?cpf=<?php echo $user_cpf?>#pacotes">Pacotes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="minhasReservas.php?cpf=<?php echo $user_cpf?>">Minhas reservas</a>
              </li>
              <li class="nav-item">
                <a class="btn btn-danger" href="../../../index.html">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <main>
      <div class="form-box mx-auto">
        <h2>Insira o novo Email:</h2>
        <form method="post" action="../../controller/cliente/updateEmailController.php?cpf=<?php echo $user_cpf?>">
          <div class="mb-3">
            <input
              type="text"
              name="novoEmail"
              class="form-control"
              placeholder="Insira seu email"
              required
            />
          </div>
          <button type="submit" class="btn btn-primary w-100 mb-3">
            Atualizar
          </button>
        </form>
      </div>
    </main>
  </body>
</html>
