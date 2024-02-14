<?php
class DB
{
    private $servername;
    private $user;
    private $pass;
    private $dbname;
    private $conn;

    public function __construct($servername, $user, $pass, $dbname)
    {
        $this->servername = $servername;
        $this->user = $user;
        $this->pass = $pass;
        $this->dbname = $dbname;
    }

    public function konektatu()
    {
        $this->conn = new mysqli($this->servername, $this->user, $this->pass, $this->dbname);
        if ($this->conn->connect_error) {
            die("Konexioak huts egin du" . $this->conn->connect_error);
        } /* else {
        echo 'conectado';
    } */
    }

    //Ariketa 1
    // INSERT INTO langileak (izena, abizenak, adina, soldata) VALUES (??????,???????,???????,?????????)
    public function insert($sql)
    {
        $emaitza = $this->conn->query($sql);
        if (!$emaitza) {
            die('ERROR: ' . $this->conn->error);
        }
    }

    //Ariketa 2
    // SELECT * FROM langileak WHERE adina>?????? AND adina<???????"]
    public function select($sql)
    {
        $datuak = [];
        $emaitza = $this->conn->query($sql);
        if ($emaitza->num_rows > 0) {
            while ($row = $emaitza->fetch_assoc()) {
                array_push($datuak, $row);
            }
        }

        return $datuak;
    }

    //Ariketa 4
    // SELECT * FROM a1
    public function selectAll()
    {
        $datuak = [];
        $sql = "SELECT * FROM langileak";
        $emaitza = $this->conn->query($sql);
        if ($emaitza->num_rows > 0) {
            while ($row = $emaitza->fetch_assoc()) {
                array_push($datuak, $row);
            }
        }

        return $datuak;
    }

    // Ariketa 5
    // DELETE FROM a1 WHERE id=???????
    public function delete($sql)
    {
        $emaitza = $this->conn->query($sql);
        if ($emaitza === TRUE) {
            echo "Record deleted successfully<br>";
        } else {
            echo "Error deleting record: " . $this->conn->error;
        }

    }
}

// $db = new DB('192.168.202.104', '1finala', '123', 'F1Natalia');
// $db->konektatu();
// $prueba = $db->selectAll();
// foreach ($prueba as $dato) {
//     echo $dato['id'] . '<br>';
// }
?>