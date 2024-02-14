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

        public function konektatu (){
            $this->conn = new mysqli ($this->servername, $this->user, $this->pass, $this->dbname);
            if ($this->conn->connect_error){
                die("Konexioak huts egin du".$conn->connect_error);
            }/*  else {
                echo ('Conexion correcta');
            } */
        }

        
        // INSERT INTO animaliak (izena, izen_zientifikoa, espeziea, tamaina, pisua, elikadura) VALUES (??????,???????,???????,?????????,???????,?????????)
        public function insert ($sql){
            $emaitza = $this->conn->query($sql);

            if($this->conn->connect_error){
                die($this->conn->connect_error);
            }
            if($emaitza === true){
                echo "correcto";
            } else {
                echo "error " . $sql . "<br>" . $conn->error;
            }

            $this->conn->close();
        }

        
        // SELECT * FROM animaliak
        public function select (){
            $sql = "SELECT * FROM animaliak";
            $emaitza = $this->conn->query($sql);

            if ($this->conn->connect_error){
                die ("Error: " . $this->conn->connect_error);
            }

            $datuak = [];
            if ($emaitza->num_rows > 0){
                $row = $emaitza->fetch_assoc();
                while ($row = $emaitza->fetch_assoc()){
                    array_push($datuak, $row);
                }
                return $datuak;
            } else{
                echo '0 results';
            }

            $this->conn->close;
        }


        // DELETE FROM animaliak WHERE id=???????
        public function delete($id){
            $sql = "DELETE FROM animaliak WHERE id = $id";

            $emaitza = $this->conn->query($sql);

            if (!$emaitza){
                die ('ERROR:' . $this->conn->error);
            }
            
            $this->conn->close();
        }    
    }

    $db = new DB('localhost','root', '', '1final_prueba');
    $db->konektatu();
    // $db->select();
    // $db->delete(31);
?>