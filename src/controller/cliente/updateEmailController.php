<?php 
    require_once "../model/operacoesBD/crudCliente.php";

    $bd = new crudCliente();

    $newEmail = $_POST["newEmail"];
    $id = $_POST["id"];

    $bd->updateEmail($id,$newEmail);
    
?>