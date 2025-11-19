<?php 
    require_once "../../model/operacoesBD/crudCliente.php";

    $id = $_POST["cpf"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $bd = new crudCliente();

    $bd->insertCliente($id, $nome, $email, $senha);
?>