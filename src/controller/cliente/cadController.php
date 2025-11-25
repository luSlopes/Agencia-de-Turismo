<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
    crossorigin="anonymous"
    />
    <style>
        p{
            font-size: 20px;
            color: green;
        }
    </style>
</head>
<body>
    <?php 
    require_once "../../model/operacoesBD/crudCliente.php";

    $id = $_POST["cpf"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = password_hash($_POST["senha"],PASSWORD_DEFAULT);

    $bd = new crudCliente();

    if($bd->insertCliente($id, $nome, $email, $senha)==1){
        header("Location: ../../../index.html");  
    }else{
        echo 'Nao foi possivel realizar o cadastro! Verifique as informaçoes e tente novamente <a href="../../view/index.html" class="btn btn-info">Voltar a pagina inicial</button>';
    }
?>
</body>
</html>