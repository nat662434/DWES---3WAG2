<?php 
// Mostrar errores de PHP
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

if (isset($_POST['enviar'])){
    $erabiltzailea = $_POST["user"];
    $pasahitza = $_POST["password"];

    require_once 'db.php';
    $db = new DB();
    $conn = $db->konexioa();

    // Verificar el resultado de la conexion
    if (!$conn){
        die("Error de conexion: " . mysqli_connect_error());
    }

    // Realiza la validacion de las credenciales
    if ($erabiltzailea === "db" && $db->erabiltzaileaExistitzenDa($conn, $erabiltzailea) && password_verify($pasahitza, $db->lortuPasahitza($conn, $erabiltzailea))){
        setcookie("user", $erabiltzailea, time() + 120);

        // Redireccionar al usuario a la pagina usuario.php
        header("Location: usuario.php");
        exit();
    } else {
        $error_message = "Erabiltzailea edo pasahitza txarto daude";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <img src="IFC.png" alt="logo" style="width:20%;">
    <h1>ERABILTZAILEA</h1>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <fieldset>
            <label for="UserName">Erabiltzaile</label>
            <input type="text" id="UserName" name="user">
            <label for="Password">Pasahitza</label>
            <input type="password" id="Password" name="password">
            <input type="submit" value="Enviar" name="enviar">
        </fieldset>
    </form>
    <?php
    if (isset($error_message)) {
        echo "<p style='color: red;'>$error_message</p>";
    }
    ?>

</body>

</html>