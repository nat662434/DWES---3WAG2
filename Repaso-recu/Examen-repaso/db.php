<?php
    class DB {
        private $servername;
        private $user;
        private $pass;
        private $dbname;
        public $conn;
        
        public function __construct ($servername, $user, $pass, $dbname){
            $this->servername=$servername;
            $this->user=$user;
            $this->pass=$pass;
            $this->dbname=$dbname;
        }

        public function konektatu (){
            $this->conn = new mysqli ($this->servername, $this->user, $this->pass, $this->dbname);
            if ($this->conn->connect_error){
                die("Konexioak huts egin du".$this->conn->connect_error);
            }
            // } else {
            //     echo "conexion exitosa";
            // }
        }

        //Ariketa 1
        // INSERT INTO a1 (izena, abizenak, adina, soldata) VALUES (??????,???????,???????,?????????)
        public function insert ($sql){
            if($this->conn->query($sql) === TRUE){
                echo "datuak ongi sartu dira";
            } else {
                echo "Error: " . $this->conn->error;
            }
        }

        //Ariketa 2
        // SELECT * FROM a1 WHERE adina>?????? AND adina<???????"]
        public function select ($sql){
            $emaitza = $this->conn->query($sql);

            if ($emaitza === false){
                echo "Error:" . $this->conn->error;
                return null;
            }

            return $emaitza;
        }

        //Ariketa 4
        // SELECT * FROM a1
        public function selectAll(){
            $sql = "SELECT * FROM pertsonak";
            $emaitza = $this->conn->query($sql);

            if($emaitza === false){
                echo "Error: ". $this->conn->error;
                return null;
            }

            $results = [];
            while($row = $emaitza->fetch_assoc()){
                $results[] = $row;
            }
            return json_encode($results);
        }

        // Ariketa 5
        // DELETE FROM a1 WHERE id=???????
        public function delete ($sql){
            $emaitza = $this->conn->query($sql);

            if ($emaitza === false){
                echo "Error: ". $this->conn->error;
                return null;
            } return "Ondo ezabatuta";
        }
    } 

    $db = new DB('localhost', 'root', '', 'repasoexamen');
    $db->konektatu();
?>