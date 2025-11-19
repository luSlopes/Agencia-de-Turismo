<?php 
    require_once "./../../model/operacoesBD/crudTour.php";
    
    $bd = new CrudTour();

    $id = $_POST["idIngresso"];

    $bd->deleteTour($id);

?>