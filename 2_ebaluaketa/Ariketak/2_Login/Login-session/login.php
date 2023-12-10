<?php
    // Establecer el tiempo de expiracion de la sesion
    $tiempoExpiracion = 120; // 2 minutos en segundos
    session_set_cookie_params($tiempoExpiracion, "/");

    //Establecer el tiempo maximo de vida de la sesion en segundos
    ini_set('session.gc_maxlifetime', $tiempoExpiracion);

    //session_cache_expire(2); // Extablecer el tiempo maximo de vida de la sesion en minutos
    
    session_start();
    
    // Mostrar errores de PHP
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    
    // Verificar si la sesión está activa
    if (isset($_SESSION["erabiltzailea"]) && isset($_SESSION['ultimo_acceso']) && (time() - $_SESSION['ultimo_acceso']) <= $tiempoExpiracion) {
        // La sesión está activa, redirigir a la página protegida
        header("Location: usuario.php");
        exit();
    }
    /*if (isset($_SESSION["erabiltzailea"])) {
        // Comprobar si la sesion ha expirado
        if (isset($_SESSION['ultimo_acceso']) && (time() - $_SESSION['ultimo_acceso']) > $tiempoExpiracion) {            
            // La sesion ha expirado, destruir la sesion y redirigir a login.php
            session_unset();
            session_destroy();
            header("Location: login.php");
            exit();

        }
        // La sesión está activa, redirigir a la página protegida
        header("Location: usuario.php");
        exit();
    }*/
    
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


        //$hashed_password_from_db = $db->lortuPasahitza($conn, $erabiltzailea);

        ////$db->kontsultaErabiltzaile($conn);

        // $usuarioCorrecto = $db->kontsultaErabiltzaile($conn, $erabiltzailea, $pasahitza);

        // if ($usuarioCorrecto) {

        // Verificar si el usuario existe y la contraseña es valida
        if ($erabiltzailea === "db" && $db->erabiltzaileaExistitzenDa($conn, $erabiltzailea) && password_verify($pasahitza, $db->lortuPasahitza($conn, $erabiltzailea))) {            
            // todo: Guardar en las cookies (con una duración de una hora, puedes ajustar esto según tus necesidades)
            // setcookie("erabiltzailea", $erabiltzailea, time() + 3600, "/");
            // setcookie("pasahitza", $pasahitza, time() + 3600, "/");

            // También puedes guardar los datos en la sesión si lo deseas
            $_SESSION["erabiltzailea"] = $erabiltzailea;

            // Actualizar el tiempo de la ultima actividad en la sesion
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