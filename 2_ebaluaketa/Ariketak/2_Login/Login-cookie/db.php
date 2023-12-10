<?php class DB {
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "login";
    private $conn;

    // Conectar a la base de datos
    public function konexioa(){
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);
        if ($this->conn->connect_error){
            die("Connection failed " . $this->conn->connect_error);
        }
        //echo "Connected successfully <br>";
        return $this->conn;
    }

    // Ejecutar una consulta SQL
    public function kontsultaErabiltzaile($conn, $erabiltzailea, $pasahitza){
        $sql = "SELECT * FROM usuarios WHERE Usuario = '$erabiltzailea' AND pass = '$pasahitza'";        $result = $conn->query($sql);
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "erabiltzaile: " . $row["Usuario"] . " pasahitza: " . $row["pass"];
                return true; // Devuelve true si encuentra al menos un usuario
            }
        } else{
            echo "0 results";
            return false; // Devuelve false si no encuentra usuarios
        }
    }

    //* Añadir usuarios a la base de datos
    public function gehituErabiltzailea($conn, $erabiltzailea, $hashed_password){
        $sql = "INSERT INTO usuarios (Usuario, pass) VALUES ('$erabiltzailea', '$hashed_password')";

        if ($conn->query($sql) === TRUE){
            echo "Usuario insertado correctamente";
        } else {
            echo "Error al insertar el usuario: " . $conn->error;
        }
    }

    //* Verificar si el usuario ya existe en la base de datos
    public function erabiltzaileaExistitzenDa($conn, $erabiltzailea){
        $sql = "SELECT * FROM usuarios WHERE Usuario = '$erabiltzailea'";
        $result = $conn->query($sql);

        return $result->num_rows > 0;
    }

    //* Obtener la contraseña actual del usuario
    public function lortuPasahitza($conn, $erabiltzailea){
        $sql = "SELECT pass FROM usuarios WHERE Usuario = '$erabiltzailea'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0){
            $row = $result->fetch_assoc();
            return $row["pass"];
        } else {
            return false;
        }
    }

    //* Actualizar la contraseña del usuario
    public function eguneratuPasahitza($conn, $erabiltzailea, $hashed_password){
        $sql = "UPDATE usuarios SET pass = '$hashed_password' WHERE Usuario = '$erabiltzailea'";

        if ($conn->query($sql) === TRUE){
            echo "Contraseña actualizada correctamente";
        } else {
            echo "Error al actualizar la contraseña" . $conn->error;
        }
    }

    // Cerrar la conexión
    public function konexioaItxi() {
        $this->conn->close();
    }

}

$db = new DB();
$conn = $db->konexioa();


?>