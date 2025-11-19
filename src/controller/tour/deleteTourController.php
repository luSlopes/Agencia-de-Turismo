<?php 
    require_once "./../../model/operacoesBD/crudIngresso.php";
    
    $bd = new CrudTour();

    $id = $_POST["idIngresso"];

    $bd->deleteTour($id);

?>