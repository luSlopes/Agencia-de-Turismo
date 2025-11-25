<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous"
    />
    <title>Apagar Conta</title>
</head>
<body>
    <?php
    require_once "../../model/operacoesBD/crudCliente.php";

    $bd = new crudCliente();

    $user_cpf = $_GET["cpf"];

    if($bd->deleteCliente($user_cpf)==1)
        header("Location: ../../../index.html");
    else
        echo "<a href='../../view/loggedInHome.php?cpf=$user_cpf' class='btn btn-info'>Voltar a pagina inicial</a>";
?>
</body>
</html>