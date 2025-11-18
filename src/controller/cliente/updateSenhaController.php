<?php 
    require_once "../model/operacoesBD/crudCliente.php";

    $bd = new crudCliente();

    $newSenha = $_POST["newSenha"];
    $id = $_POST["id"];

    $bd->updateSenha($id,$newSenha);
    
?>