<?php 
    require_once "conexaoBD.php";

    class crudCliente{
        //$con sera usada para armazenar a conexao com o banco de dados
        private $con;

        public function __construct(){
            //A variavel $c e usada apenas para fazer a ponte entre o retorno de conectar()
            //e a variavel $con
            $c = new conexaoBD();
            
            $this->con = $c->conectar();
        }

        public function insertCliente($id,$nome,$email,$senha){
            try{
                $query = "insert into clientes (id_cliente,nome,email,senha) values (:id,:nome,:email,:senha)";

                $stmt = $this->con->prepare($query);
                $stmt->bindParam(":id",$id);
                $stmt->bindParam(":nome",$nome);
                $stmt->bindParam(":email",$email);
                $stmt->bindParam(":senha",$senha);

                $stmt->execute();
            }catch(PDOException $e){
                echo "Nao foi possivel inserir os dados". $e->getMessage();
            }
        }

        public function readCliente($id){
            $query = "select id_cliente,nome,email from clientes where id_cliente = :id";

            $stmt = $this->con->prepare($query);
            $stmt->bindParam(":id", $id);
            $stmt->execute();

            //Dados do cliente buscado sao armazenados aqui
            $cliente = $stmt->fetch();
            
            return $cliente;
        }

        public function updateNome($id,$nome){
            $query = "update clientes set nome = :nome where id_cliente = :id";

            $stmt = $this->con->prepare($query);
            $stmt->bindParam(":id",$id);
            $stmt->bindParam(":nome",$nome);
            $stmt->bindParam(":email",$email);
            $stmt->bindParam(":senha",$senha);

            $stmt->execute();
        }

        public function updateEmail($id,$email){
            $query = "update clientes set email = :email, where id_cliente = :id";

            $stmt = $this->con->prepare($query);
            $stmt->bindParam(":id",$id);
            $stmt->bindParam(":nome",$nome);
            $stmt->bindParam(":email",$email);
            $stmt->bindParam(":senha",$senha);

            $stmt->execute();
        }

        public function updateSenha($id,$senha){
            $query = "update clientes set senha = :senha where id_cliente = :id";

            $stmt = $this->con->prepare($query);
            $stmt->bindParam(":id",$id);
            $stmt->bindParam(":nome",$nome);
            $stmt->bindParam(":email",$email);
            $stmt->bindParam(":senha",$senha);

            $stmt->execute();
        }

        public function deleteCliente($id){
            $query = "delete from clientes where id_cliente = :id";

            $stmt = $this->con->prepare($query);
            $stmt->bindParam(":id", $id);

            $stmt->execute();
        }
    }
?>