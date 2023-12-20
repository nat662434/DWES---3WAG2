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
            } else {
                echo "conexion correcta <br>";
            }
        }

        
        // INSERT INTO animaliak (izena, izen_zientifikoa, espeziea, tamaina, pisua, elikadura) VALUES (??????,???????,???????,?????????,???????,?????????)
        public function insert($sql){
            // $sql = "INSERT INTO animaliak (izena, izen_zientifikoa, espeziea, tamaina, pisua, elikadura) VALUES (?, ?, ?, ?, ?, ?)";
            $emaitza = $this->conn->query($sql);

            if ($this->conn->connect_error){
                die("Error:" . $this->conn->connect_error);
            }
            if ($this->conn->query($sql) === true){
                echo "correcto";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            echo $emaitza;
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
                while ($row = $emaitza->fetch_assoc()) {
                    /*echo $row['id']. " ";
                    echo $row['izena']. " ";
                    echo $row['izen_zientifikoa']. " ";
                    echo $row['espeziea']. " ";
                    echo $row['tamaina']. " ";
                    echo $row['pisua']. " ";
                    echo $row['elikadura']. "<br> ";*/

                    array_push($datuak, $row);
                }
                //var_dump($datuak);
                return $datuak;
            } else {
                echo "0 results";
            }
    
            $this->conn->close();
        }

        // DELETE FROM animaliak WHERE id=???????
        public function delete ($sql){
            // $sql = "DELETE FROM animaliak WHERE id=?";
            if ($this->conn->query($sql) === TRUE){
                echo "Ondo ezabatuta";
            } else {
                echo "Error ezabatzerakoan" . $this->conn->error;
            }
            $this->conn->close();
        }
    
    } 

    $db = new DB('192.168.202.104', 'azterketa', '123', 'B1Natalia'); 
    $db->konektatu();
    //$db->select();
    // $db->insert("INSERT INTO animaliak (izena, izen_zientifikoa, espeziea, tamaina, pisua, elikadura) VALUES ('prueba', 'prueba', 'prueba', 'p', 'pr', 'Carnívoro')");
    // $db->delete("DELETE FROM animaliak WHERE id=32");
?>