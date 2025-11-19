<?php 
    require_once "./../../model/operacoesBD/crudTour.php";
    
    $bd = new CrudTour();

    $id = $_POST["idTour"];
    $data = $_POST["data"];

    $bd->insertTour($id,$data);
?>