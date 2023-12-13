<?php
session_start();

// Mostrar errores de PHP
error_reporting(E_ALL);
ini_set('display_errors', 1);



// Comprobar si la sesion esta activa
if (!isset($_SESSION["erabiltzailea"])){
    // Redirigir a la pagina de inicio de sesion
    header("Location: login.php");
    exit();
}

// Actualizar el tiempo de la ultima actividad en la sesion
// $_SESSION['ultimo_acceso'] = time();

// Cierre de sesion despues de 2 minutos de inactividad
$tiempoExpiracion = 120;
if (isset($_SESSION['ultimo_acceso']) && (time() - $_SESSION['ultimo_acceso']) > $tiempoExpiracion){
    // Desctruir todas la variable de sesion
    session_unset();
    session_destroy();

    // Borrar la cookie de sesion si esta definida
    if (isset($_COOKIE[session_name()])){
        setcookie(session_name(), '', time() - 3600, '/');
    }

    // Redirigir a la pagina de inicio de sesion
    header("Location: login.php");
    exit();
}



require_once 'db.php';
$db = new DB();

// Verificar si se ha enviado el formulario
if(isset($_POST['enviar'])){
    $erabiltzailea = $_POST["Usuario"];
    $pasahitza = $_POST["Password"];

    // Cifrar la contraseña con password_hash
    $hashed_password = password_hash($pasahitza, PASSWORD_BCRYPT);

    // require_once 'db.php';
    // $db = new DB();
    $conn = $db->konexioa();

    // Verificar el resultado de la conexion
    if (!$conn){
        die("Error de conexion: " . mysqli_connect_error());
    }

    //* Verificar si el usuario ya existe
    if ($db->erabiltzaileaExistitzenDa($conn, $erabiltzailea)){
        // Obtener la contraseña actual
        //$contraseña_actual = $db->lortuPasahitza($conn, $erabiltzailea);

        // Preguntar si quiere actualizar la contraseña usando JavaScript
        echo '<script>
                var actualizar_contrasena = confirm("El usuario ya existe. ¿Desea actualizar la contraseña?");
                if (actualizar_contrasena) {
                    // Redirigir a otra página para actualizar la contraseña
                    window.location.href = "usuario.php?actualizar=true&usuario=' . $erabiltzailea . '&password=' . $hashed_password . '";
                } else {
                    alert("Contraseña no actualizada.");
                }
            </script>';

            //* Si la URL contiene el parametro "actualizar", se actuliza la contraseña
            if (isset($_GET['actualizar']) && $_GET['actualizar'] === 'true'){
                $erabiltzailea = $_GET["usuario"];
                $hashed_password = $_GET["password"];

                // Actualizar la contraseña del usuario
                $db->eguneratuPasahitza($conn, $erabiltzailea, $hashed_password);
                
                header("Location: usuario.php");
                exit();
            }
        // if ($actualizar_contrasena){
        //     // Actualiza la contraseña del usuario
        //     $db->eguneratuPasahitza($conn, $erabiltzailea, $hashed_password);
        // } else {
        //     echo "Contraseña no actualizada";
        // }
    } else {
        // Insertar el nuevo usuario en la base de datos
        $db->gehituErabiltzailea($conn, $erabiltzailea, $hashed_password);

        // Redirigir a otra pagina despues de enviar el formulario
        header("Location: usuario.php");
        exit();
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erabiltzaileak gehitu</title>
</head>

<body>
    <img src="IFC.png" alt="logo" style: width=20%;>
    <h1>ERABILTZAILEA</h1>
    <form method="POST" action="usuario.php">
        <fieldset>
            <legend>Erabiltzailea:</legend>
            <label for="UserName">Erabiltzaile</label>
            <input type="text" id="UserName" name="Usuario"><br><br>
            <label for="Password">Pashitza</label>
            <input type="password" id="Password" name="Password"><br><br>
            <input type="submit" value="Submit" name="enviar">
        </fieldset>
    </form>

</body>

</html>