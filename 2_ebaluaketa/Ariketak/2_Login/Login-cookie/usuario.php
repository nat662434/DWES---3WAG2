<?php
require_once 'db.php';
$db = new DB();

// Verificar si el usuario ha iniciado sesion
if (!isset($_COOKIE["user"])){
    // Redireccionar al login en caso de no iniciar sesion
    header("Location: login.php");
    exit();
}

// Verificar si se ha enviado el formulario
if (isset($_POST['enviar'])){
    $erabiltzailea = $_POST["Usuario"];
    $pasahitza = $_POST["Password"];

    // Cifrar la contraseña con password_hash
    $hashed_password = password_hash($pasahitza, PASSWORD_BCRYPT);

    $conn = $db->konexioa();

    // Verificar el resultado de la conexion
    if (!$conn){
        die("Error de conexion: " . mysqli_connect_error());
    }

    //* Verificar si el usuario ya existe 
    if ($db->erabiltzaileaExistitzenDa($conn, $erabiltzailea)){
        echo '<script>
                var actualizar_contrasena = confirm("El usuario ya existe. ¿Desea actualizar la contraseña?");
                if (actualizar_contrasena) {
                    // Redirigir a otra página para actualizar la contraseña
                    window.location.href = "usuario.php?actualizar=true&usuario=' . $erabiltzailea . '&password=' . $hashed_password . '";
                } else {
                    alert("Contraseña no actualizada.");
                }
            </script>';

        //* Si la URL contiene el parametro "actualizar", se actualiza la contraseña
        if (isset($_GET['actualizar']) && $_GET['actualizar'] === 'true'){
            $erabiltzailea = $_GET["usuario"];
            $hashed_password = $_GET["password"];

            // Actualizar la contraseña del usuario
            $db->eguneratuPasahitza($conn, $erabiltzailea, $hashed_password);

            header("Location: usuario.php");
            exit();
        }
    } else {
        $db->gehituErabiltzailea($conn, $erabiltzailea, $hashed_password);

        //Redirigir a otra pagina despues de enviar el formulario
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