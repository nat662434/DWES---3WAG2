<?php
require '../db.php';

if (isset($_GET['letra'])){
    $letra = $_GET['letra'];

    if(!empty($letra)){
        $results = $db->selectAll();

        $decode = json_decode($results, true);
        // echo $results;
        
        foreach ($decode as $data){
            $apellido = $data['abizenak'];
            if (is_string($apellido) && strtolower(substr($apellido, 0, strlen($letra))) === strtolower($letra)){
                echo $data['abizenak'] . "<br>";
            }
        }

    }
    
}
?>

<html>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
        <label>Primeras letras de un apellido: </label><br><br>
        <input type="text" name="letra"><br><br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>