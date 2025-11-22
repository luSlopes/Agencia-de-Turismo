
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Cancelar reserva</title>
    <style>
        .success{
            color:green;
        }
        .failed{
            color:red;
        }
    </style>
</head>
<body>
    <?php 
    require_once "./../../model/operacoesBD/crudIngresso.php";
    
    $bd = new CrudIngresso();

    $id = $_GET["idIngresso"];
    $user_cpf = $_GET["cpf"];

    if($bd->deleteIngresso($id) == 1){
        echo "<p class = 'success'>Reserva cancelada!</p>";
    }else{
        echo "<p class = 'failed'>Nao foi possivel cancelar a reserva!</p>";
    }
    echo "<a href='../../view/loggedInHome.php?cpf=$user_cpf' class='btn btn-info'>Voltar a pagina inicial</a>";
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>