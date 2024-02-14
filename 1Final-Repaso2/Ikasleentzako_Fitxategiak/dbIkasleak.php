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
        } else {
            echo "conexion";
        }
    }

    //Ariketa 1
    // INSERT INTO a1 (izena, abizenak, adina, soldata) VALUES (??????,???????,???????,?????????)
    public function insert($sql)
    {
        $emaitza = $this->conn->query($sql);

        if (!$emaitza) {
            die('ERROR: ' . $this->conn->error);
        }

        // $this->conn->close();
    }

    //Ariketa 2
    // SELECT * FROM a1 WHERE adina>?????? AND adina<???????"]
    public function select($sql)
    {
        $datuak = [];
        $emaitza = $this->conn->query($sql);

        if ($emaitza->num_rows > 0) {
            while ($row = $emaitza->fetch_assoc()) {
                array_push($datuak, $row);
            }
        }

        if (!$emaitza) {
            die('ERROR: ' . $this->conn->error);
        }
        return $datuak;
    }

    //Ariketa 4
    // SELECT * FROM a1
    public function selectAll()
    {
        $datuak = [];
        $sql = "SELECT * FROM a1";
        $emaitza = $this->conn->query($sql);
        if ($emaitza->num_rows > 0) {
            while ($row = $emaitza->fetch_assoc()) {
                array_push($datuak, $row);
            }
        }

        if (!$emaitza) {
            die("ERROR" . $this->conn->error);
        }
        return $datuak;
    }

    // Ariketa 5
    // DELETE FROM a1 WHERE id=???????
    public function delete($sql)
    {

    }
}

// $db = new DB('localhost', 'root', '', 'prueba');
// $db->konektatu();
?>