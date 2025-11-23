<?php 
    require_once "./../../model/operacoesBD/crudIngresso.php";

    $bd = new CrudIngresso();

    $user_cpf = $_GET["cpf"];
    $idTour = $_GET["idTour"];
    $diaIngresso = $_GET["diaIngresso"];

    if($bd->insertIngresso($user_cpf,$idTour,$diaIngresso) == 1){
        echo "reserva feita com sucesso!";
        header("Location: ../../view/minhasReservas.php?cpf=$user_cpf");
    }
?> 