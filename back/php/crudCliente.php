<?php 
    require_once "conexaoBD.php";

    class BD{
        //$con sera usada para armazenar a conexao com o banco de dados
        private $con;

        public function __construct(){
            //A variavel $c e usada apenas para fazer a ponte entre o retorno de conectar()
            //e a variavel $con
            $c = new conexaoBD();
            
            $this->con = $c->conectar();
        }

        public function insertCliente($id,$nome,$email,$senha){
          

            $query = "insert into cliente (id_cliente,nome,email,senha) values (:id,:nome,:email,:senha)";

            $stmt = $this->con->prepare($query);
            $stmt->bindParam(":id",$id);
            $stmt->bindParam(":nome",$nome);
            $stmt->bindParam(":email",$email);
            $stmt->bindParam(":senha",$senha);

            $stmt->execute();

        }

        public function readCliente($id){
            $query = "select * from cliente where id_cliente == :id";

            $stmt = $this->con->prepare($query);
            $stmt->bindParam(":id", $id);
            $stmt->execute();

            //Dados do cliente buscado sao armazenados aqui
            $cliente = $stmt->fetch();
        }

        public function updateCliente($id,$nome,$email,$senha){
            $query = "update from cliente set nome = :nome,email = :email, senha = :senha where id_cliente = :id";

            $stmt = $this->con->prepare($query);
            $stmt->bindParam(":id",$id);
            $stmt->bindParam(":nome",$nome);
            $stmt->bindParam(":email",$email);
            $stmt->bindParam(":senha",$senha);

            $stmt->execute();
        }

        public function deleteCliente($id){
            $query = "delete from cliente where id_cliente = :id";

            $stmt = $this->con->prepare($query);
            $stmt->bindParam(":id", $id);

            $stmt->execute();
        }
    }
?>