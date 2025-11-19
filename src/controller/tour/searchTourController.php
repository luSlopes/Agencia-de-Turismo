<?php 
    require_once "./../../model/operacoesBD/crudTour.php";
    
    $bd = new CrudTour();

    $id = $_POST["idIngresso"];

    $tourInfo = $bd->readTour($id);

    echo $tourInfo["id_tour"] . $tourInfo["data"];
?>