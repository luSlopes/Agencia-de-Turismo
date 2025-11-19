<?php 
    require_once "../../model/operacoesBD/crudCliente.php";

    $bd = new crudCliente();

    $newNome = $_POST["newNome"];
    $id = $_POST["id"];

    $bd->updateNome($id,$newNome);
    
?>