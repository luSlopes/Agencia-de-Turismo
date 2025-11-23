<?php 
  $user_cpf = $_GET['cpf'];
  $idTour = $_GET['idTour'];
  $diaIngresso = $_POST['date'];
?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Montserrat:wght@400;600&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/pagamento.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
    <title>Pagamento</title>
  </head>
  <body>
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
              <a class="nav-link" href="index.html#home?cpf=<?php echo $user_cpf;?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../quem-somos.html?cpf=<?php echo $user_cpf;?>">Quem Somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.html#pacotes?cpf=<?php echo $user_cpf;?>">Pacotes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="perfil.php?cpf=<?php echo $user_cpf;?>">Meu perfil</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-danger" href="../index.html">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <form method="post" action="../../controller/ingresso/insertIngressoController.php?cpf=<?php echo $user_cpf?>&idTour=<?php echo $idTour;?>&diaIngresso=<?php echo $diaIngresso;?>"> 
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Numero do cartao</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="16 digitos sem espaço" required>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">CVC</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Ex: 123" required>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label" required>Data de validade</label>
        <input type="date" class="form-control" id="date">
      </div>
      <button type="submit" class="btn btn-success">Confirmar compra</button>
    </form>


    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
      crossorigin="anonymous"
    ></script>

    <script>
      let dateTour = document.querySelector('#date');
      document.querySelector('form').addEventListener('submit', verifyDate);
      
      function verifyDate(){
        let date = new Date();

        let dayNow = date.getDate();
        let monthNow = date.getMonth() + 1;
        let yearNow = date.getFullYear();

        let todayDate = moment(yearNow + "-" + monthNow + "-" + dayNow);
        let dateChoosen = moment(dateTour.value);

        if(dateChoosen.isBefore(todayDate)){
          window.alert("Insira uma data valida!");
          event.preventDefault();
        }
      }
    </script>
  </body>
</html>
