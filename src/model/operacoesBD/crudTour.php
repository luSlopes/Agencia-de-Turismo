<?php 
    require_once "conexaoBD.php";
    class crudTour{
        private $con;

        public function __construct(){
            $c = new conexaoBD();

            $this->con = $c->conectar();
        }

        public function insertTour($id_tour,$data,$hora_inicio){
            $query = "insert into tours (id_tour,dia,hora_inicio) values (:id,:data,:hora_inicio)";

            $stmt = $this->con->prepare($query);
            $stmt->bindParam(":id", $id_tour);
            $stmt->bindParam(":data", $data);
            $stmt->bindParam(":hora_inicio", $hora_inicio);
            
            $stmt->execute();
        }

        public function updateTour($id_tour,$data,$hora_inicio){
            $query = "update from tours set dia = :data, hora_inicio = :hora_inicio where id_tour = :id";

            $stmt = $this->con->prepare($query);
            $stmt->bindParam(":id", $id_tour);
            $stmt->bindParam(":data", $data);
            $stmt->bindParam(":hora_inicio", $hora_inicio);

            $stmt->execute();
        }
        
        public function deleteTour($id_tour){
            $query = "delete from tours where id_tour = :id";

            $stmt = $this->con->prepare($query);
            $stmt->bindParam(":id", $id_tour);
            $stmt->execute();
        }

        public function readTour($id_tour){
            $query = "select * from tours where id_tour = :id";

            $stmt = $this->con->prepare($query);
            $stmt->bindParam(":id", $id_tour);

            $stmt->execute();
        }
    }

?>