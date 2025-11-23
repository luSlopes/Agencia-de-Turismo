<?php
    require "../model/operacoesBD/crudCliente.php";

    $user_cpf = isset($_GET['cpf'])? $_GET['cpf'] : '';
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
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/perfil.css" >
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
              <a class="nav-link" href="loggedInHome.php?cpf=<?php echo $user_cpf;?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="quem-somos.html?cpf=<?php echo $user_cpf;?>">Quem Somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="loggedInHome.php?cpf=<?php echo $user_cpf;?>#pacotes">Pacotes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Meu perfil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="minhasReservas.php?cpf=<?php echo $user_cpf;?>">Minhas reservas</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-danger" href="index.html">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container profile">
      <i class="fa-solid fa-user fa-8x icon" style="margin-top:20px"></i>
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
      <div class="alterar container">
        <button type="button" class="btn btn-primary profileBtn"><a href="altNome.php?cpf=<?php echo $user_cpf;?>">Alterar Nome</a></button>
        <button type="button" class="btn btn-primary profileBtn"><a href="altEmail.php?cpf=<?php echo $user_cpf;?>">Alterar Email</a></button>
        <button type="button" class="btn btn-primary profileBtn"><a href="altSenha.php?cpf=<?php echo $user_cpf;?>">Alterar Senha</a></button>
        <button type="button" class="btn btn-danger profileBtn" id="deleteBtn"><a href="../controller/cliente/deleteClienteController.php?cpf=<?php echo $user_cpf;?>">Apagar Conta</a></button>
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

    <script>
      //Script para confirmar o apagamento da conta
      const DELETE = document.getElementById('deleteBtn')
      DELETE.addEventListener('click',confirma)

      function confirma(event){
        let resultado = window.confirm("Tem certeza de que deseja excluir a conta?");
        
        if(resultado == false)
          event.preventDefault();
      }
    </script>
  </body>
</html>
