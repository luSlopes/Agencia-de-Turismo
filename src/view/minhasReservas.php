<?php
    require_once"../model/operacoesBD/crudIngresso.php";
    require_once"../model/operacoesBD/readTour.php";
    $bdIngresso = new crudIngresso();
    $bdTour = new crudTour();
    
    $user_cpf = isset($_GET['cpf'])?$_GET['cpf']:'';
    //Busca todos os ingressos do cliente
    $ingressos = $bdIngresso->readIngressoPorCliente($user_cpf);
?>



<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Minhas reservas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/minhasReservas.css">
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
              <a class="nav-link" href="loggedInHome.php?cpf=<?php echo $user_cpf;?>#home?">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="quem-somos.html?cpf=<?php echo $user_cpf;?>">Quem Somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="loggedInHome.php?cpf=<?php echo $user_cpf;?>#pacotes">Pacotes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="perfil.php?cpf=<?php echo $user_cpf;?>">Meu perfil</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Minhas reservas</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-danger" href="index.html">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container title">
        <h1 class="titleFont">Minhas reservas</h1>
    </div>
<div class="container info">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Dia</th>
      <th scope="col">Modalidade</th>
      <th></th>
    </tr>
    </thead>
        <tbody>
    <?php 
        foreach($ingressos as $ingressoInfo){
            $ingressoId = $ingressoInfo['codigo']; // codigo do ingresso
            $ingressoData = $ingressoInfo['dia']; // data do ingresso

            $tour_id = $ingressoInfo['id_tour'];
            $tourInfo = $bdTour->readTour($tour_id);
            $tourName = $tourInfo['nome']; //modalidade da tour

           
            echo "  
                <tr>
                <td>$ingressoId</td>
                <td>$ingressoData</td>
                <td>$tourName</td>
                <td><a class='btn btn-danger' href='../controller/ingresso/deleteIngressoController.php?idIngresso=$ingressoId&cpf=$user_cpf'>Cancelar</a></td>
                </tr>
                ";
        }
    ?>
  </tbody>
</table>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>