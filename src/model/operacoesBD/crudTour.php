<?php 
    require_once "conexaoBD.php";
    class crudTour{
        private $con;

        public function __construct(){
            $c = new conexaoBD();

            $this->con = $c->conectar();
        }

        public function insertTour($id_tour,$data){
            $query = "insert into tours (id_tour,dia) values (:id,:data)";

            $stmt = $this->con->prepare($query);
            $stmt->bindParam(":id", $id_tour);
            $stmt->bindParam(":data", $data);
            
            $stmt->execute();
        }

        public function updateTour($id_tour,$data){
            $query = "update from tours set dia = :data where id_tour = :id";

            $stmt = $this->con->prepare($query);
            $stmt->bindParam(":id", $id_tour);
            $stmt->bindParam(":data", $data);

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
            
            $tourInfo = $stmt->fetch();
            return $tourInfo;
        }
    }

?>