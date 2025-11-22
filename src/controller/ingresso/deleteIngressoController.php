<?php 
    require_once "./../../model/operacoesBD/crudIngresso.php";
    
    $bd = new CrudIngresso();

    $id = $_GET["idIngresso"];

    $bd->deleteIngresso($id);
?>