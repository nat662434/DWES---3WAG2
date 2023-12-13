<?php
    session_start();
    // Establecer el tiempo de expiracion de la sesion
    $tiempoExpiracion = 120; // 2 minutos en segundos
    session_set_cookie_params($tiempoExpiracion, "/");

    //Establecer el tiempo maximo de vida de la sesion en segundos
    ini_set('session.gc_maxlifetime', $tiempoExpiracion);
    
    // Mostrar errores de PHP
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    
    //?session_regenerate_id(true);

    // Verificar si se ha enviado el formulario
    if (isset($_POST['enviar'])){
        $erabiltzailea = $_POST["user"];
        $pasahitza = $_POST["password"];

        require_once 'db.php';
        $db = new DB();
        $conn = $db->konexioa();
        
        
        // Verificar el resultado de la conexión
        if (!$conn) {
            die("Error de conexión: " . mysqli_connect_error());
        }

        // Verificar si el usuario existe y la contraseña es valida
        if ($erabiltzailea === "db" && $db->erabiltzaileaExistitzenDa($conn, $erabiltzailea) && password_verify($pasahitza, $db->lortuPasahitza($conn, $erabiltzailea))) {            
            $_SESSION["erabiltzailea"] = $erabiltzailea;
            $_SESSION['ultimo_acceso'] = time();

            // Establecer una variable de sesión para indicar éxito
            //$_SESSION["login_success"] = true;

            // Redirigir a otra página después de enviar el formulario
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
<?php
// Verificar si se ha establecido la variable de sesión de éxito y realizar la redirección
/*if (isset($_SESSION["login_success"]) && $_SESSION["login_success"]) {
    // Limpiar la variable de sesión de éxito
    unset($_SESSION["login_success"]);
}*/


?>