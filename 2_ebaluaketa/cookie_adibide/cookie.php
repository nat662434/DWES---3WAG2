<?php
    setcookie("erabiltzailea", "Sergio", time()+20); // la cookie se borra al pasar el tiempo puesto después de time en seg
    
?>

<!DOCTYPE html>
<html lang="en">
    <body>
    <?php
        if (isset($_COOKIE["erabiltzailea"])){
            echo "Erabiltzailea: " .$_COOKIE["erabiltzailea"];
        } else {
            echo "<p>Aldagaia ezabatuta</p>";
        }
    ?>
    </body>
</html>