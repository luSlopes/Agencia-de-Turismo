<?php 
    require_once "./../../model/operacoesBD/crudIngresso.php";

    $bd = new CrudIngresso();

    $id = $_POST["idIngresso"];
    $idCliente = $_POST["id"];
    $idTour = $_POST["idTour"];

    $bd->insertIngresso($id,$idCliente,$idTour);
?> 