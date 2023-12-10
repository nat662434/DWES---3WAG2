<?php
    class DB {
        private $servername;
        private $user;
        private $pass;
        private $dbname;
        private $conn;
        
        public function __construct ($servername, $user, $pass, $dbname){
            $this->servername=$servername;
            $this->user=$user;
            $this->pass=$pass;
            $this->dbname=$dbname;
        }

        private function konektatu (){
            $this->conn = new mysqli ($this->servername, $this->user, $this->pass, $this->dbname);
            if ($this->conn->connect_error){
                die("Konexioak huts egin du".$conn->connect_error);
            }
        }

        //Ariketa 1
        // INSERT INTO a1 (izena, abizenak, adina, soldata) VALUES (??????,???????,???????,?????????)
        public function insert ($sql){

        }

        //Ariketa 2
        // SELECT * FROM a1 WHERE adina>?????? AND adina<???????"]
        public function select ($sql){

        }

        //Ariketa 4
        // SELECT * FROM a1
        public function selectAll(){

        }

        // Ariketa 5
        // DELETE FROM a1 WHERE id=???????
        public function delete ($sql){
            
        }
    } 
?>