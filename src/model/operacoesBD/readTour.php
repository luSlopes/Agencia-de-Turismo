<?php 
    require_once "conexaoBD.php";
    class crudTour{
        private $con;

        public function __construct(){
            $c = new conexaoBD();

            $this->con = $c->conectar();
        }


        public function readTour($id_tour){
            $query = "select * from tours where id_tour = :id";

            $stmt = $this->con->prepare($query);
            $stmt->bindParam(":id", $id_tour);

            $stmt->execute();
            
            $tourInfo = $stmt->fetch();
            return $tourInfo;
        }
    }

?>