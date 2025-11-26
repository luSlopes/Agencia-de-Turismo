<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
    crossorigin="anonymous"
    />
    <style>
        p{
            font-size: 20px;
            color: red;
        }
    </style>
</head>
    <body>
        <?php 
            require_once "../../model/operacoesBD/crudCliente.php";

            $bd = new crudCliente();
            
            //componentes de login
            $cpf = $_POST["cpf"];
            $senha = $_POST["senha"];

            //busca cliente no bd
            $user = $bd->readCliente($cpf);
            $user_cpf = $user["id_cliente"];
            
            if($user_cpf == $cpf && password_verify($senha,$user["senha"])){
                echo '<script>
                        alert("Login ou senha incorretos! Verifique e tente novamente.");
                        window.location.href = "../../view/login.html";
                      </script>';
            }
            else{
                echo "<p>Nao foi possivel se conectar, verifique as informacoes e tente novamente</p>";
            }
            echo '<a href="../../view/index.html" class="btn btn-info">Voltar a pagina inicial</button>';
            echo '<a href="../../view/login.html" class="btn btn-primary">Voltar a tela de login</button>';
        ?>
    </body>

</html>
