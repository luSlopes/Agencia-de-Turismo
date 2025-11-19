<?php 
    require_once "./../../model/operacoesBD/crudIngresso.php";
    
    $bd = new CrudIngresso();

    $id = $_POST["idIngresso"];

    $ingressoInfo = $bd->readIngresso($id);

    echo $ingressoInfo["codigo"] . $ingressoInfo["id_usuario"] . $ingresso["id_tour"];
?>