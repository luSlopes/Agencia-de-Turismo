<?php 
    
    class conexaoBD{
        private $host ="localhost:3306";
        private $user = "root";
        private $bd = "agencia-turismo";
        private $senha = "";
        
        function conectar(){

            try{
                $con = new PDO("mysql:host=$this->host;dbname=$this->bd",$this->user,$this->senha);

                echo "Conectado!";

                return $con;
            }catch(PDOException $e){
                echo "Erro de conexao ao banco de dados<br>";
                echo $e->getMessage();
            }
        }
    }



?>