<?php 
    require_once "./../../model/operacoesBD/crudIngresso.php";
    
    $bd = new CrudIngresso();

    $id = $_POST["idIngresso"];

    $bd->deleteIngresso($id);
?>