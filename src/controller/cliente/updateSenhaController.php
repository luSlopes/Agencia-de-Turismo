<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar nome</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous"
    />
</head>
<body>
    <?php 
        require_once "../../model/operacoesBD/crudCliente.php";

        $bd = new crudCliente();

        $novaSenha = password_hash($_POST["novaSenha"],PASSWORD_DEFAULT);
        $user_cpf = $_GET["cpf"];

        if($bd->updateSenha($user_cpf,$novaSenha)){
            header("Location: ../../view/loggedInPages/perfil.php?cpf=$user_cpf");
        }else{
            echo"<a href='../../view/loggedInHome.php?cpf=$user_cpf' class='btn btn-info'>Voltar a pagina inicial</a>";
        }
    ?>
</body>
</html>