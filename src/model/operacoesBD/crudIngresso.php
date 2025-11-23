<?php 
    require_once "conexaoBD.php";
    class crudIngresso{
        private $con;

        public function __construct(){
            $c = new conexaoBD();

            $this->con = $c->conectar();
        }

        public function insertIngresso($id_usuario, $id_tour,$diaIngresso){
            try{
                $query = "insert into ingressos (id_cliente, id_tour, dia) values (:id_usuario,:id_tour, :diaIngresso)";

                $stmt = $this->con->prepare($query);
                $stmt->bindParam(":id_usuario", $id_usuario);
                $stmt->bindParam(":id_tour", $id_tour);
                $stmt->bindParam(":diaIngresso", $diaIngresso);

                $stmt->execute();
                return 1;
            }catch(PDOException $e){
                echo "Nao foi possivel realizar a reserva!";
                echo "".$e->getMessage();
            }
        }

        public function deleteIngresso($codigo){
            try{$query = "delete from ingressos where codigo = :codigo";

            $stmt = $this->con->prepare($query);
            $stmt->bindParam(":codigo", $codigo);
            $stmt->execute();
            return 1;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }

        public function readIngresso($codigo){
            $query = "select * from ingressos where codigo = :codigo";

            $stmt = $this->con->prepare($query);
            $stmt->bindParam(":codigo", $codigo);
            $stmt->execute();

            $ingresso = $stmt->fetch();
            return $ingresso;
        }

        public function readIngressoPorCliente($cpf){
            $query = "select * from ingressos where id_cliente = :cpf";

            $stmt = $this->con->prepare($query);
            $stmt->bindParam(":cpf", $cpf);
            $stmt->execute();

            $ingresso = $stmt->fetchAll();

            return $ingresso;
    }
    }

?>