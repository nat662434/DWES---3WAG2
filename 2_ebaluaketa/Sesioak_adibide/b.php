<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <body>
    <?php
        // Bistaratu aldagaiak
        // echo "Izena: " . $_SESSION["izena"] . "<br>";
        // echo "Kolorea: " . $_SESSION["kolorea"];
        // session_unset(); // para borrar los datos de sesion (no destruirlos)
        if (!isset($_SESSION["izena"])){
            echo "Aldagaiak definitu gabe";
        } else {
            echo "Izena: " . $_SESSION["izena"] . "<br>";
            echo "Kolorea: " . $_SESSION["kolorea"];
        }
    ?>
    </body>
</html>

