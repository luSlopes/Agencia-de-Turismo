<?php 
    require_once "./../../model/operacoesBD/crudTour.php";
    
    $bd = new CrudTour();

    $id = $_POST["idIngresso"];
    $data = $_POST["data"];

    $bd->updateTour($id,$data);

?>